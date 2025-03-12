<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Kivicare | @yield('title')</title>
<!-- Config Options -->
<meta name="setting_options"
    content='{&quot;saveLocal&quot;:&quot;sessionStorage&quot;,&quot;storeKey&quot;:&quot;huisetting&quot;,&quot;setting&quot;:{&quot;app_name&quot;:{&quot;value&quot;:&quot;Kivicare&quot;}}}'>
<!-- Google Font Api KEY-->
<meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">
<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('website') }}/assets/images/favicon.ico" />

<!-- Library / Plugin Css Build -->
<link rel="stylesheet" href="{{ asset('website') }}/assets/css/core/libs.min.css" />

<!-- flaticon css -->
<link rel="stylesheet" href="{{ asset('website') }}/assets/vendor/flaticon/css/flaticon.css" />

<!-- font-awesome css -->
<link rel="stylesheet" href="{{ asset('website') }}/assets/vendor/font-awesome/css/all.min.css" />


<!-- Sweetlaert2 css -->
<link rel="stylesheet" href="{{ asset('website') }}/assets/vendor/sweetalert2/dist/sweetalert2.min.css" />

<!-- SwiperSlider css -->
<link rel="stylesheet" href="{{ asset('website') }}/assets/vendor/swiperSlider/swiper-bundle.min.css">

<!-- Kivicare Design System Css -->
<link rel="stylesheet" href="{{ asset('website') }}/assets/css/kivicare.min.css?v=1.4.1" />

<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('website') }}/assets/css/custom.min.css?v=1.4.1" />

@if (app()->getLocale() == 'ar')
    <!-- Arabic Font -->
    <link rel="stylesheet" href="{{ asset('website') }}/arabic-fonts/stylesheet.css" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">


    <!-- Rtl Css -->
    <link rel="stylesheet" href="{{ asset('website') }}/assets/css/rtl.min.css?v=1.4.1" />
@endif




<!-- Customizer Css -->
<link rel="stylesheet" href="{{ asset('website') }}/assets/css/customizer.min.css?v=1.4.1" />

<!-- Google Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap"
    rel="stylesheet">


<meta name="page_colors"
    content='[{&quot;var&quot;:&quot;--bs-primary&quot;,&quot;value&quot;:&quot;#1dbfcc&quot;},{&quot;var&quot;:&quot;--bs-primary-bg-subtle&quot;,&quot;value&quot;:&quot;#e3f4f5&quot;},{&quot;var&quot;:&quot;--bs-primary-rgb&quot;,&quot;value&quot;:&quot;29, 191, 204&quot;},{&quot;var&quot;:&quot;--bs-primary-shade-20&quot;,&quot;value&quot;:&quot;#10949f&quot;},{&quot;var&quot;:&quot;--bs-secondary&quot;,&quot;value&quot;:&quot;#171c26&quot;},{&quot;var&quot;:&quot;--bs-secondary-rgb&quot;,&quot;value&quot;:&quot;23, 28, 38&quot;}]'>

@stack('css')
