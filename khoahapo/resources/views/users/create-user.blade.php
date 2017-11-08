
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add User</title>
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
            <li class="active"><a href="#section1">Home</a></li>
            <li><a href="#section2">Users</a></li>
            <li><a href="#section3">Family</a></li>
            <li><a href="#section3">Photos</a></li>
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

  <form>
  <div class="form-group">
    <label for="name_user">User Name</label>
    <input type="name" class="form-control" id="name_user" placeholder="Name">
  </div>
   <div class="form-group">
    <label for="email_user">Email</label>
    <input type="email" class="form-control" id="email_user" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="phone_user">Phone</label>
    <input type="phone" class="form-control" id="phone_user" placeholder="Phone">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="password" class="form-control" id="address_user" placeholder="address">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check 
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</div>
</div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
