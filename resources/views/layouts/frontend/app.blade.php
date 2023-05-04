<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jinna Gik">
    <meta name="description" content="UMAYA Template is a uniquely HTML5 template develop in HTML with a modern look.">
    <meta name="keywords" content="creative, modern, clean, html5, css3, portfolio, blog, agency, templates, minimal">


    @include('includes.frontend.head-css')

    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->


<body class="preloader dark-nav">
    <!-- preloader-loading start -->
    @include('includes.frontend.loader')
    <!-- pointer start -->
    <div class="pointer js-pointer" id="js-pointer">
        <i class="pointer__inner fas fa-long-arrow-alt-right"></i>
        <i class="pointer__inner fas fa-search"></i>
        <i class="pointer__inner fas fa-link"></i>
    </div><!-- pointer end -->
    
    @include('includes.frontend.header')

    <!-- main start -->
    <main class="js-animsition-overlay" data-animsition-overlay="true">
        @yield('content')
    </main><!-- main end -->

    <!-- scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('assets/frontend/js/plugins.js')}}"></script>
    <script src="{{asset('assets/frontend/js/footer-reveal.js')}}"></script>
    <script src="{{asset('assets/frontend/js/typewriter.js')}}"></script>
    <script src="{{asset('assets/frontend/js/main.js')}}"></script>
    <script src="{{asset('assets/frontend/js/typewriter_init.js')}}"></script>
    <script src="{{asset('assets/frontend/js/footer-reveal_init.js')}}"></script>

</body>

</html>

</html>
