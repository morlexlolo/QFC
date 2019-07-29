<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="folio is a Personal Portfolio Template">
        <meta name="keywords" content="themefusionbd, resume, cv, portfolio, personal, developer, designer,personal resume, onepage, clean, modern">
        <meta name="author" content="Mahamudul Hasan">

        <title>QFC</title>

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

        <!--==== JQUERY ====-->
        <script src="assets/js/jquery-2.1.4.min.js"></script>


        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
<body>
        <!--===== Preloader ====-->
        <div class="preloader">
            <div class="spinner">
              <div class="double-bounce1"></div>
              <div class="double-bounce2"></div>
            </div>
        </div>
    <div id="app">

        <main >
            @yield('content')
        </main>
    </div>



     <!--===== JAVASCRIPT FILES =====-->
        <script src="assets/js/wow-1.3.0.min.js"></script>
        <script src="assets/js/jquery.stellar.min.js"></script>
        <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
        <script type="text/javascript">
            $('.player').mb_YTPlayer();
        </script>
        <script src="assets/js/jquery.mixitup.js"></script>
        <script src="assets/js/validator.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/contact.js"></script>
        <script src="assets/js/main.js"></script>


</body>
</html>
