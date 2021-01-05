<?php

namespace App\Http\Controllers\Moffice;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = 'moffice/';

    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        
    }

    protected function guard()
    {
        return Auth::guard('moffice');
    }
    
    protected function logout()
    {
        Auth::guard('moffice')->logout();
        return redirect()->route('moffice.login');
    }

    public function username()
    {
        return 'username';
    }

    public function showLoginForm()
    {
        return view('moffice.login');
    }
}