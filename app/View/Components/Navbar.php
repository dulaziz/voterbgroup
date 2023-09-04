<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // $navbar = [
        //     'Home' => '/',
        //     'Login' => '/login'
        // ];
        // return view('layouts.navbar', [
        //     'navbar' => $navbar
        // ]);
        return view('layouts.navbar');
    }
}
