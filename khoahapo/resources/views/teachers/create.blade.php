@extends('layouts.admin')
@section('sidebar')
    <h2>Thêm mới giáo viên</h2>
    <h5><span class="glyphicon glyphicon-time"></span> Post by Japan, 2017.</h5>
    <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span>
    </h5><br>

    <form method="POST" action="{{ route('create-teacher') }}">
        <div class="form-group">
            <div class="form-group">
                <label>Mã giáo viên</label>
                <input type="text" class="form-control"  placeholder="number" name="number_teacher_id">
            </div>
            <label for="name_user">Họ tên</label>
            {{ csrf_field() }}
            <input type="name" class="form-control" id="name_subject" placeholder="Name" name="name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" id="semester" placeholder="semester" name="email">
        </div>
        <div class="form-group">
            <label>Mật khẩu</label>
            <input type="text" class="form-control" id="semester" placeholder="semester" name="password">
        </div>
        <div class="form-group">
            <label>Số điện thoại</label>
            <input type="text" class="form-control" id="semester" placeholder="semester" name="phone">
        </div>
        <div class="form-group">
            <label>Địa chỉ</label>
            <input type="text" class="form-control" id="semester" placeholder="semester" name="address">
        </div>
        <div class="form-group">
            <label>Level</label>
            <input type="text" class="form-control" id="semester" placeholder="semester" name="level" value="2">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        <a  href="{{ route('list-subject') }}" class="btn btn-primary">Trở về</a></span>
    </form>
@endsection
