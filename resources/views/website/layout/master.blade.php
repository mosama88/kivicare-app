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
    <div class="banner-dentist-page">
        <div class="container-fluid position-relative">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="iq-title-box">
                        <div class="no-sub-title big-font">
                            <div class="iq-title-box">
                                <span class="iq-subtitle text-uppercase"></span>
                                <h2 class="iq-title iq-heading-title">
                                    <span class="right-text text-capitalize fw-500">enjoy The beauty </span>
                                    <span class="left-text text-capitalize fw-light">of A Healthy Smile!</span>
                                </h2>
                                <p class="iq-title-desc text-body mt-3 mb-0">
                                    Sed ut perspiciatis unde omnis iste natus error sit
                                    voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                    quasi
                                    architecto
                                </p>
                            </div>
                        </div>
                        <div class="padding-top-60">
                            <div class="iq-btn-container">
                                <a class="iq-button text-capitalize" href="{{ asset('website') }}/appointment.html">
                                    <span class="iq-btn-text-holder position-relative">Get appointment</span>
                                    <span class="iq-btn-icon-holder">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                            viewBox="0 0 8 8" fill="none">
                                            <path
                                                d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div>
                        <img src="{{ asset('website') }}/assets/images/Dentist-Page/dentist-banner.webp" alt=""
                            class="img-fluid rtl-image-flip">
                    </div>
                </div>
                <div class="col-lg-2 col-md-12">
                    <img src="{{ asset('website') }}/assets/images/Dentist-Page/dentist-banner-icon.webp" alt=""
                        class="img-fluid ">
                    <p class="mt-4 text-dark">
                        Get upto $25 off on your first appointment you book
                    </p>
                </div>
            </div>
            <div class="icon-box-right position-absolute">
                <div class="iq-icon-box column d-flex align-items-center gap-2">
                    <div class="icon-box-img">
                        <img src="{{ asset('website') }}/assets/images//Dentist-Page/dentist-banner-phone.webp"
                            alt="icon" class="img-fluid" loading="lazy">
                    </div>
                    <div class="icon-box-content">
                        <h5 class="icon-box-title">24 Hours Service</h5>
                        <p class="icon-box-desc mb-0">+144
                            01234 56897</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dentist-dark px-3">
        <div class="container position-relative ">
            <div class="row align-items-center">
                <div class="col-lg-6  section-padding">
                    <div class="iq-title-box text-white pe-lg-5 mb-0">
                        <span class="iq-subtitle text-uppercase text-white">about kiviCare</span>
                        <h2 class="iq-title iq-heading-title text-white">
                            <span class="right-text text-capitalize fw-500">A perfect smile</span>
                            <span class="left-text text-capitalize fw-light">guaranteed by kiviCare</span>
                        </h2>
                        <p class="iq-title-desc text-white pb-4">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                        </p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div
                                    class="iq-circle-progressbar circle-progressbar-white gap-5 d-flex align-items-center flex-wrap flex-md-row flex-column text-md-start text-center">
                                    <div class="card-profile-progress">
                                        <div id="circle-progress-1"
                                            class="circle-progress circle-progress-basic circle-progress-white"
                                            data-min-value="0" data-max-value="100" data-value="50%"
                                            data-type="percent">
                                        </div>
                                    </div>
                                    <div class="circle-progressbar-info">
                                        <span
                                            class="circle-progressbar-subtitle text-white text-uppercase fw-semibold letter-spacing-2">Dental</span>
                                        <h5 class="circle-progressbar-title mt-2 mb-0 text-white">Dental Care</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-sm-0 mt-5">
                                <div
                                    class="iq-circle-progressbar circle-progressbar-white gap-5 d-flex align-items-center flex-wrap flex-md-row flex-column text-md-start text-center">
                                    <div class="card-profile-progress">
                                        <div id="circle-progress-2"
                                            class="circle-progress circle-progress-basic circle-progress-white"
                                            data-min-value="0" data-max-value="100" data-value="70%"
                                            data-type="percent">
                                        </div>
                                    </div>
                                    <div class="circle-progressbar-info">
                                        <span
                                            class="circle-progressbar-subtitle text-white text-uppercase fw-semibold letter-spacing-2">Smile</span>
                                        <h5 class="circle-progressbar-title mt-2 mb-0 text-white">Sweet Smile</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="padding-top-80 button-white">
                            <div class="iq-btn-container">
                                <a class="iq-button text-capitalize" href="{{ asset('website') }}/appointment.html">
                                    <span class="iq-btn-text-holder position-relative">Get appointment</span>
                                    <span class="iq-btn-icon-holder">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                            viewBox="0 0 8 8" fill="none">
                                            <path
                                                d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 section-padding py-lg-0 pt-0">
                    <div class="row iconbox-border-hover gx-0">
                        <div class="col-sm-6">
                            <div class="iq-icon-box iconbox-border position-relative bg-white">
                                <div class="iq-img-area pulse-shrink-on-hover">
                                    <img src="{{ asset('website') }}/assets/images/./Dentist-Page/clean-icon.svg"
                                        alt="icon" class="img-fluid" loading="lazy">
                                </div>
                                <div class="icon-box-content mt-5">
                                    <h5 class="icon-title text-capitalize mb-2">Clean & modern studios</h5>
                                    <p class="m-0">There are many variations of passages of Lorem Ipsum
                                        available but the majority</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-5">
                            <div class="iq-icon-box iconbox-border position-relative bg-white">
                                <div class="iq-img-area pulse-shrink-on-hover">
                                    <img src="{{ asset('website') }}/assets/images/./Dentist-Page/Highest-rated-dentistry.svg"
                                        alt="icon" class="img-fluid" loading="lazy">
                                </div>
                                <div class="icon-box-content mt-5">
                                    <h5 class="icon-title text-capitalize mb-2">Highest-rated dentistry</h5>
                                    <p class="m-0">There are many variations of passages of Lorem Ipsum
                                        available but the majority</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row iconbox-border-hover gx-0 mt-lg-0 mt-5">
                        <div class="col-sm-6">
                            <div class="iq-icon-box iconbox-border position-relative bg-white">
                                <div class="iq-img-area pulse-shrink-on-hover">
                                    <img src="{{ asset('website') }}/assets/images/./Dentist-Page/care-schedule.svg"
                                        alt="icon" class="img-fluid" loading="lazy">
                                </div>
                                <div class="icon-box-content mt-5">
                                    <h5 class="icon-title text-capitalize mb-2">Care On Your Schedule</h5>
                                    <p class="m-0">There are many variations of passages of Lorem Ipsum
                                        available but the majority</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-5">
                            <div class="iq-icon-box iconbox-border position-relative bg-white">
                                <div class="iq-img-area pulse-shrink-on-hover">
                                    <img src="{{ asset('website') }}/assets/images/./Dentist-Page/pricing.svg"
                                        alt="icon" class="img-fluid" loading="lazy">
                                </div>
                                <div class="icon-box-content mt-5">
                                    <h5 class="icon-title text-capitalize mb-2">Transparent care and pricing</h5>
                                    <p class="m-0">There are many variations of passages of Lorem Ipsum
                                        available but the majority</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dentist-light section-padding">
        <div class="container position-relative ">
            <div class="text-center position-relative">
                <div class="scrolling-text position-absolute">
                    <div class="iq-title text-uppercase">about us</div>
                </div>
                <div class="hide-sub-title-line">
                    <div class="iq-title-box">
                        <span class="iq-subtitle text-uppercase">About our clinic</span>
                        <h2 class="iq-title iq-heading-title">
                            <span class="right-text text-capitalize fw-500">Welcome To
                                KiviCare Central</span>
                            <span class="left-text text-capitalize fw-light">Hospital</span>
                        </h2>
                        <p class="iq-title-desc text-body mt-3 mb-0">

                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <p class="mb-0">
                        It is a long established fact that a reader will be distracted by the readable content of a
                        page
                        when looking reader will be at its layout.
                    </p>
                    <div class="iq-list d-flex flex-column h-100">
                        <ul class="iq-list-with-icon ps-0 py-5 m-0">
                            <li class="d-flex align-items-center gap-2 mb-3">
                                <span class="text-primary">
                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.59695 0.0379703C1.96118 0.143694 1.43245 0.425953 0.931049 0.927357C0.417642 1.44076 0.148371 1.95322 0.0397285 2.62375C-0.0132428 2.95081 -0.0132428 11.0523 0.0397285 11.3794C0.148371 12.0499 0.417642 12.5623 0.931049 13.0758C1.45007 13.5948 1.96808 13.8644 2.64799 13.9694C2.82029 13.996 4.26339 14.0049 7.16941 13.9975L11.4378 13.9865L11.7003 13.9055C12.2771 13.7275 12.7083 13.4735 13.0885 13.088C13.4916 12.6792 13.737 12.2647 13.9056 11.7077C13.987 11.4385 13.9886 11.3982 14.0009 9.23766C14.0091 7.79777 14.0004 6.99291 13.9756 6.9009C13.9548 6.82371 13.88 6.69296 13.8092 6.61033C13.4661 6.20947 12.8337 6.27331 12.5616 6.73626L12.4593 6.91035L12.441 9.09925L12.4228 11.2882L12.3066 11.5334C12.1451 11.8743 11.9069 12.117 11.5706 12.2832L11.2956 12.4191H7.00714H2.71865L2.47338 12.3029C2.1325 12.1414 1.88982 11.9032 1.72365 11.5669L1.58772 11.2919V7.00345V2.71496L1.70391 2.46969C1.86534 2.12888 2.10361 1.88613 2.43975 1.71996L2.71471 1.58403L4.9603 1.56579L7.2059 1.54755L7.36846 1.45634C7.61281 1.31924 7.74644 1.10557 7.76443 0.823275C7.78096 0.563781 7.71124 0.382248 7.52847 0.208777C7.30031 -0.00774129 7.35492 -0.00332719 4.97256 0.00134246C3.77304 0.00367729 2.70402 0.0201672 2.59695 0.0379703ZM13.7726 0.807514C13.6449 0.839691 13.2121 1.25828 10.3161 4.1504L7.00543 7.45644L5.64641 6.10225C4.18011 4.64115 4.18047 4.64141 3.8313 4.67497C3.58297 4.69883 3.39371 4.80886 3.25883 5.00772C3.12075 5.21133 3.07945 5.43211 3.13786 5.65432C3.17602 5.79956 3.35091 5.98715 4.86479 7.50704C5.99438 8.64115 6.59731 9.2207 6.69515 9.26648C6.87318 9.34981 7.10765 9.35532 7.28915 9.28042C7.45817 9.21067 14.5982 2.092 14.7053 1.88646C14.7958 1.71281 14.7965 1.41406 14.7068 1.21662C14.6213 1.02837 14.4111 0.854029 14.208 0.802881C14.0253 0.756878 13.9712 0.757425 13.7726 0.807514Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <span class="text-capitalize">Treats minor illnesses</span>
                            </li>
                            <li class="d-flex align-items-center gap-2 mb-3">
                                <span class="text-primary">
                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.59695 0.0379703C1.96118 0.143694 1.43245 0.425953 0.931049 0.927357C0.417642 1.44076 0.148371 1.95322 0.0397285 2.62375C-0.0132428 2.95081 -0.0132428 11.0523 0.0397285 11.3794C0.148371 12.0499 0.417642 12.5623 0.931049 13.0758C1.45007 13.5948 1.96808 13.8644 2.64799 13.9694C2.82029 13.996 4.26339 14.0049 7.16941 13.9975L11.4378 13.9865L11.7003 13.9055C12.2771 13.7275 12.7083 13.4735 13.0885 13.088C13.4916 12.6792 13.737 12.2647 13.9056 11.7077C13.987 11.4385 13.9886 11.3982 14.0009 9.23766C14.0091 7.79777 14.0004 6.99291 13.9756 6.9009C13.9548 6.82371 13.88 6.69296 13.8092 6.61033C13.4661 6.20947 12.8337 6.27331 12.5616 6.73626L12.4593 6.91035L12.441 9.09925L12.4228 11.2882L12.3066 11.5334C12.1451 11.8743 11.9069 12.117 11.5706 12.2832L11.2956 12.4191H7.00714H2.71865L2.47338 12.3029C2.1325 12.1414 1.88982 11.9032 1.72365 11.5669L1.58772 11.2919V7.00345V2.71496L1.70391 2.46969C1.86534 2.12888 2.10361 1.88613 2.43975 1.71996L2.71471 1.58403L4.9603 1.56579L7.2059 1.54755L7.36846 1.45634C7.61281 1.31924 7.74644 1.10557 7.76443 0.823275C7.78096 0.563781 7.71124 0.382248 7.52847 0.208777C7.30031 -0.00774129 7.35492 -0.00332719 4.97256 0.00134246C3.77304 0.00367729 2.70402 0.0201672 2.59695 0.0379703ZM13.7726 0.807514C13.6449 0.839691 13.2121 1.25828 10.3161 4.1504L7.00543 7.45644L5.64641 6.10225C4.18011 4.64115 4.18047 4.64141 3.8313 4.67497C3.58297 4.69883 3.39371 4.80886 3.25883 5.00772C3.12075 5.21133 3.07945 5.43211 3.13786 5.65432C3.17602 5.79956 3.35091 5.98715 4.86479 7.50704C5.99438 8.64115 6.59731 9.2207 6.69515 9.26648C6.87318 9.34981 7.10765 9.35532 7.28915 9.28042C7.45817 9.21067 14.5982 2.092 14.7053 1.88646C14.7958 1.71281 14.7965 1.41406 14.7068 1.21662C14.6213 1.02837 14.4111 0.854029 14.208 0.802881C14.0253 0.756878 13.9712 0.757425 13.7726 0.807514Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <span class="text-capitalize">Answers health questions </span>
                            </li>
                            <li class="d-flex align-items-center gap-2 mb-3">
                                <span class="text-primary">
                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.59695 0.0379703C1.96118 0.143694 1.43245 0.425953 0.931049 0.927357C0.417642 1.44076 0.148371 1.95322 0.0397285 2.62375C-0.0132428 2.95081 -0.0132428 11.0523 0.0397285 11.3794C0.148371 12.0499 0.417642 12.5623 0.931049 13.0758C1.45007 13.5948 1.96808 13.8644 2.64799 13.9694C2.82029 13.996 4.26339 14.0049 7.16941 13.9975L11.4378 13.9865L11.7003 13.9055C12.2771 13.7275 12.7083 13.4735 13.0885 13.088C13.4916 12.6792 13.737 12.2647 13.9056 11.7077C13.987 11.4385 13.9886 11.3982 14.0009 9.23766C14.0091 7.79777 14.0004 6.99291 13.9756 6.9009C13.9548 6.82371 13.88 6.69296 13.8092 6.61033C13.4661 6.20947 12.8337 6.27331 12.5616 6.73626L12.4593 6.91035L12.441 9.09925L12.4228 11.2882L12.3066 11.5334C12.1451 11.8743 11.9069 12.117 11.5706 12.2832L11.2956 12.4191H7.00714H2.71865L2.47338 12.3029C2.1325 12.1414 1.88982 11.9032 1.72365 11.5669L1.58772 11.2919V7.00345V2.71496L1.70391 2.46969C1.86534 2.12888 2.10361 1.88613 2.43975 1.71996L2.71471 1.58403L4.9603 1.56579L7.2059 1.54755L7.36846 1.45634C7.61281 1.31924 7.74644 1.10557 7.76443 0.823275C7.78096 0.563781 7.71124 0.382248 7.52847 0.208777C7.30031 -0.00774129 7.35492 -0.00332719 4.97256 0.00134246C3.77304 0.00367729 2.70402 0.0201672 2.59695 0.0379703ZM13.7726 0.807514C13.6449 0.839691 13.2121 1.25828 10.3161 4.1504L7.00543 7.45644L5.64641 6.10225C4.18011 4.64115 4.18047 4.64141 3.8313 4.67497C3.58297 4.69883 3.39371 4.80886 3.25883 5.00772C3.12075 5.21133 3.07945 5.43211 3.13786 5.65432C3.17602 5.79956 3.35091 5.98715 4.86479 7.50704C5.99438 8.64115 6.59731 9.2207 6.69515 9.26648C6.87318 9.34981 7.10765 9.35532 7.28915 9.28042C7.45817 9.21067 14.5982 2.092 14.7053 1.88646C14.7958 1.71281 14.7965 1.41406 14.7068 1.21662C14.6213 1.02837 14.4111 0.854029 14.208 0.802881C14.0253 0.756878 13.9712 0.757425 13.7726 0.807514Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <span class="text-capitalize">Conducts health checkups </span>
                            </li>
                            <li class="d-flex align-items-center gap-2 mb-3">
                                <span class="text-primary">
                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.59695 0.0379703C1.96118 0.143694 1.43245 0.425953 0.931049 0.927357C0.417642 1.44076 0.148371 1.95322 0.0397285 2.62375C-0.0132428 2.95081 -0.0132428 11.0523 0.0397285 11.3794C0.148371 12.0499 0.417642 12.5623 0.931049 13.0758C1.45007 13.5948 1.96808 13.8644 2.64799 13.9694C2.82029 13.996 4.26339 14.0049 7.16941 13.9975L11.4378 13.9865L11.7003 13.9055C12.2771 13.7275 12.7083 13.4735 13.0885 13.088C13.4916 12.6792 13.737 12.2647 13.9056 11.7077C13.987 11.4385 13.9886 11.3982 14.0009 9.23766C14.0091 7.79777 14.0004 6.99291 13.9756 6.9009C13.9548 6.82371 13.88 6.69296 13.8092 6.61033C13.4661 6.20947 12.8337 6.27331 12.5616 6.73626L12.4593 6.91035L12.441 9.09925L12.4228 11.2882L12.3066 11.5334C12.1451 11.8743 11.9069 12.117 11.5706 12.2832L11.2956 12.4191H7.00714H2.71865L2.47338 12.3029C2.1325 12.1414 1.88982 11.9032 1.72365 11.5669L1.58772 11.2919V7.00345V2.71496L1.70391 2.46969C1.86534 2.12888 2.10361 1.88613 2.43975 1.71996L2.71471 1.58403L4.9603 1.56579L7.2059 1.54755L7.36846 1.45634C7.61281 1.31924 7.74644 1.10557 7.76443 0.823275C7.78096 0.563781 7.71124 0.382248 7.52847 0.208777C7.30031 -0.00774129 7.35492 -0.00332719 4.97256 0.00134246C3.77304 0.00367729 2.70402 0.0201672 2.59695 0.0379703ZM13.7726 0.807514C13.6449 0.839691 13.2121 1.25828 10.3161 4.1504L7.00543 7.45644L5.64641 6.10225C4.18011 4.64115 4.18047 4.64141 3.8313 4.67497C3.58297 4.69883 3.39371 4.80886 3.25883 5.00772C3.12075 5.21133 3.07945 5.43211 3.13786 5.65432C3.17602 5.79956 3.35091 5.98715 4.86479 7.50704C5.99438 8.64115 6.59731 9.2207 6.69515 9.26648C6.87318 9.34981 7.10765 9.35532 7.28915 9.28042C7.45817 9.21067 14.5982 2.092 14.7053 1.88646C14.7958 1.71281 14.7965 1.41406 14.7068 1.21662C14.6213 1.02837 14.4111 0.854029 14.208 0.802881C14.0253 0.756878 13.9712 0.757425 13.7726 0.807514Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <span class="text-capitalize">Performs routine health tests </span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <span class="text-primary">
                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.59695 0.0379703C1.96118 0.143694 1.43245 0.425953 0.931049 0.927357C0.417642 1.44076 0.148371 1.95322 0.0397285 2.62375C-0.0132428 2.95081 -0.0132428 11.0523 0.0397285 11.3794C0.148371 12.0499 0.417642 12.5623 0.931049 13.0758C1.45007 13.5948 1.96808 13.8644 2.64799 13.9694C2.82029 13.996 4.26339 14.0049 7.16941 13.9975L11.4378 13.9865L11.7003 13.9055C12.2771 13.7275 12.7083 13.4735 13.0885 13.088C13.4916 12.6792 13.737 12.2647 13.9056 11.7077C13.987 11.4385 13.9886 11.3982 14.0009 9.23766C14.0091 7.79777 14.0004 6.99291 13.9756 6.9009C13.9548 6.82371 13.88 6.69296 13.8092 6.61033C13.4661 6.20947 12.8337 6.27331 12.5616 6.73626L12.4593 6.91035L12.441 9.09925L12.4228 11.2882L12.3066 11.5334C12.1451 11.8743 11.9069 12.117 11.5706 12.2832L11.2956 12.4191H7.00714H2.71865L2.47338 12.3029C2.1325 12.1414 1.88982 11.9032 1.72365 11.5669L1.58772 11.2919V7.00345V2.71496L1.70391 2.46969C1.86534 2.12888 2.10361 1.88613 2.43975 1.71996L2.71471 1.58403L4.9603 1.56579L7.2059 1.54755L7.36846 1.45634C7.61281 1.31924 7.74644 1.10557 7.76443 0.823275C7.78096 0.563781 7.71124 0.382248 7.52847 0.208777C7.30031 -0.00774129 7.35492 -0.00332719 4.97256 0.00134246C3.77304 0.00367729 2.70402 0.0201672 2.59695 0.0379703ZM13.7726 0.807514C13.6449 0.839691 13.2121 1.25828 10.3161 4.1504L7.00543 7.45644L5.64641 6.10225C4.18011 4.64115 4.18047 4.64141 3.8313 4.67497C3.58297 4.69883 3.39371 4.80886 3.25883 5.00772C3.12075 5.21133 3.07945 5.43211 3.13786 5.65432C3.17602 5.79956 3.35091 5.98715 4.86479 7.50704C5.99438 8.64115 6.59731 9.2207 6.69515 9.26648C6.87318 9.34981 7.10765 9.35532 7.28915 9.28042C7.45817 9.21067 14.5982 2.092 14.7053 1.88646C14.7958 1.71281 14.7965 1.41406 14.7068 1.21662C14.6213 1.02837 14.4111 0.854029 14.208 0.802881C14.0253 0.756878 13.9712 0.757425 13.7726 0.807514Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <span class="text-capitalize">Orthopaedic surgeon </span>
                            </li>
                        </ul>
                        <div class="button-primary">
                            <div class="iq-btn-container">
                                <a class="iq-button text-capitalize" href="{{ asset('website') }}/appointment.html">
                                    <span class="iq-btn-text-holder position-relative">Get Appointment</span>
                                    <span class="iq-btn-icon-holder">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                            viewBox="0 0 8 8" fill="none">
                                            <path
                                                d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="d-flex flex-column justify-content-between align-items-center mt-3">
                        <div class="iq-title-box text-center mb-3">
                            <h2 class="iq-title iq-heading-title">
                                <span class="right-text text-capitalize fw-500 text-primary">23 Years</span>
                            </h2>
                            <p class="iq-title-desc font-size-24 mb-3 mb-md-5 pb-3 text-body">
                                Experience in Clinic
                            </p>
                            <h4 class="text-center mb-2">Briar Ford</h4>
                            <p class="letter-spacing-2 text-center fw-500 text-primary mb-0">CEO &
                                Founder
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="working-hour bg-primary text-white p-3 p-md-5 text-center m-0 mt-md-5">
                        <h3 class="text-white mb-5">Working Hours</h3>
                        <ul class="list-inline m-0">
                            <li class="mb-3 pb-3 ">
                                <div class="font-size-21 mb-2">Monday to Friday</div>
                                <div class="font-size-16">6:00 - 7:00 pm</div>
                            </li>
                            <li class="mb-3 pb-3 ">
                                <div class="font-size-21 mb-2">Saturday/Sunday</div>
                                <div class="font-size-16">Closed</div>
                            </li>
                            <li class="">
                                <span class="font-size-24">Emergency 24 Hours </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="video-popup margin-top-negative-100 section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="position-relative padding-200 rtl-image-flip"
                        style="background-image: url(./assets/images/Dentist-Page/dentist-video-bg.webp); background-size:cover">
                        <div
                            class="background-overlay position-absolute h-100 w-100 opacity-50 bg-primary top-0 start-0">
                        </div>
                        <div class="iq-popup-video">
                            <div class="iq-video-icon position-absolute ">
                                <div
                                    class="iq-video bg-white position-absolute text-center d-inline-block iq-fslightbox-img">
                                    <a class="d-block" data-fslightbox="html5-video"
                                        href="https://www.youtube.com/watch?v&#x3D;VeDdpy4CdeM"
                                        data-video-poster="&lt;i aria-hidden=&quot;true&quot; class=&quot;fas fa-play text-primary&quot;&gt;&lt;/i&gt;">
                                        <i aria-hidden="true" class="fas fa-play text-primary"></i>
                                    </a>
                                </div>
                                <div class="iq-waves">
                                    <div class="waves position-absolute rounded-0 wave-1"></div>
                                    <div class="waves position-absolute rounded-0 wave-2"></div>
                                    <div class="waves position-absolute rounded-0 wave-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-service-box bg-light-dentist section-padding position-relative ">
        <div class="container position-relative title-content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="scrolling-text position-absolute">
                        <div class="iq-title text-uppercase">Our Services</div>
                    </div>
                    <div class="iq-title-box">
                        <span class="iq-subtitle text-uppercase">Services</span>
                        <h2 class="iq-title iq-heading-title">
                            <span class="right-text text-capitalize fw-500">We Provide Medical</span>
                            <span class="left-text text-capitalize fw-light">Services.</span>
                        </h2>
                        <p class="iq-title-desc text-body mt-3 mb-0">
                            It is a long established fact that a reader will be distracted by
                            the readable content of a page when looking at its layout.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-block d-none"></div>
            </div>
            <div class="card">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 iq-box-right-border">
                            <div class="no-img-bg box-padding p-0 p-lg-5 p-md-5">
                                <div class="iq-icon-box transprent iconbox-has-border">
                                    <div class="iq-img-area pulse-shrink-on-hover d-inline-block">
                                        <img src="{{ asset('website') }}/assets/images/Dentist-Page/service-1.webp"
                                            alt="icon" class="img-fluid" loading="lazy" />
                                    </div>
                                    <div class="icon-box-content mt-5">
                                        <h4 class="mb-2">Family Consultation</h4>
                                        <p class="text-body m-0">It is a long established fact that a reader will
                                            be distracted by the readable content</p>
                                        <div class="iconbox-button mt-3 mt-lg-5">
                                            <div class="iq-btn-container">
                                                <a class="iq-button iq-btn-link text-capitalize"
                                                    href="{{ asset('website') }}/cardiologist.html">
                                                    read more
                                                    <span class="btn-link-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                            height="10" viewBox="0 0 8 8" fill="none">
                                                            <path
                                                                d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 iq-box-right-border">
                            <div class="no-img-bg box-padding p-0 p-lg-5 p-md-5">
                                <div class="iq-icon-box transprent iconbox-has-border">
                                    <div class="iq-img-area pulse-shrink-on-hover d-inline-block">
                                        <img src="{{ asset('website') }}/assets/images/Dentist-Page/service-2.webp"
                                            alt="icon" class="img-fluid" loading="lazy" />
                                    </div>
                                    <div class="icon-box-content mt-5">
                                        <h4 class="mb-2">Health Services</h4>
                                        <p class="text-body m-0">It is a long established fact that a reader will
                                            be distracted by the readable content</p>
                                        <div class="iconbox-button mt-3 mt-lg-5">
                                            <div class="iq-btn-container">
                                                <a class="iq-button iq-btn-link text-capitalize"
                                                    href="{{ asset('website') }}/neurologist.html">
                                                    read more
                                                    <span class="btn-link-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                            height="10" viewBox="0 0 8 8" fill="none">
                                                            <path
                                                                d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="no-img-bg box-padding p-0 p-lg-5 p-md-5">
                                <div class="iq-icon-box transprent">
                                    <div class="iq-img-area pulse-shrink-on-hover d-inline-block">
                                        <img src="{{ asset('website') }}/assets/images/Dentist-Page/service-3.webp"
                                            alt="icon" class="img-fluid" loading="lazy" />
                                    </div>
                                    <div class="icon-box-content mt-5">
                                        <h4 class="mb-2">Minor Procedures</h4>
                                        <p class="text-body m-0">It is a long established fact that a reader will
                                            be distracted by the readable content</p>
                                        <div class="iconbox-button mt-3 mt-lg-5">
                                            <div class="iq-btn-container">
                                                <a class="iq-button iq-btn-link text-capitalize"
                                                    href="{{ asset('website') }}/psychiatrists.html">
                                                    read more
                                                    <span class="btn-link-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                            height="10" viewBox="0 0 8 8" fill="none">
                                                            <path
                                                                d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-padding position-relative custom-gallery">
        <div class="container-fluid position-relative p-md-0">
            <div class="row">
                <div class="col-md-3">
                    <div class="pb-4 gallery-overlay position-relative h-50">
                        <a data-fslightbox="gallery" class="h-100 gallery-overlay-box"
                            href="{{ asset('website') }}/assets/images/gallery/square-1.jpg">
                            <img src="{{ asset('website') }}/assets/images/gallery/square-1.jpg"
                                class="img-fluid h-100 w-100" alt="profile-image" loading="lazy">
                            <div class="view-image">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20"
                                    viewBox="0 0 20 17" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13.1614 8.05311C13.1614 9.79911 11.7454 11.2141 9.99938 11.2141C8.25338 11.2141 6.83838 9.79911 6.83838 8.05311C6.83838 6.30611 8.25338 4.89111 9.99938 4.89111C11.7454 4.89111 13.1614 6.30611 13.1614 8.05311Z"
                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.998 15.3549C13.806 15.3549 17.289 12.6169 19.25 8.05292C17.289 3.48892 13.806 0.750916 9.998 0.750916H10.002C6.194 0.750916 2.711 3.48892 0.75 8.05292C2.711 12.6169 6.194 15.3549 10.002 15.3549H9.998Z"
                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="mb-md-0 mb-4 gallery-overlay position-relative h-50">
                        <a data-fslightbox="gallery" class="h-100 gallery-overlay-box"
                            href="{{ asset('website') }}/assets/images/gallery/square-2.jpg">
                            <img src="{{ asset('website') }}/assets/images/gallery/square-2.jpg"
                                class="img-fluid h-100 w-100" alt="profile-image" loading="lazy">
                            <div class="view-image">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20"
                                    viewBox="0 0 20 17" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13.1614 8.05311C13.1614 9.79911 11.7454 11.2141 9.99938 11.2141C8.25338 11.2141 6.83838 9.79911 6.83838 8.05311C6.83838 6.30611 8.25338 4.89111 9.99938 4.89111C11.7454 4.89111 13.1614 6.30611 13.1614 8.05311Z"
                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.998 15.3549C13.806 15.3549 17.289 12.6169 19.25 8.05292C17.289 3.48892 13.806 0.750916 9.998 0.750916H10.002C6.194 0.750916 2.711 3.48892 0.75 8.05292C2.711 12.6169 6.194 15.3549 10.002 15.3549H9.998Z"
                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-md-0 mb-4 gallery-overlay position-relative h-100 py-4 py-md-0">
                        <a data-fslightbox="gallery" class="h-100 gallery-overlay-box"
                            href="{{ asset('website') }}/assets/images/gallery/portrait-1.jpg">
                            <img src="{{ asset('website') }}/assets/images/gallery/portrait-1.jpg"
                                class="img-fluid h-100" alt="profile-image" loading="lazy">
                            <div class="view-image">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20"
                                    viewBox="0 0 20 17" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13.1614 8.05311C13.1614 9.79911 11.7454 11.2141 9.99938 11.2141C8.25338 11.2141 6.83838 9.79911 6.83838 8.05311C6.83838 6.30611 8.25338 4.89111 9.99938 4.89111C11.7454 4.89111 13.1614 6.30611 13.1614 8.05311Z"
                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.998 15.3549C13.806 15.3549 17.289 12.6169 19.25 8.05292C17.289 3.48892 13.806 0.750916 9.998 0.750916H10.002C6.194 0.750916 2.711 3.48892 0.75 8.05292C2.711 12.6169 6.194 15.3549 10.002 15.3549H9.998Z"
                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pb-4 gallery-overlay position-relative h-50">
                        <a data-fslightbox="gallery" class="h-100 gallery-overlay-box"
                            href="{{ asset('website') }}/assets/images/gallery/square-3.jpg">
                            <img src="{{ asset('website') }}/assets/images/gallery/square-3.jpg"
                                class="img-fluid h-100 w-100" alt="profile-image" loading="lazy">
                            <div class="view-image">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20"
                                    viewBox="0 0 20 17" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13.1614 8.05311C13.1614 9.79911 11.7454 11.2141 9.99938 11.2141C8.25338 11.2141 6.83838 9.79911 6.83838 8.05311C6.83838 6.30611 8.25338 4.89111 9.99938 4.89111C11.7454 4.89111 13.1614 6.30611 13.1614 8.05311Z"
                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.998 15.3549C13.806 15.3549 17.289 12.6169 19.25 8.05292C17.289 3.48892 13.806 0.750916 9.998 0.750916H10.002C6.194 0.750916 2.711 3.48892 0.75 8.05292C2.711 12.6169 6.194 15.3549 10.002 15.3549H9.998Z"
                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="mb-md-0 mb-4 gallery-overlay position-relative h-50">
                        <a data-fslightbox="gallery" class="h-100 gallery-overlay-box"
                            href="{{ asset('website') }}/assets/images/gallery/square-4.jpg">
                            <img src="{{ asset('website') }}/assets/images/gallery/square-4.jpg"
                                class="img-fluid h-100 w-100" alt="profile-image" loading="lazy">
                            <div class="view-image">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20"
                                    viewBox="0 0 20 17" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13.1614 8.05311C13.1614 9.79911 11.7454 11.2141 9.99938 11.2141C8.25338 11.2141 6.83838 9.79911 6.83838 8.05311C6.83838 6.30611 8.25338 4.89111 9.99938 4.89111C11.7454 4.89111 13.1614 6.30611 13.1614 8.05311Z"
                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.998 15.3549C13.806 15.3549 17.289 12.6169 19.25 8.05292C17.289 3.48892 13.806 0.750916 9.998 0.750916H10.002C6.194 0.750916 2.711 3.48892 0.75 8.05292C2.711 12.6169 6.194 15.3549 10.002 15.3549H9.998Z"
                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="gallery-overlay position-relative h-100 pt-4 pt-md-0">
                        <a data-fslightbox="gallery" class="h-100 gallery-overlay-box"
                            href="{{ asset('website') }}/assets/images/gallery/portrait-2.jpg">
                            <img src="{{ asset('website') }}/assets/images/gallery/portrait-2.jpg"
                                class="img-fluid h-100" alt="profile-image" loading="lazy">
                            <div class="view-image">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20"
                                    viewBox="0 0 20 17" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13.1614 8.05311C13.1614 9.79911 11.7454 11.2141 9.99938 11.2141C8.25338 11.2141 6.83838 9.79911 6.83838 8.05311C6.83838 6.30611 8.25338 4.89111 9.99938 4.89111C11.7454 4.89111 13.1614 6.30611 13.1614 8.05311Z"
                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.998 15.3549C13.806 15.3549 17.289 12.6169 19.25 8.05292C17.289 3.48892 13.806 0.750916 9.998 0.750916H10.002C6.194 0.750916 2.711 3.48892 0.75 8.05292C2.711 12.6169 6.194 15.3549 10.002 15.3549H9.998Z"
                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-primary-subtle section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center position-relative">
                        <div class="scrolling-text position-absolute">
                            <div class="iq-title text-uppercase">Our result</div>
                        </div>
                        <div class="iq-title-box">
                            <span class="iq-subtitle text-uppercase">results</span>
                            <h2 class="iq-title iq-heading-title">
                                <span class="right-text text-capitalize fw-500">Here Comes The Best Result</span>
                                <span class="left-text text-capitalize fw-light"></span>
                            </h2>
                            <p class="iq-title-desc text-body mt-3 mb-0">

                            </p>
                        </div>
                        <div class='position-relative before-after-container'>
                            <div class="image-container">
                                <img class="image-before before-after-image"
                                    src="{{ asset('website') }}/assets/images/Dentist-Page/before-img.webp"
                                    alt="before-image">
                                <img class="image-after before-after-image"
                                    src="{{ asset('website') }}/assets/images/Dentist-Page/after-img.webp"
                                    alt="after-image">
                            </div>
                            <input type="range" min="0" max="100" value="50"
                                class="before-after-slider">
                            <div class="before-after-slider-line" aria-hidden="true"></div>
                            <div class="before-after-slider-button" aria-hidden="true"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team-section section-padding">
        <div class="container">
            <div class="text-center position-relative">
                <div class="scrolling-text position-absolute">
                    <div class="iq-title text-uppercase">Our Doctors</div>
                </div>
                <div class="iq-title-box">
                    <span class="iq-subtitle text-uppercase">Doctors</span>
                    <h2 class="iq-title iq-heading-title">
                        <span class="right-text text-capitalize fw-500">Our Outstanding</span>
                        <span class="left-text text-capitalize fw-light">Doctors</span>
                    </h2>
                    <p class="iq-title-desc text-body mt-3 mb-0">

                    </p>
                </div>
            </div>
            <div class="position-relative overflow-hidden swiper swiper-general" data-slide="3" data-laptop="3"
                data-tab="2" data-mobile="1" data-mobile-sm="1" data-autoplay="true" data-loop="true"
                data-navigation="true" data-pagination="true">
                <ul class="p-0 m-0 mb-5 swiper-wrapper list-inline">
                    <li class="swiper-slide">
                        <div class="iq-team-block team-standard position-relative">
                            <div class="iq-team-img">
                                <img src="{{ asset('website') }}/assets/images//team/team-1.webp" alt="team"
                                    class="img-fluid w-100" loading="lazy">
                            </div>
                            <div class="share iq-team-social position-absolute text-center w-100">
                                <ul class="list-inline d-flex align-items-center justify-content-center gap-3">
                                    <li>
                                        <a class="position-relative bg-primary text-white d-flex justify-content-center align-items-center"
                                            href="https://www.facebook.com/">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="position-relative bg-primary text-white d-flex justify-content-center align-items-center"
                                            href="https://x.com/">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="position-relative bg-primary text-white d-flex justify-content-center align-items-center"
                                            href="https://www.google.com/">
                                            <i class="fab fa-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="iq-team-info text-center pt-5 px-3 pb-3 letter-spacing-1">
                                <a href="{{ asset('website') }}/doctor-details.html">
                                    <h5 class="mb-2 iq-team-title">Gunner Peha</h5>
                                </a>
                                <p class="mb-0 mt-1 text-uppercase fw-500 letter-spacing-2">Cardiologist</p>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-team-block team-standard position-relative">
                            <div class="iq-team-img">
                                <img src="{{ asset('website') }}/assets/images//team/team-2.webp" alt="team"
                                    class="img-fluid w-100" loading="lazy">
                            </div>
                            <div class="share iq-team-social position-absolute text-center w-100">
                                <ul class="list-inline d-flex align-items-center justify-content-center gap-3">
                                    <li>
                                        <a class="position-relative bg-primary text-white d-flex justify-content-center align-items-center"
                                            href="https://www.facebook.com/">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="position-relative bg-primary text-white d-flex justify-content-center align-items-center"
                                            href="https://x.com/">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="position-relative bg-primary text-white d-flex justify-content-center align-items-center"
                                            href="https://www.google.com/">
                                            <i class="fab fa-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="iq-team-info text-center pt-5 px-3 pb-3 letter-spacing-1">
                                <a href="{{ asset('website') }}/doctor-details.html">
                                    <h5 class="mb-2 iq-team-title">Ayden Leabow</h5>
                                </a>
                                <p class="mb-0 mt-1 text-uppercase fw-500 letter-spacing-2">General Surgeon</p>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-team-block team-standard position-relative">
                            <div class="iq-team-img">
                                <img src="{{ asset('website') }}/assets/images//team/team-3.webp" alt="team"
                                    class="img-fluid w-100" loading="lazy">
                            </div>
                            <div class="share iq-team-social position-absolute text-center w-100">
                                <ul class="list-inline d-flex align-items-center justify-content-center gap-3">
                                    <li>
                                        <a class="position-relative bg-primary text-white d-flex justify-content-center align-items-center"
                                            href="https://www.facebook.com/">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="position-relative bg-primary text-white d-flex justify-content-center align-items-center"
                                            href="https://x.com/">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="position-relative bg-primary text-white d-flex justify-content-center align-items-center"
                                            href="https://www.google.com/">
                                            <i class="fab fa-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="iq-team-info text-center pt-5 px-3 pb-3 letter-spacing-1">
                                <a href="{{ asset('website') }}/doctor-details.html">
                                    <h5 class="mb-2 iq-team-title">Jennifer Dumont</h5>
                                </a>
                                <p class="mb-0 mt-1 text-uppercase fw-500 letter-spacing-2">General Surgeon</p>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-team-block team-standard position-relative">
                            <div class="iq-team-img">
                                <img src="{{ asset('website') }}/assets/images//team/team-4.webp" alt="team"
                                    class="img-fluid w-100" loading="lazy">
                            </div>
                            <div class="share iq-team-social position-absolute text-center w-100">
                                <ul class="list-inline d-flex align-items-center justify-content-center gap-3">
                                    <li>
                                        <a class="position-relative bg-primary text-white d-flex justify-content-center align-items-center"
                                            href="https://www.facebook.com/">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="position-relative bg-primary text-white d-flex justify-content-center align-items-center"
                                            href="https://x.com/">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="position-relative bg-primary text-white d-flex justify-content-center align-items-center"
                                            href="https://www.google.com/">
                                            <i class="fab fa-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="iq-team-info text-center pt-5 px-3 pb-3 letter-spacing-1">
                                <a href="{{ asset('website') }}/doctor-details.html">
                                    <h5 class="mb-2 iq-team-title">Damian Melcher</h5>
                                </a>
                                <p class="mb-0 mt-1 text-uppercase fw-500 letter-spacing-2">Gynecologist</p>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-team-block team-standard position-relative">
                            <div class="iq-team-img">
                                <img src="{{ asset('website') }}/assets/images//team/team-5.webp" alt="team"
                                    class="img-fluid w-100" loading="lazy">
                            </div>
                            <div class="share iq-team-social position-absolute text-center w-100">
                                <ul class="list-inline d-flex align-items-center justify-content-center gap-3">
                                    <li>
                                        <a class="position-relative bg-primary text-white d-flex justify-content-center align-items-center"
                                            href="https://www.facebook.com/">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="position-relative bg-primary text-white d-flex justify-content-center align-items-center"
                                            href="https://x.com/">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="position-relative bg-primary text-white d-flex justify-content-center align-items-center"
                                            href="https://www.google.com/">
                                            <i class="fab fa-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="iq-team-info text-center pt-5 px-3 pb-3 letter-spacing-1">
                                <a href="{{ asset('website') }}/doctor-details.html">
                                    <h5 class="mb-2 iq-team-title">Lewis Scobee</h5>
                                </a>
                                <p class="mb-0 mt-1 text-uppercase fw-500 letter-spacing-2">Cardiologist</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <div class="position-relative section-padding rtl-image-flip"
        style="background-image: url(./assets/images/Dentist-Page/testimonial-bg.webp); background-size: cover; background-position: right center;">
        <div class="container-fluid rtl-image-flip-container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="overflow-hidden tesimonial-quote swiper swiper-general" data-slide="1"
                        data-laptop="1" data-tab="1" data-mobile="1" data-mobile-sm="1" data-autoplay="true"
                        data-loop="true" data-navigation="true" data-pagination="true">
                        <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline testimonial-quote testimonial-quote-white">
                            <li class="swiper-slide">
                                <div class="iq-testimonial testimonial-standard">
                                    <div class="iq-testimonial-content">
                                        <div class="testimonial-icon">
                                            <img src="{{ asset('website') }}/assets/images/testimonial/quote.svg"
                                                alt="quote" class="img-fluid" loading="lazy">
                                        </div>
                                        <p class="text-body fw-normal fst-italic">
                                            “You can’t go wrong here. I receive the best
                                            care and attention. The nursing staff and doctors are amazing and take
                                            their time with you.
                                            I felt better walking out here every time.”
                                        </p>
                                    </div>
                                    <div class="ratting-block">
                                        <div class="ratting">
                                            <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                                viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                    fill="#FFD329" />
                                            </svg>
                                            <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                                viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                    fill="#FFD329" />
                                            </svg>
                                            <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                                viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                    fill="#FFD329" />
                                            </svg>
                                            <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                                viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                    fill="#FFD329" />
                                            </svg>
                                            <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                                viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                    fill="#FFD329" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="iq-testimonial-member mt-5 d-flex gap-3">
                                        <div class="avtar-name">
                                            <h5 class="iq-lead text-capitalize m-0">Moric Horgon</h5>
                                            <span class="iq-post-meta text-secondary text-uppercase">Patient</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="iq-testimonial testimonial-standard">
                                    <div class="iq-testimonial-content">
                                        <div class="testimonial-icon">
                                            <img src="{{ asset('website') }}/assets/images/testimonial/quote.svg"
                                                alt="quote" class="img-fluid" loading="lazy">
                                        </div>
                                        <p class="text-body fw-normal fst-italic">
                                            “Still very professional but a much more
                                            relaxed atmosphere. This makes for a more comfortable experience which
                                            is helpful in dealing
                                            with medical issues.”
                                        </p>
                                    </div>
                                    <div class="ratting-block">
                                        <div class="ratting">
                                            <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                                viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                    fill="#FFD329" />
                                            </svg>
                                            <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                                viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                    fill="#FFD329" />
                                            </svg>
                                            <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                                viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                    fill="#FFD329" />
                                            </svg>
                                            <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                                viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                    fill="#FFD329" />
                                            </svg>
                                            <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                                viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                    fill="#FFD329" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="iq-testimonial-member mt-5 d-flex gap-3">
                                        <div class="avtar-name">
                                            <h5 class="iq-lead text-capitalize m-0">Julia Roberts</h5>
                                            <span class="iq-post-meta text-secondary text-uppercase">Healthcare</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="iq-testimonial testimonial-standard">
                                    <div class="iq-testimonial-content">
                                        <div class="testimonial-icon">
                                            <img src="{{ asset('website') }}/assets/images/testimonial/quote.svg"
                                                alt="quote" class="img-fluid" loading="lazy">
                                        </div>
                                        <p class="text-body fw-normal fst-italic">
                                            “It has been very effective, in my
                                            opinion. It has made everyone more relaxed in a very comfortable
                                            atmosphere. We have always felt like family here, even more so now.”
                                        </p>
                                    </div>
                                    <div class="ratting-block">
                                        <div class="ratting">
                                            <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                                viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                    fill="#FFD329" />
                                            </svg>
                                            <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                                viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                    stroke="#FFD329" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                                viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                    stroke="#FFD329" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                                viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                    stroke="#FFD329" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                                viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                    stroke="#FFD329" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="iq-testimonial-member mt-5 d-flex gap-3">
                                        <div class="avtar-name">
                                            <h5 class="iq-lead text-capitalize m-0">Jack leo</h5>
                                            <span class="iq-post-meta text-secondary text-uppercase">COO
                                                company</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="client-bg ">
        <div class="overflow-hidden swiper swiper-general" data-slide="6" data-laptop="4" data-tab="2"
            data-mobile="2" data-mobile-sm="2" data-autoplay="true" data-loop="true" data-navigation="true"
            data-pagination="true">
            <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline text-center">
                <li class="swiper-slide">
                    <img src="{{ asset('website') }}/assets/images/client/client-1.webp" alt="client"
                        class="iq-client-img" loading="lazy" />
                </li>
                <li class="swiper-slide">
                    <img src="{{ asset('website') }}/assets/images/client/client-2.webp" alt="client"
                        class="iq-client-img" loading="lazy" />
                </li>
                <li class="swiper-slide">
                    <img src="{{ asset('website') }}/assets/images/client/client-3.webp" alt="client"
                        class="iq-client-img" loading="lazy" />
                </li>
                <li class="swiper-slide">
                    <img src="{{ asset('website') }}/assets/images/client/client-4.webp" alt="client"
                        class="iq-client-img" loading="lazy" />
                </li>
                <li class="swiper-slide">
                    <img src="{{ asset('website') }}/assets/images/client/client-5.webp" alt="client"
                        class="iq-client-img" loading="lazy" />
                </li>
                <li class="swiper-slide">
                    <img src="{{ asset('website') }}/assets/images/client/client-1.webp" alt="client"
                        class="iq-client-img" loading="lazy" />
                </li>
                <li class="swiper-slide">
                    <img src="{{ asset('website') }}/assets/images/client/client-2.webp" alt="client"
                        class="iq-client-img" loading="lazy" />
                </li>
                <li class="swiper-slide">
                    <img src="{{ asset('website') }}/assets/images/client/client-3.webp" alt="client"
                        class="iq-client-img" loading="lazy" />
                </li>
            </ul>
        </div>
    </div>
    <div class="blog section-padding ">
        <div class="container">
            <div class="text-center">
                <div class="position-relative">
                    <div class="scrolling-text position-absolute">
                        <div class="iq-title text-uppercase">latest blog</div>
                    </div>
                </div>
                <div class="iq-title-box">
                    <span class="iq-subtitle text-uppercase">blog</span>
                    <h2 class="iq-title iq-heading-title">
                        <span class="right-text text-capitalize fw-500"> Read Our Latest </span>
                        <span class="left-text text-capitalize fw-light">News And Advices </span>
                    </h2>
                    <p class="iq-title-desc text-body mt-3 mb-0">

                    </p>
                </div>
            </div>
            <div class="position-relative overflow-hidden swiper swiper-general" data-slide="3" data-laptop="3"
                data-tab="2" data-mobile="1" data-mobile-sm="1" data-autoplay="true" data-loop="true"
                data-navigation="true" data-pagination="true">
                <ul class="p-0 m-0 mb-5 swiper-wrapper list-inline">
                    <li class="swiper-slide">
                        <div class="iq-blog shadow-none image-hover">
                            <a href="{{ asset('website') }}/blog-details.html"
                                class="blog-image d-block overflow-hidden">
                                <img src="{{ asset('website') }}/assets/images/blog/blog-1.webp" alt="blog-image"
                                    class="img-fluid w-100" loading="lazy">
                            </a>
                            <div class="iq-blog-meta d-flex justify-content-between flex-wrap mt-5 mb-2">
                                <div class="list-inline-item">
                                    <span class="screen-reader-text text-uppercase letter-spacing-1 fw-500">
                                        <a href="{{ asset('website') }}/blog-date.html">
                                            September 23, 2022
                                        </a>
                                    </span>
                                </div>
                                <div class="iq-blog-cat text-capitalize letter-spacing-2">
                                    <span class="iq-cat-name text-decoration-underline">
                                        <a href="{{ asset('website') }}/blog-category.html">
                                            Health Care
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="blog-title">
                                <a href="{{ asset('website') }}/blog-details.html">
                                    <h5 class="text-capitalize">OPD cover gaining popularity among Indian
                                        consumers</h5>
                                </a>
                            </div>
                            <div class="blog-button mt-4">
                                <div class="iq-btn-container">
                                    <a class="iq-button iq-btn-link text-capitalize"
                                        href="{{ asset('website') }}/blog-details.html">
                                        Read More
                                        <span class="btn-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                viewBox="0 0 8 8" fill="none">
                                                <path
                                                    d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-blog shadow-none image-hover">
                            <a href="{{ asset('website') }}/blog-details.html"
                                class="blog-image d-block overflow-hidden">
                                <img src="{{ asset('website') }}/assets/images/blog/blog-2.webp" alt="blog-image"
                                    class="img-fluid w-100" loading="lazy">
                            </a>
                            <div class="iq-blog-meta d-flex justify-content-between flex-wrap mt-5 mb-2">
                                <div class="list-inline-item">
                                    <span class="screen-reader-text text-uppercase letter-spacing-1 fw-500">
                                        <a href="{{ asset('website') }}/blog-date.html">
                                            September 23, 2022
                                        </a>
                                    </span>
                                </div>
                                <div class="iq-blog-cat text-capitalize letter-spacing-2">
                                    <span class="iq-cat-name text-decoration-underline">
                                        <a href="{{ asset('website') }}/blog-category.html">
                                            Eye Care
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="blog-title">
                                <a href="{{ asset('website') }}/blog-details.html">
                                    <h5 class="text-capitalize">Why Is Dry Eye So Difficult to Treat?</h5>
                                </a>
                            </div>
                            <div class="blog-button mt-4">
                                <div class="iq-btn-container">
                                    <a class="iq-button iq-btn-link text-capitalize"
                                        href="{{ asset('website') }}/blog-details.html">
                                        Read More
                                        <span class="btn-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                viewBox="0 0 8 8" fill="none">
                                                <path
                                                    d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-blog shadow-none image-hover">
                            <a href="{{ asset('website') }}/blog-details.html"
                                class="blog-image d-block overflow-hidden">
                                <img src="{{ asset('website') }}/assets/images/blog/blog-3.webp" alt="blog-image"
                                    class="img-fluid w-100" loading="lazy">
                            </a>
                            <div class="iq-blog-meta d-flex justify-content-between flex-wrap mt-5 mb-2">
                                <div class="list-inline-item">
                                    <span class="screen-reader-text text-uppercase letter-spacing-1 fw-500">
                                        <a href="{{ asset('website') }}/blog-date.html">
                                            September 23, 2022
                                        </a>
                                    </span>
                                </div>
                                <div class="iq-blog-cat text-capitalize letter-spacing-2">
                                    <span class="iq-cat-name text-decoration-underline">
                                        <a href="{{ asset('website') }}/blog-category.html">
                                            Disease
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="blog-title">
                                <a href="{{ asset('website') }}/blog-details.html">
                                    <h5 class="text-capitalize">Circulating vaccine-derived poliovirus type 2
                                        (cVDPV2) - Algeria</h5>
                                </a>
                            </div>
                            <div class="blog-button mt-4">
                                <div class="iq-btn-container">
                                    <a class="iq-button iq-btn-link text-capitalize"
                                        href="{{ asset('website') }}/blog-details.html">
                                        Read More
                                        <span class="btn-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                viewBox="0 0 8 8" fill="none">
                                                <path
                                                    d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-blog shadow-none image-hover">
                            <a href="{{ asset('website') }}/blog-details.html"
                                class="blog-image d-block overflow-hidden">
                                <img src="{{ asset('website') }}/assets/images/blog/blog-4.webp" alt="blog-image"
                                    class="img-fluid w-100" loading="lazy">
                            </a>
                            <div class="iq-blog-meta d-flex justify-content-between flex-wrap mt-5 mb-2">
                                <div class="list-inline-item">
                                    <span class="screen-reader-text text-uppercase letter-spacing-1 fw-500">
                                        <a href="{{ asset('website') }}/blog-date.html">
                                            September 23, 2022
                                        </a>
                                    </span>
                                </div>
                                <div class="iq-blog-cat text-capitalize letter-spacing-2">
                                    <span class="iq-cat-name text-decoration-underline">
                                        <a href="{{ asset('website') }}/blog-category.html">
                                            Health Care
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="blog-title">
                                <a href="{{ asset('website') }}/blog-details.html">
                                    <h5 class="text-capitalize">A Revolutionary Change in Paediatric Healthcare
                                    </h5>
                                </a>
                            </div>
                            <div class="blog-button mt-4">
                                <div class="iq-btn-container">
                                    <a class="iq-button iq-btn-link text-capitalize"
                                        href="{{ asset('website') }}/blog-details.html">
                                        Read More
                                        <span class="btn-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                viewBox="0 0 8 8" fill="none">
                                                <path
                                                    d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-blog shadow-none image-hover">
                            <a href="{{ asset('website') }}/blog-details.html"
                                class="blog-image d-block overflow-hidden">
                                <img src="{{ asset('website') }}/assets/images/blog/blog-5.webp" alt="blog-image"
                                    class="img-fluid w-100" loading="lazy">
                            </a>
                            <div class="iq-blog-meta d-flex justify-content-between flex-wrap mt-5 mb-2">
                                <div class="list-inline-item">
                                    <span class="screen-reader-text text-uppercase letter-spacing-1 fw-500">
                                        <a href="{{ asset('website') }}/blog-date.html">
                                            September 23, 2022
                                        </a>
                                    </span>
                                </div>
                                <div class="iq-blog-cat text-capitalize letter-spacing-2">
                                    <span class="iq-cat-name text-decoration-underline">
                                        <a href="{{ asset('website') }}/blog-category.html">
                                            eye Care
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="blog-title">
                                <a href="{{ asset('website') }}/blog-details.html">
                                    <h5 class="text-capitalize">Could Eyedrops Replace Reading Glasses?</h5>
                                </a>
                            </div>
                            <div class="blog-button mt-4">
                                <div class="iq-btn-container">
                                    <a class="iq-button iq-btn-link text-capitalize"
                                        href="{{ asset('website') }}/blog-details.html">
                                        Read More
                                        <span class="btn-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                viewBox="0 0 8 8" fill="none">
                                                <path
                                                    d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-blog shadow-none image-hover">
                            <a href="{{ asset('website') }}/blog-details.html"
                                class="blog-image d-block overflow-hidden">
                                <img src="{{ asset('website') }}/assets/images/blog/blog-6.webp" alt="blog-image"
                                    class="img-fluid w-100" loading="lazy">
                            </a>
                            <div class="iq-blog-meta d-flex justify-content-between flex-wrap mt-5 mb-2">
                                <div class="list-inline-item">
                                    <span class="screen-reader-text text-uppercase letter-spacing-1 fw-500">
                                        <a href="{{ asset('website') }}/blog-date.html">
                                            September 23, 2022
                                        </a>
                                    </span>
                                </div>
                                <div class="iq-blog-cat text-capitalize letter-spacing-2">
                                    <span class="iq-cat-name text-decoration-underline">
                                        <a href="{{ asset('website') }}/blog-category.html">
                                            eye Care
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="blog-title">
                                <a href="{{ asset('website') }}/blog-details.html">
                                    <h5 class="text-capitalize">A World With Only Optimized Experiences Is Just
                                        Boring</h5>
                                </a>
                            </div>
                            <div class="blog-button mt-4">
                                <div class="iq-btn-container">
                                    <a class="iq-button iq-btn-link text-capitalize"
                                        href="{{ asset('website') }}/blog-details.html">
                                        Read More
                                        <span class="btn-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                viewBox="0 0 8 8" fill="none">
                                                <path
                                                    d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-blog shadow-none image-hover">
                            <a href="{{ asset('website') }}/blog-details.html"
                                class="blog-image d-block overflow-hidden">
                                <img src="{{ asset('website') }}/assets/images/blog/blog-7.webp" alt="blog-image"
                                    class="img-fluid w-100" loading="lazy">
                            </a>
                            <div class="iq-blog-meta d-flex justify-content-between flex-wrap mt-5 mb-2">
                                <div class="list-inline-item">
                                    <span class="screen-reader-text text-uppercase letter-spacing-1 fw-500">
                                        <a href="{{ asset('website') }}/blog-date.html">
                                            September 23, 2022
                                        </a>
                                    </span>
                                </div>
                                <div class="iq-blog-cat text-capitalize letter-spacing-2">
                                    <span class="iq-cat-name text-decoration-underline">
                                        <a href="{{ asset('website') }}/blog-category.html">
                                            health Care
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="blog-title">
                                <a href="{{ asset('website') }}/blog-details.html">
                                    <h5 class="text-capitalize">Some questions about nutrition?</h5>
                                </a>
                            </div>
                            <div class="blog-button mt-4">
                                <div class="iq-btn-container">
                                    <a class="iq-button iq-btn-link text-capitalize"
                                        href="{{ asset('website') }}/blog-details.html">
                                        Read More
                                        <span class="btn-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                viewBox="0 0 8 8" fill="none">
                                                <path
                                                    d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-blog shadow-none image-hover">
                            <a href="{{ asset('website') }}/blog-details.html"
                                class="blog-image d-block overflow-hidden">
                                <img src="{{ asset('website') }}/assets/images/blog/blog-8.webp" alt="blog-image"
                                    class="img-fluid w-100" loading="lazy">
                            </a>
                            <div class="iq-blog-meta d-flex justify-content-between flex-wrap mt-5 mb-2">
                                <div class="list-inline-item">
                                    <span class="screen-reader-text text-uppercase letter-spacing-1 fw-500">
                                        <a href="{{ asset('website') }}/blog-date.html">
                                            September 23, 2022
                                        </a>
                                    </span>
                                </div>
                                <div class="iq-blog-cat text-capitalize letter-spacing-2">
                                    <span class="iq-cat-name text-decoration-underline">
                                        <a href="{{ asset('website') }}/blog-category.html">
                                            eye Care
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="blog-title">
                                <a href="{{ asset('website') }}/blog-details.html">
                                    <h5 class="text-capitalize">What are the 7 parts of the eye?</h5>
                                </a>
                            </div>
                            <div class="blog-button mt-4">
                                <div class="iq-btn-container">
                                    <a class="iq-button iq-btn-link text-capitalize"
                                        href="{{ asset('website') }}/blog-details.html">
                                        Read More
                                        <span class="btn-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                viewBox="0 0 8 8" fill="none">
                                                <path
                                                    d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-blog shadow-none image-hover">
                            <a href="{{ asset('website') }}/blog-details.html"
                                class="blog-image d-block overflow-hidden">
                                <img src="{{ asset('website') }}/assets/images/blog/blog-9.webp" alt="blog-image"
                                    class="img-fluid w-100" loading="lazy">
                            </a>
                            <div class="iq-blog-meta d-flex justify-content-between flex-wrap mt-5 mb-2">
                                <div class="list-inline-item">
                                    <span class="screen-reader-text text-uppercase letter-spacing-1 fw-500">
                                        <a href="{{ asset('website') }}/blog-date.html">
                                            September 23, 2022
                                        </a>
                                    </span>
                                </div>
                                <div class="iq-blog-cat text-capitalize letter-spacing-2">
                                    <span class="iq-cat-name text-decoration-underline">
                                        <a href="{{ asset('website') }}/blog-category.html">
                                            eye Care
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="blog-title">
                                <a href="{{ asset('website') }}/blog-details.html">
                                    <h5 class="text-capitalize">Is it okay to cleanse your body by fasting from
                                        time to time?</h5>
                                </a>
                            </div>
                            <div class="blog-button mt-4">
                                <div class="iq-btn-container">
                                    <a class="iq-button iq-btn-link text-capitalize"
                                        href="{{ asset('website') }}/blog-details.html">
                                        Read More
                                        <span class="btn-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                viewBox="0 0 8 8" fill="none">
                                                <path
                                                    d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-blog shadow-none image-hover">
                            <a href="{{ asset('website') }}/blog-details.html"
                                class="blog-image d-block overflow-hidden">
                                <img src="{{ asset('website') }}/assets/images/blog/blog-10.webp" alt="blog-image"
                                    class="img-fluid w-100" loading="lazy">
                            </a>
                            <div class="iq-blog-meta d-flex justify-content-between flex-wrap mt-5 mb-2">
                                <div class="list-inline-item">
                                    <span class="screen-reader-text text-uppercase letter-spacing-1 fw-500">
                                        <a href="{{ asset('website') }}/blog-date.html">
                                            September 23, 2022
                                        </a>
                                    </span>
                                </div>
                                <div class="iq-blog-cat text-capitalize letter-spacing-2">
                                    <span class="iq-cat-name text-decoration-underline">
                                        <a href="{{ asset('website') }}/blog-category.html">
                                            health Care
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="blog-title">
                                <a href="{{ asset('website') }}/blog-details.html">
                                    <h5 class="text-capitalize">Are Short Workouts Worth It?</h5>
                                </a>
                            </div>
                            <div class="blog-button mt-4">
                                <div class="iq-btn-container">
                                    <a class="iq-button iq-btn-link text-capitalize"
                                        href="{{ asset('website') }}/blog-details.html">
                                        Read More
                                        <span class="btn-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                viewBox="0 0 8 8" fill="none">
                                                <path
                                                    d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-blog shadow-none image-hover">
                            <a href="{{ asset('website') }}/blog-details.html"
                                class="blog-image d-block overflow-hidden">
                                <img src="{{ asset('website') }}/assets/images/blog/blog-11.webp" alt="blog-image"
                                    class="img-fluid w-100" loading="lazy">
                            </a>
                            <div class="iq-blog-meta d-flex justify-content-between flex-wrap mt-5 mb-2">
                                <div class="list-inline-item">
                                    <span class="screen-reader-text text-uppercase letter-spacing-1 fw-500">
                                        <a href="{{ asset('website') }}/blog-date.html">
                                            September 23, 2022
                                        </a>
                                    </span>
                                </div>
                                <div class="iq-blog-cat text-capitalize letter-spacing-2">
                                    <span class="iq-cat-name text-decoration-underline">
                                        <a href="{{ asset('website') }}/blog-category.html">
                                            Disease
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="blog-title">
                                <a href="{{ asset('website') }}/blog-details.html">
                                    <h5 class="text-capitalize">Will I need more medical tests?</h5>
                                </a>
                            </div>
                            <div class="blog-button mt-4">
                                <div class="iq-btn-container">
                                    <a class="iq-button iq-btn-link text-capitalize"
                                        href="{{ asset('website') }}/blog-details.html">
                                        Read More
                                        <span class="btn-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                viewBox="0 0 8 8" fill="none">
                                                <path
                                                    d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

</main>
<!-- Wrapper End -->
<!-- Footer start -->


@include('website.layout.footer')
<!-- footer end -->

<!-- setting -->

@include('website.layout.change-language')

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
