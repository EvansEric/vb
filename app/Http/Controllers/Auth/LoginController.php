<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loggedOut(Request $request)
    {
        return $request->url();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function validateLogin(Request $request)
    {
        $message = [
            'email.required' => 'Username/Email is a required field'
        ];
        $user = $this->username();
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ], $message);
    }

}
