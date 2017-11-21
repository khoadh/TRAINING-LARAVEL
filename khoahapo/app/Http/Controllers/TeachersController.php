<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teachers;

class TeachersController extends Controller
{
   public  function index()
   {
       $dataTeacher = teachers ::all();

       return view('teachers.index',['data'=> $dataTeacher]);
   }
    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request )
    {
        $teacherCreate = new teachers();
        $teacherCreate ->number_teacher_id = $request->number_teacher_id;
        $teacherCreate ->name = $request->name;
        $teacherCreate ->email = $request->email;
        $teacherCreate ->password = bcrypt($request->password);
        $teacherCreate ->phone = $request-> phone;
        $teacherCreate ->address = $request->address;
        $teacherCreate ->level = $request ->level;
        $teacherCreate ->save();
        return redirect('list-teacher');


    }


}
