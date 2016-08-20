<!DOCTYPE html>
<html>
    <head>
        <title>Produit</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <style type="text/css">
            body{
                background: url("{{asset('img/back.jpg')}}")no-repeat center center fixed ;
                background-size: 100% auto;
            }
            header{opacity: 0.7;}
            footer{background-color: #fff; opacity: 0.9; text-align: center;}
        </style>

    </head>
    <body>
    <header class="jumbotron" >
        <div class="container">
            <h1>hello Batata!</h1>
            <p>Have a nice day ;)</p>
        </div>
        <div class="col-md-2">
            @if(Auth::check())
            <a href="/admin">{{ Auth::user()->name }}'s Area</a>
            <a href="/produit">Home</a>
            <a href="/auth/logout">Logout</a>

            @else
            <a href="/auth/login">Login</a>
            <a href="/produit">Home</a>
            @endif
        </div>
    </header>

    @yield('content')

    <footer class="container" >
        &copy; All Right Granted for who want to learnt change or share,,
    </footer>    

