<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ URL::asset('css/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('js/js/bootstrap.bundle.min.js') }}" rel="script">
</head>

<body>


    <h1>Login</h1>


    <form onsubmit="shew()" action="signin" method="post">
        @csrf
        <div class="container">
            <label for="uname"><b>Email</b></label>
            <input class="form-control" type="text" placeholder="Enter email" name="email" required />
            <label for="psw"><b>Password</b></label>
            <input class="form-control" type="password" placeholder="Enter Password" name="password" required />
            <a href="dashboard.html">
                <button class="btn btn-primary" type="submit" name="login">Login</button>
            </a>
            <label>
                <input type="checkbox" checked="checked" name="remember" /> Remember
                me
            </label>

            <span class="psw">
                Don't have an account?<a href="/signup"> Create Account</a></span>
        </div>

        <div class="container" style="background-color: #f1f1f1">
            <button type="reset" class="cancelbtn">Cancel</button>
        </div>
    </form>
</body>

</html>