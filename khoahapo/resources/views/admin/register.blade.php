<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch'
          href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
<div class="pen-title">
    <h1>Create an account</h1><span>Pen <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> by <a
                href='http://haposoft.com'>hung khoa</a></span>
</div>
<!-- Form Module-->
<div class=" form-module">
    <div class="form">
    </div>
    <div class="form">
        <h2>Create an account</h2>
        <form method="POST" action="{{ route('admin.register')  }}">
            <input type="text" placeholder="Username" name="username"/>
            {{ csrf_field() }}
            <input type="password" placeholder="Password" name="password"/>
            <input type="email" placeholder="Email Address" name="email"/>
            <input type="tel" placeholder="Phone Number" name="phone"/>
            <input type="hidden" placeholder="Lever" name="lever" value="1"/>
            <button type="submit">Register</button>
        </form>
    </div>
    <div class="cta"><a href="{!! route('admin.getlogin') !!}">Login Admin</a></div>
</div>
</body>
</html>
