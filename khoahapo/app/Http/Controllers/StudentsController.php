<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\students;
use DB;
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
          $students ->number_student_id = $request->number_student_id;
          $students ->email = $request->email_student;
          $students ->phone = $request->phone_student;
          $students ->password = bcrypt($request->pass_student);
          $students->address = $request->address_student;
          $students->save();
          return redirect('index');
          
    }
    public function edit($students_id)
    {
        $dataEditStudents = students::findOrFail($students_id);

        return view('students.edit',['dataEdit'=>$dataEditStudents]);
    }

    public function update($students_id, Request $request)
    {

         $dataUpdate = students::find($students_id);
         $dataUpdate ->name = $request->name_student;
         $dataUpdate ->number_student_id = $request->number_student_id;
         $dataUpdate ->email = $request->email_student;
         $dataUpdate ->phone = $request ->phone_student;
         $dataUpdate ->password = bcrypt($request ->pass_student);
         $dataUpdate ->address = $request->address_student;

         $dataUpdate->save();
         return redirect()->action('StudentsController@index');     

    }

    public function destroy($students_id)
    {
      students ::find($students_id)->delete();
      return redirect()->action('StudentsController@index');
    }
}

