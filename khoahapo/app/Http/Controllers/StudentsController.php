<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;
class StudentsController extends Controller
{

    public function __construct(){

    }

    public function index()
    {

    	  $dataStudents = students ::all();
    	  return view('students.index',['data'=> $dataStudents]);
    }
    public function create(){
        return view('students.create');

    }
    public function store(Request $request )
    {
        $students = new students;
          $students ->name = $request->name_student;
          $students ->email = $request->email_student;
          $students ->phone = $request->phone_student;
          $students->address = $request->address_student;
          $students->save();
          return redirect('index');
          
    }
    public function show($id)
    {
        echo "day la show";
    }

    public function edit($id)
    {
        echo "chinh sua du lieu $id";
    }
    public function delete()
    {
    	
    }
}

