<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="storage/css/main.css">
        <title>{{$title}}</title>
        


    </head>
    <body>
    <div class="navigation">
        <a href="http://localhost/project001/public/home">
        <p class="navItem">CRASHED</p>
        </a>
        
        <img class="navItem" src="storage/image/menu.png" alt="menu" height="30" width="30">
    </div>
@yield('content')
    </body>
</html>
