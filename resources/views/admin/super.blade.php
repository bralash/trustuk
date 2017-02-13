<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('page_title') | Trustuk Fund Group</title>
    <link rel="stylesheet" href="{{URL::asset('css/semantic.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/entypo/css/entypo.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/pure.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/pure-responsive.css')}}">
    <link href="{{URL::asset('images/fav.png')}}" rel="icon" sizes="192x192">
</head>
<body>

<section class="page-wrapper">
    <div class="side-menu">
        <div class="logo">
            <a href="{{URL::to('/')}}">
                <img src="{{URL::asset('images/super_logo.png')}}" alt="">
            </a>
        </div>
        <ul>
            <li><a href="{{URL::to('/super/users')}}"><i class="entypo-users"></i> Users</a></li>
            <li><a href="{{URL::to('/super/proof')}}"><i class="entypo-docs"></i> Proof</a></li>
        </ul>
    </div>
    <div class="main-content">
        <h1 class="title">@yield('page_title')</h1>
        @yield('stats')
    </div>
</section>

<script src="{{URL::asset('js/vendor/jquery.js')}}"></script>
<script src="{{URL::asset('js/semantic.js')}}"></script>
</body>
</html>