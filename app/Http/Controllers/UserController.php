<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class UserController extends Controller
{
    public function home()
    {
        $users = User::all();
        return view ('users.index')->with('users', $users);
    }
}
