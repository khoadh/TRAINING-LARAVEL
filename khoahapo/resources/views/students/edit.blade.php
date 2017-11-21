@extends('layouts.admin')
@section('sidebar')
<div class="col-sm-9">
<hr>
  <h2>Chỉnh sủa thông tin sinh viên</h2>
  <h5><span class="glyphicon glyphicon-time"></span> Post by Japan, 2017.</h5>
  <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span>
  </h5><br>

  <form method="POST" action="{{ route('edit-student',$dataEdit['students_id']) }}">
  {{ method_field('PUT') }}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label for="email_user">Mã số sv</label>
      <input type="email" class="form-control" id="number_student" placeholder="NumberStudent" name="number_student_id" value="{!! $dataEdit['number_student_id'] !!}">
    </div>
  <div class="form-group">
    <label for="name_user">Họ tên</label>
   
    <input type="name" class="form-control" id="name_student" placeholder="Name" name="name_student" value="{!! $dataEdit['name'] !!}">
  </div>
   <div class="form-group">
    <label for="email_user">Email</label>
    <input type="email" class="form-control" id="email_student" placeholder="Email" name="email_student"  value="{!! $dataEdit['email'] !!}">
  </div>
  <div class="form-group">
    <label for="phone_user">Số điện thoại</label>
    <input type="phone" class="form-control" id="phone_student" placeholder="Phone" name="phone_student"  value="{!! $dataEdit['phone'] !!}">
  </div>
  <div class="form-group">
    <label>Địa chỉ</label>
    <input type="text" class="form-control" id="address_student" placeholder="address" name="address_student"  value="{!! $dataEdit['address'] !!}">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
   <a  href="{{ route('index') }}" class="btn btn-primary">Trở về</a></span>
</form>
</div>
@endsection