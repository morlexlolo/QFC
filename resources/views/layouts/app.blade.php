<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Quantum Financial Corp">
        <meta name="keywords" content="consulting, Company, pension, actuarial , Real Estate">
        <meta name="author" content="Stephen Victor, Allarassem Maxime, Marcelus">

	    <!-- MINIFIED -->
	    {!! SEOMeta::generate() !!}
        <!-- Favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/png">

        <!--==== CSS asset ====-->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/YTPlayer.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">

        <!--==== CUSTOM CSS ====-->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/theme/blue.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />


    </head>
<body>
        <!--===== Preloader ====-->

    <div id="app">
      <div class="preloader">
            <div class="spinner">
              <div class="double-bounce1"></div>
              <div class="double-bounce2"></div>
            </div>
        </div>
        <main >
            @yield('content')
        </main>
    </div>



   <!--==== JQUERY ====-->
        <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
     <!--===== JAVASCRIPT FILES =====-->
     <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
         <script>
          window.cookieconsent.initialise({
          "palette": {
                  "popup": {
                  "background": "#00bd2a"
                  },
                  "button": {
                      "background": "#000"
                  }
                }
             });
       </script>
        <script src="{{ asset('assets/js/wow-1.3.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
        <script type="text/javascript">
            $('.player').mb_YTPlayer();
        </script>
        <script src="{{ asset('assets/js/jquery.mixitup.js') }}"></script>
        <script src="{{ asset('assets/js/validator.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/contact.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>


</body>
</html>
