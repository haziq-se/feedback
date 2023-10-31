<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sweatAlert2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo-color.png')}}">
</head>
<style>
</style>

<body class="scroll_style_bd">
    <div id="loader">
        <div class="loaderImg">
            <img src="{{ asset('images/logo-color.png') }}" alt="">
            <div class="loading">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
    </div>
    <div class="main">
        <!---SideBar Start Here-->
        @include('layouts.sidebar')
        <!---SideBar End Here-->
        <!--Main Content Start Here-->
        <div id="content">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <!---Header---->
                        @include('layouts.header')
                        <!----Header End Here------>
                    </div>
                </div>
                <!---Content Starts Here --->
                @yield('content')
                <!---Content Ends Here --->
            </div>
        </div>
        <!--Main Content Ends Here-->
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>


    <script src="{{ asset('js/sweatAlert2.min.js')}}"></script>
    <script src="{{ asset('js/paging.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>


    <script type="text/javascript">
        AOS.init({
            disable: 'mobile',
        });
        AOS.refresh();
        $(document).ready(function() {
            $('.menu-toggle').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
            $('.times').on('click', function() {
                $('#sidebar').removeClass('active');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Show the loader initially

            // Load your data or perform any asynchronous operations
            $(window).on('load', function() {
                $('#loader').fadeOut('slow');
            });
            // After the data has finished loading, hide the loader
            $('#loader').fadeOut('slow');
        });
    </script>
    @yield('scripts')
</body>

</html>