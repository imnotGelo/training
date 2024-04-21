<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function register()
    {
        return redirect()->route('user.login');
    }

    public function render()
    {
        return view('livewire.home');
    }
}
