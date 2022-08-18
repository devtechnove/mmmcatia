<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MMMCATIA | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/system.css') }}">
    <link rel="stylesheet" href="{{asset('css/some.css')}}">
 
    @stack('styles')
  </head>

  <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static blue-gradient-dark   " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
   
        @yield('content')

    
    <!-- REQUIRED JS SCRIPTS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/some.js') }}"></script>
    <script type="text/javascript">
    $(window).on('load', function() {
      if (feather) {
        feather.replace({
          width: 14, height: 14
        });
      }
    })
  </script>
    @stack('scripts')

   
  </body>

</html>
