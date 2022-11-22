<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="custome_css.css" rel="stylesheet">
    <link href="{{ URL::asset('css/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/custome_css.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('js/js/bootstrap.bundle.min.js') }}" rel="script">
    <title>EITSEC GHANA</title>
</head>

<body style="overflow-x: hidden;">
    <div class="header container-fluid">
        <a id="logo" href="/"><img src="{{URL::asset('img/logo.png')}}" alt="" srcset="" width="100%" height="100%"></a>
        <h3 class="logo">EITSEC GHANA</h3>
        <div class="header-right">
            <a class="btn" href="#home"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 p-1">
            <div class="sidebar">
                <a class="ACTIVE" href="/">Send invoices</a>
                <a class="ACTIVE2" href=" /invoices">View sent invoices</a>
                <a href="#">Help</a>
                <a href="/logout">Log out</a>
            </div>
        </div>
        @yield('content')

    </div>

</body>

</html>