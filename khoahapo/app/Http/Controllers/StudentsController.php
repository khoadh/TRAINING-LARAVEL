<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\studenst;
class StudentsController extends Controller
{
    public function __construct(){

    }

    public function index()
    {
    	$dataStudents = DB::table('students')->get();
    	$data = [
        'students'=>$dataStudents
    	]
    	 return view('admins.index', $data);
    }
}
