<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function postRegister(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|min:3|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|max:255',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = new User();

        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
    
        $user->save();

        return back()->with('success', 'Account successfully created');
    }

    public function login(){
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)){
            return redirect('/home')->with('success', 'Login Successful');
        }
        return back()->with('error', 'Email or Password Invalid');
    }

    public function home(){
        $users = User::get();
        return view('home', compact('users'));     
    }

    public function edit(int $id){
        $user = User::findOrFail($id);
        return view('edit', compact('user'));
    }

    public function update(Request $request, int $id){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|min:3|max:255|unique:users,username,'.$id,
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        $user = User::findOrFail($id);
    
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
    
        $user->save();
    
        return redirect()->route('home')->with('success', 'Account updated successfully');
    }

    public function delete(int $id){
        $user = User::findOrFail($id);
        $user -> delete();

        return redirect()->back()->with('status', 'Delete successfully');
    }
    
}
