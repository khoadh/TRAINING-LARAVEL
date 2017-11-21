
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href={{asset('public/css/bootstrap.min.css')}}>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
    .row.content {height: 800px}
.form-delete{
  float: left;
}
.form-control{
	width: 70%;
}
.link-edit{
  float: right;
}
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
        <div class="col-md-3 sidenav">
          <h4>Hapo JC</h4>
          <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="{{ route('listAdmin') }}">Admin</a></li>
            <li><a  href="{{ route('index') }}">Sinh Viên</a></li>
            <li><a  href="{{ route('list-teacher') }}">Giáo Viên</a></li>
             <li><a  href="{{ route('list-subject') }}">Môn Học</a></li>
            <li><a href="#section3">Đăng Ký Môn Học</a></li>
            <li><a href="{{ route('quan-ly-diem') }}">Quản Lý Điểm Sinh viên</a></li>
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

<div class="col-md-9">
<body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div>
            @yield('content')
        </div>
    </body>
 
</div>
</div>
</div>
<footer class="container-fluid">
  <p>Footer Text</p>
</footer>
<script>
function myFunction() {
    alert("Ban chắc muốn Xóa không??");
}
</script>
</body>
</html>


