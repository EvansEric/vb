<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.home');
    }

    public function termsOfUse() {
        return view('home.terms-of-use');
    }

    public function privacy() {
        return view('home.privacy');
    }
}
