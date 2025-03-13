<!doctype html>
<html lang="en" data-bs-theme="light" dir="ltr" class="landing-pages">

<head>
    @include('website.layout.head')
</head>
@if (app()->getLocale() == 'en')

    <body class=" body-bg landing-pages" dir="ltr">
    @else

        <body class=" body-bg landing-pages" dir="rtl">
@endif
<span class="screen-darken"></span>
<!-- loader Start -->
<div id="loading">
    <div class="loader simple-loader">
        <div class="loader-body">
            <img src="{{ asset('website') }}/assets/images/loader.gif" alt="loader" class="light-loader img-fluid "
                width="200">
        </div>
    </div>
</div>
<!-- loader END -->
<main class="main-content">
    <div class="position-relative">
        <!--Nav Start-->
        <header class="header-dentist">
            @include('website.layout.header')
            @include('website.layout.navbar')
        </header>
        <div class="offcanvas offcanvas-end " tabindex="-1" id="right-panel-toggle">
            <div class="offcanvas-header border-bottom px-5 mb-5 py-4">
                <a href="{{ asset('website') }}/index.html" class="navbar-brand m-0">
                    <span class="logo-normal">
                        <img src="{{ asset('website') }}/assets/images/logo/logo-skyblue.png" alt="logo"
                            class="img-fluid" loading="lazy">
                    </span>
                </a>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            @include('website.layout.sidebar')
        </div>
        <!--bread-crumb-->
    </div>
    @yield('content')

</main>
<!-- Wrapper End -->
<!-- Footer start -->


@include('website.layout.footer')
<!-- footer end -->

<!-- setting -->

{{-- @include('website.layout.change-language') --}}

<!-- setting -->

<!-- Back To Top -->
<div id="back-to-top" style="display: none;">
    <a class="p-0 btn btn-sm position-fixed top border-0 text-white" id="top" href="#top">
        <svg width="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 15.5L12 8.5L19 15.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round"></path>
        </svg>
    </a>
</div>
<!-- Back To Top -->




@include('website.layout.script')
</body>

</html>
