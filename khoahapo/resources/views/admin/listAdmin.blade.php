@extends('layouts.admin')
@section('sidebar')
    <h2>Danh sách tài khoản đăng nhập</h2>
    <h5><span class="glyphicon glyphicon-time"></span> Post by Japan, 2017.</h5>
    <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span>
        <span style="float: right;margin-right: 108px;"><a href="{{ route('admin.register') }}" class="btn btn-primary">Thêm mới tài khoản</a></span>
    </h5><br>
    <table style="width:90%" class="table table-hover">

        <tr>
            <th>STT</th>
            <th>Họ Và Tên</th>
            <th>Email</th>
            <th>Chức năng
            </th>
        </tr>
        @foreach($data as $key)
            <tr>
                <td>{{ $key->id }}</td>
                <td>{{ $key->username }}</td>
                <td>{{ $key->email }}</td>
                <td>
                    <form class="form-delete" method="DELETE" action="{{ route('delete-student', $key->students_id) }}">
                        <button onclick="myFunction()" type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                    <a href="{{ route('edit-admin',$key->id) }}" class="btn btn-success link-edit">Sủa</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection



