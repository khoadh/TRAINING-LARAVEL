@extends('layouts.admin')
@section('sidebar')
   <h2>Thêm mới môn học</h2>
  <h5><span class="glyphicon glyphicon-time"></span> Post by Japan, 2017.</h5>
  <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span>
  </h5><br>

  <form method="POST" action="{{ route('create-subject') }}">
  <div class="form-group">
    <label for="name_user">User Name</label>
     {{ csrf_field() }}
    <input type="name" class="form-control" id="name_student" placeholder="Name" name="name_student">
  </div>
  <div class="form-group">
    <label>Kỳ học</label>
    <input type="text" class="form-control" id="address_student" placeholder="address" name="address_student">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
   <a  href="{{ route('index') }}" class="btn btn-primary">Trở về</a></span>
</form>
@endsection
