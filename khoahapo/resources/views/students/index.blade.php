
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .row.content {height: 800px}

    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
  }

  footer {
      background-color: #555;
      color: white;
      padding: 15px;
  }

  @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
    }
    .row.content {height: auto;} 
}
</style>
</head>
<body>

    <div class="container-fluid">
      <div class="row content">
        <div class="col-sm-3 sidenav">
          <h4>Hapo JC</h4>
          <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#section1">Admin</a></li>
            <li><a href="#section3">Sinh Viên</a></li>
            <li><a href="#section3">Giáo Viên</a></li>
             <li><a href="#section3">Môn Học</a></li>
            <li><a href="#section3">Đăng Ký Môn Học</a></li>
            <li><a href="#section3">Quản Lý Điểm Sinh viên</a></li>
        </ul><br>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Blog..">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</div>

<div class="col-sm-9">
  <hr>
  <h2>List User</h2>
  <h5><span class="glyphicon glyphicon-time"></span> Post by Japan, 2017.</h5>
  <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span>
 <span style="float: right;margin-right: 160px;"><a  href="{{ route('create-student') }}" class="btn btn-primary">Thêm mới tài khoản</a></span>
  </h5><br>

  
  <table style="width:90%"  class="table table-hover">

   <tr>
    <th>STT</th>
    <th>Họ Và Tên</th> 
    <th>Email </th>
    <th>Số điện thoại</th>
    <th>Địa chỉ</th>
    <th>Chức năng

    </th>
</tr>
@foreach($data as $key) 
<tr>
    <td>{{ $key->students_id }}</td>
    <td>{{ $key->name }}</td>
    <td>{{ $key->email }}</td>
    <td>{{ $key->phone }}</td>
    <td>{{ $key->address }}</td>
    <td>
        <button type="button" class="btn btn-danger">Xóa</button>
        <button type="button" class="btn btn-success">Sủa</button>
    </td>
</tr>
@endforeach
</table>

</div>
</div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>

