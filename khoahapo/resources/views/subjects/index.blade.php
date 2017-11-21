
@extends('layouts.admin')
@section('sidebar')
  <h2>Danh sách môn hoc</h2>
  <h5><span class="glyphicon glyphicon-time"></span> Post by Japan, 2017.</h5>
  <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span>
 <span style="float: right;margin-right: 108px;"><a  href="{{ route('create-subject') }}" class="btn btn-primary">Thêm mới tài khoản</a></span>
  </h5><br>
<table style="width:90%"  class="table table-hover">

   <tr>
    <th>STT</th>
    <th>Tên môn học</th> 
    <th>Kỳ học</th>
    <th>Chức năng</th>
</tr>
@foreach($data as $key) 
<tr>
    <td>{{ $key->subjects_id }}</td>
    <td>{{ $key->name_subject }}</td>
    <td>{{ $key->number_semester }}</td>
    <td>
  <form class="form-delete" method="DELETE" action="{{ route('delete-student', $key->students_id) }}">
       <button onclick="myFunction()" type="submit" class="btn btn-danger">Xóa</button>
   </form>
   <a href="{{ route('edit-student',$key->students_id) }}" class="btn btn-success link-edit">Sủa</a>
       
    </td>
</tr>
@endforeach
</table>
@endsection



