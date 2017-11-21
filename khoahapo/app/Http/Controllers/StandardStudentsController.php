<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\StandardStudents;

class StandardStudentsController extends Controller
{
 public function index()
 {
     $data = DB::table('standard_students')
               ->join('students','standard_students.students_id','=','students.students_id')
               ->join('standards','standard_students.students_id','=','standards.standards_id')
                ->get();

     return view('StandarStudents.index',['data'=>$data]);
 }

 public function create()
 {
     return view('StandarStudents.create');
 }

    public function store(Request $request )
    {

    }

}
