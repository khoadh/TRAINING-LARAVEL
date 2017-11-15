<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\admin;
use Mail;

class AdminController extends Controller
{
    use AuthenticatesUsers;
 var $email;

    public function __construct()
    {
        return $this->middleware('login_admin')->except(['login', 'postlogin']);
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }


    public function login()
    {
        return view('admin.login');
    }

    public function postlogin(Request $request)
    {

        if (Auth::guard('admin')->attempt([
                'username' => $request->username,
                'password' => $request->password
            ])) {
            return redirect()->route('index');
        }

        return redirect()->route('admin.getlogin');

    }
    public function register()
    {
        return view('admin.register');
    }

    public function postregister(Request $request)
    {
        $admin = new admin() ;
        $admin ->username = $request-> username;
        $admin-> password  = bcrypt($request -> password);
        $admin-> email = $request -> email;
        $admin -> lever = $request -> lever;
        $admin ->save();

        $email = new OrderShipped($admin);
          Mail::to($admin)->send($email);


        return redirect()->route('admin.getlogin');
    }

}
