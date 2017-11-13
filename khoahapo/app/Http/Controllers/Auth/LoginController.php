<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\students;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected function guard()
    {
        return Auth::guard('login_students');
    }

    public function __construct()
    {
        $this->middleware('login_students')->except('logout');
    }

    public function username()
    {
        
    }
    public function login()
    {
        return view('admin.login');
    }

    public function getlogin()
    {
        if (Auth::guard('login_students')->attempt(['email' => $email, 'password' => $password])) {
            
            return redirect()->intended('index');
        }
    
        return view('admin.login');
    }

}
