<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div id="app" class="mt-lg-5">
        <div class="container offset-3 col-6">
            <my-header></my-header>
            <router-view></router-view>
        </div>
    </div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
