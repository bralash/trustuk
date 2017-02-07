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
                    <img src="{{URL::asset('images/admin_logo.png')}}" alt="">
                </a>
            </div>
            <ul>
                <li><a href="{{URL::to('/admin/profile')}}"><i class="entypo-user"></i> Profile</a></li>
                <li><a href="{{URL::to('/admin')}}"><i class="entypo-chart-bar"></i> Dashboard</a></li>
                <li><a href="{{URL::to('/admin/deposit')}}"><i class="entypo-briefcase"></i> Make Deposit</a></li>
                <li><a href="{{URL::to('/')}}" target="_blank"><i class="entypo-globe"></i> Main Site</a></li>
                <li><a href="{{URL::to('/auth/logout')}}"><i class="entypo-logout"></i> Logout</a></li>
            </ul>
        </div>
        <div class="main-content">
            <h1 class="title">@yield('title')</h1>
            @yield('stats')
        </div>
    </section>

    <script src="{{URL::asset('js/vendor/jquery.js')}}"></script>
    <script src="{{URL::asset('js/semantic.js')}}"></script>
</body>
</html>