<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Alert Systems International</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('css/app.css') }}" rel="stylesheet">

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-46209739-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body id="app-layout">
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a href="{{ url('/') }}" class="pull-left"><img src="{{url('img/logo.png')}}" style="padding:5px;"></a>
                <a class="navbar-brand" style="margin-left:5px;margin-right:100px;" href="{{ url('/') }}">
                    <strong>Alert Systems International</strong>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{ url('products') }}">Products <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li>
                            @foreach(Config::get('config.products') as $group=>$value)
                                <a href="{{url('product', $group)}}">{{$group}}</a>
                            @endforeach
                        </li>
                        </ul>
                    </li>
                    <li><a href="{{ url('resources') }}">Resources</a></li>
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <a href="#" class="back-to-top">Back to Top</a>

    @yield('content')
    
    <div class="navbar navbar-inverse footer-text">
        <div class="container">
            <br>
            <div class="text-center footer-text">Copyright 2016 Alert Systems International - All rights reserved</div>
            <div class="text-center footer-text"><a href="{{url('products')}}">Products</a> | <a href="{{url('resources')}}">Resources</a> | <a href="{{url('contact')}}">Contact</a></div>
            <br>
        </div>
    </div>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{ url('js/app.js') }}"></script>

    @yield('script')

</body>
</html>
