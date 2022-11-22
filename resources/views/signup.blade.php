<!DOCTYPE html>
<html>

<head>
    <title>Sign up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ URL::asset('css/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/signup.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('js/js/bootstrap.bundle.min.js') }}" rel="script">
</head>


<body>



    <form onsubmit="shew()" id="regForm" action="/register" method="post">
        @csrf
        <div class="imgcontainer">
            <h1>Sign Up</h1>
        </div>

        <div class="tab">
            Name:
            <p>
                <input placeholder="First name..." oninput="this.className = ''" name="fname" class="form-control" required />
            </p>
            <p>
                <input placeholder="Last name..." oninput="this.className = ''" name="lname" class="form-control" required />
            </p>
        </div>
        <div class="tab">
            Contact Info:
            <p>
                <input placeholder="E-mail..." oninput="this.className = ''" name="email" class="form-control" required />
            </p>
            <p>
                <input placeholder="Phone..." oninput="this.className = ''" name="phone" class="form-control" required />
            </p>
        </div>
        <div class="tab">


        </div>
        <div class="tab">
            Enter new password:
            <p>
                <input placeholder="Password..." oninput="this.className = ''" name="password" type="password" class="form-control" required />
            </p>
            <p>
                <input placeholder="Confirm password..." oninput="this.className = ''" name="rep_password" type="password" class="form-control" required />
            </p>

            <input id="signup" name="signup" type="submit" value="Sign up" />
        </div>
        <div style="overflow: auto; margin-top: 20px;">
            <div>Already have an account? <a href="/login">Sign in</a></div>
            <div style="float: right">

            </div>
        </div>


    </form>


</body>

</html>