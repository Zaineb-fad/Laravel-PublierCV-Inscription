<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
         .t12{
padding-left:1150px;
background-color:orange;
}
  .t12 ul li a {
        background-color:#eee;
        color:black;
        font-size:15px;
        

      }

    </style>
</head>
<body>
    <div id="app">
       <div class="t12">
      <ul class="nav nav-tabs">
          

      

     <li  role="presentation"><a href="/register"type="button">register </a></li>
  <li  role="presentation"><a href="/login"type="button">Login </a></li>
    <li  role="presentation"><a href="file-import-export"type="button">Excel  </a></li>

          
      </ul></div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
