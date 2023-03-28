<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Teacher Login</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'>
    <link rel="stylesheet" href="{{'/'}}admin/auth/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
    <div id="login-box">
        <div class="logo">
            <img src="http://placehold.it/100x100?text=DD" class="img img-responsive img-circle center-block"/>
            <h1 class="logo-caption"><span class="tweak">Teacher</span>Login</h1>
            <h5 class="text-center text-primary">{{Session::get('message')}}</h5>
        </div><!-- /.logo -->
        <div class="controls">
            <form action="{{route('teacher.login')}}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Email" class="form-control" />
                <input type="password" name="password" placeholder="Password" class="form-control" />
                <button type="submit" class="btn btn-default btn-block btn-custom">Login</button>
            </form>

        </div>
    </div>
</div>
<div id="particles-js"></div>
<!-- partial -->
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'></script>
<script src='https://code.jquery.com/jquery-1.11.1.min.js'></script>
<script  src="{{'/'}}admin/auth//script.js"></script>

</body>
</html>
