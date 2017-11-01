<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
	public function __construct()
	{

	}

    public function index_user()
    {
        $users = User::all();
        $data = [
        	'user' => $users
        ];
        return view('profile-user', $data);
    }

    public function create_user()
    {
        return view('user.create_user');
    }
    public function store_user(Request $request)
    {
        
    }

    public function edit_user($id)
    {

    }

    public function update_user()
    {

    }
}
