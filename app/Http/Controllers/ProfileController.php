<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // profile is accessible only to logged in user
    public function __construct()
    {
        $this->middleware('auth');
    }

    // profile form page
    public function profile() {
        $date_sec = strtotime(\Auth::user()->created_at);
        $date_arr = getdate($date_sec);
        return view('user.profile')->with(['date_arr' => $date_arr]);
    }

    // edit profile page
    public function editProfile(){
        $user = \Auth::user();
        $date_sec = strtotime(\Auth::user()->created_at);
        $date_arr = getdate($date_sec);
        return view('user.edit_profile')->with(['user' => $user, 'date_arr' => $date_arr]);
    }
}
