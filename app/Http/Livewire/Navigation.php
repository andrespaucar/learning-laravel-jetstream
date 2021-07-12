<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $menus = [
            [
                "name" => 'Home',
                "route" => route('home'),
                "active" => request()->routeIs('home')
            ],
            [
                "name" => 'Dashboard',
                "route" => route('dashboard'),
                "active" => request()->routeIs('dashboard')
            ],
            [
                "name" => 'Prueba',
                "route" => "#",
                "active" => false
            ],
        ];
        return view('livewire.navigation',compact('menus'));
    }
}
