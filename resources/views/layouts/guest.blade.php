<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title') - MWS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content="@yield('keywords')"/>
        <meta name="description" content="@yield('description')"/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{asset('css/plugins.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/color.css')}}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    </head>
    <body>

    @include('components.theme.preloader')

{{--main body starts--}}

    {{--theme header--}}
    @include('components.theme.header')

    {{--theme left sidebar--}}
    @include('components.theme.leftHeader')

    <!-- share button-->
    <div class="share-btn showshare color-bg"><span>Share <i class="fal fa-plus"></i></span></div>
    <!-- share button end-->

    <!-- right header-->
    <div class="hc_dec_color">
        <div class="page-subtitle"><span></span></div>
    </div>
    <!-- right header end-->

    <!-- wrapper  -->
    <div id="wrapper">
        <!-- navigation menu-->
        @include('components.theme.navigation')
        <!-- navigation menu end  -->

        {{--main body of each page--}}
        @yield('content')

        <!-- share-wrapper-->
        <div class="share-wrapper">
            <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i></div>
            <div class="share-container fl-wrap  isShare"></div>
        </div>
        <!-- share-wrapper  end -->

        <!-- cursor-->
        <div class="element">
            <div class="element-item"></div>
        </div>
        <!-- cursor end-->
    </div>



{{--main body ends--}}
        <script   src="{{asset('js/jquery.min.js')}}"></script>
        <script   src="{{asset('js/plugins.js')}}"></script>
        <script   src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>
