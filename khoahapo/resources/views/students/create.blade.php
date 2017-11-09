
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="public/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .row.content {height: 800px}

    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
  }
  .form-group{
    width: 50%;
  	
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
  <h2>Add User</h2>
  <h5><span class="glyphicon glyphicon-time"></span> Post by Japan, 2017.</h5>
  <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span>
  </h5><br>

  <form method="POST" action="{{ route('create-student') }}">
  <div class="form-group">
    <label for="name_user">User Name</label>
     {{ csrf_field() }}
    <input type="name" class="form-control" id="name_student" placeholder="Name" name="name_student">
  </div>
   <div class="form-group">
    <label for="email_user">Email</label>
    <input type="email" class="form-control" id="email_student" placeholder="Email" name="email_student">
  </div>
  <div class="form-group">
    <label for="phone_user">Phone</label>
    <input type="phone" class="form-control" id="phone_student" placeholder="Phone" name="phone_student">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" id="address_student" placeholder="address" name="address_student">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
   <a  href="{{ route('index') }}" class="btn btn-primary">Trở về</a></span>
</form>

</div>
</div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
