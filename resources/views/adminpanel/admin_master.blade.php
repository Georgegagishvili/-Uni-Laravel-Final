<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/admin.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}">
                Back To Site
            </a>
            <a class="navbar-brand" href="{{route('adminpanel')}}">
                Orders
            </a>
            @if(Auth::user()->is_admin == 1)
            <a class="navbar-brand" href="{{route('admincategories')}}">
                Categories
            </a>
            <a class="navbar-brand" href="{{route('adminproducts')}}">
                Products
            </a>
            @endif

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item dropdown">
                        <a id="" class="nav-link" href="#" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false" v-pre>
                             {{Auth::user()->name}}
                        </a>
                        <li><a style ='cursor: pointer;' 
                            onclick="document.getElementById('logout-form').submit();">
                        Log Out</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</div>
</body>
</html>