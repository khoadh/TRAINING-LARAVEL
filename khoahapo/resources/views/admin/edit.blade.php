@extends('layouts.admin')
@section('sidebar')
    <div class="col-sm-9">
        <hr>
        <h2>Chỉnh sủa thông tin Admin</h2>
        <h5><span class="glyphicon glyphicon-time"></span> Post by Japan, 2017.</h5>
        <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span>
        </h5><br>

        <form method="POST" action="{{ route('edit-admin',$dataEdit['id']) }}">
            {{ method_field('PUT') }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="name_user">User Name</label>

                <input type="name" class="form-control"  placeholder="Name" name="name_admin" value="{!! $dataEdit['username'] !!}">
            </div>
            <div class="form-group">
                <label for="email_user">Email</label>
                <input type="email" class="form-control"  placeholder="Email" name="email_admin"  value="{!! $dataEdit['email'] !!}">
            </div>

            <div class="form-group">
                <label>Pass Word</label>
                <input type="text" class="form-control" placeholder="address" name="pass_admin"  value="{!! $dataEdit['password'] !!}">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
            <a  href="{{ route('index') }}" class="btn btn-primary">Trở về</a></span>
        </form>
    </div>
@endsection