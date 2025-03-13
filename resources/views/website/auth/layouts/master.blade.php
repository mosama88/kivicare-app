<!doctype html>
<html lang="en" data-bs-theme="light" dir="ltr" class="landing-pages">

<head>

@include('website.auth.layouts.head')

    
</head>

<body class=" body-bg landing-pages">
    <span class="screen-darken"></span>
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body">
                <img src="{{ asset('website') }}/assets/images/loader.gif" alt="loader"
                    class="light-loader img-fluid " width="200">
            </div>
        </div>
    </div>
    <!-- loader END -->
    <main class="main-content">
        <div class="position-relative">
            <!--Nav Start-->
            <!--bread-crumb-->
            <!--bread-crumb-->
        </div>
        <div class="sign-in-page position-relative">
            <div class="container">
                <div class="row justify-content-center align-items-center height-self-center h-100">
                    <div class="col-lg-5 col-md-12 align-self-center">
                        <div class="sign-user_card position-relative bg-white mx-auto">
                            <div class="logo-img text-center mb-5">
                                <a href="{{ asset('website') }}/index.html" class="navbar-brand m-0">
                                    <span class="logo-normal">
                                        <img src="{{ asset('website') }}/assets/images/logo/logo.png" alt="logo"
                                            class="img-fluid" loading="lazy">
                                    </span>
                                </a>
                            </div>
              





@yield('content')











                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- Wrapper End -->
    <!-- Footer start -->
    <!-- footer end -->

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

@include('website.auth.layouts.scripts')
</body>

</html>
