<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
	public function __construct()
	{

	}
    public function index()
    {
        $users = User::all();
        $data = [
        	'user' => $users
        ];
        return view('users.profile-user', $data);
    }

    public function create_user()
    {
        return view('users.create-user');
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
