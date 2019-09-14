<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @laravelPWA
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <title>UnsilKu</title>
    <!-- Favicon -->
    <link href="/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="/assets/css/argon.css?v=1.1.0" rel="stylesheet">

    <style>
            *{
              box-sizing: border-box
            }
            #sidebar{
              margin-top: 50px;
              position: fixed;
              left: 0;
              width: 150px;
              text-align: center
            }
            #content{
              padding-left: 150px;
            }
              .list-menu{
                width: 100%;
                float: left;
                text-align: center;
                padding: 30px 20px
              }
              .list-menu .heading{
                width: 100%;
              }
              .img-menu{
                  width: 50px
              }
            @media (max-width:800px){
              #sidebar{
                margin-top: 0;
                width: 100%;
                float: left;
                background: #fff;
                bottom: 0;
                z-index: 1000
              }
              #content{
                padding-left: 0;
              }
              .list-menu{
                width: 25%;
                padding: 10px 20px
              }
              .list-menu .heading{
               font-size: 10px;
              }
              .icon{
                  width: 30px;
                  height: 30px;
              }
              .img-menu{
                  width: 30px
              }
            }
           
            </style>    
           
    @yield('css-after')
</head>
<body class="bg-gradient-default">

    <!-- Sidebar Holder -->
    <nav id="sidebar">
            <div class="row" class="mt-2">
                
                <a href="/home" class="list-menu">
                    <div class="icon icon-shape bg-gradient-danger rounded-circle text-white">
                      <i class="ni ni-circle-08"></i>
                    </div>
                      <h6 class="heading text-danger mb-md-1">Profile</h6>
                  </a>
                  <a href="/skripsi" class="list-menu">
                    <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                      <i class="ni ni-spaceship"></i>
                    </div>
                    <h6 class="heading text-primary mb-md-1">Skripsi</h6>
                  </a>
                  <a href="/praktikum" class="list-menu">
                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                      <i class="ni ni-palette"></i>
                    </div>
                      <h6 class="heading text-warning mb-md-1">Praktikum</h6>
                  </a>
                  <a href="/" class="list-menu">
                    <img class="img-menu" src="/img/logo.png" alt="">
                    <h6 class="heading text-success mb-md-1">UnsilKu</h6>
                  </a>
            </div>
          </nav>
      
   @yield('content')
    <br>
    <br>
    <br>
    <br>
        <!-- Core -->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/popper/popper.min.js"></script>
    <script src="/assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="/assets/vendor/headroom/headroom.min.js"></script>
    <!-- Argon JS -->
    <script src="/assets/js/argon.js?v=1.1.0"></script>

    @yield('js-after')
</body>
</html>
