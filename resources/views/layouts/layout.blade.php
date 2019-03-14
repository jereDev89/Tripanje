<!DOCTYPE html>
<html>
  <head>
    <title>Trip App</title>
    <meta charset="UTF-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- STYLE -->
    <link rel="stylesheet" href="<?php echo asset('css/style.css') ?>" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo asset('css/animate.css') ?>" type="text/css" media="all"/>
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Charm:700" rel="stylesheet">
    <style>
        body {
          background-image: url(<?php echo asset('images/background12.jpg') ?>);
        }
        a, a:link, a:visited {
          color: #FFF;
          text-decoration: none;
        }
        a:hover {
        	font-weight: bold;
        }
    </style>
  </head>
  <body>
    
    @yield('content')

  </body>
</html>
