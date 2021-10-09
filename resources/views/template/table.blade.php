<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .site-header{
            background-color: aquamarine;
            height: 50px;
        }
        .site-menu{
            width: 25%;
            float: left;
            height: 500px;
            background-color: #00A000;
        }
        .site-content{
            width: 75%;
            height: 500px;
            float: left;
            background-color: red;
        }
        .site-footer{
            background-color: yellow;
        }
    </style>
</head>
<body>
<div class="site-header">
    @include('template.include.header')
</div>
<div>
<div class="site-menu">
    @include('template.include.menu')
    @yield('page-menu')
</div>
<div class="site-content">
@yield('content')
</div>
</div>
</body>
</html>
