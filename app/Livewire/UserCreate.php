<?php

namespace App\Livewire;

use Livewire\Component;

class UserCreate extends Component
{

    public function login()
    {
        return redirect()->route('user.login');
    }

    public function render()
    {
        return view('livewire.user-create');
    }
}
