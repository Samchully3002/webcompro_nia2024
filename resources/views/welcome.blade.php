<!DOCTYPE html>
<html lang="eng">
    <head>
       @include('frontend.includes.head')
    </head>
    <body>
      @include('frontend.includes.header')
      @yield('content')
      @include('frontend.includes.footer')
    </body>
    <script src="{{asset('frontend/js/wow.min.js')}}"></script>
    <script type="text/javascript">
        new WOW().init();
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
          
        var circular = window.pageYOffset /180;
            $(window).scroll(function(){
            $('.rotate_animate').css({transform:'rotate'+circular+'rad'});
            });
      });
    </script>
</html>
