@extends('layouts.admin')
@section('sidebar')
  <h2>Thêm mới môn học</h2>
  <h5><span class="glyphicon glyphicon-time"></span> Post by Japan, 2017.</h5>
  <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span>
  </h5><br>

  <form method="POST" action="{{ route('create-subject') }}">
    <div class="form-group">
      <div class="form-group">
        <label>Mã môn học</label>
        <input type="text" class="form-control"  placeholder="number" name="subjects_id">
      </div>
      <label for="name_user">Môn học</label>
      {{ csrf_field() }}
      <input type="name" class="form-control" id="name_subject" placeholder="Name" name="name_subject">
    </div>
    <div class="form-group">
      <label>Kỳ học</label>
      <input type="text" class="form-control" id="semester" placeholder="semester" name="number_semester">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    <a  href="{{ route('list-subject') }}" class="btn btn-primary">Trở về</a></span>
  </form>
@endsection
