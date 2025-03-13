@extends('website.layout.master')
@section('title', __('navbar.About_US'))
@section('content')


    <div class="iq-breadcrumb bg-primary-subtle">
        <div class="container">
            <nav aria-label="breadcrumb" class="text-center">
                <h2 class="title">{{ __('navbar.About_US') }}</h2>
                <ol class="breadcrumb justify-content-center mt-2 mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">{{ __('navbar.home') }}</a>
                    </li>
                    <li class="breadcrumb-item active">
                        {{ __('navbar.About_US') }}
                    </li>
                </ol>
            </nav>
        </div>
    </div> <!--bread-crumb-->

    </div>
    <div class="section-padding">
        <div class="container position-relative">
            <div class="row pt-5">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="iq-fancy-box position-relative bg-white">
                        <div class="iq-img-area bg-primary d-block m-auto">
                            <img src="{{ asset('website') }}/assets/images//general/doctor.svg" alt="icon"
                                class="img-fluid" loading="lazy">
                        </div>
                        <div class="iq-fancy-box-content mt-5">
                            <h4 class="mb-2">Qualified Doctors</h4>
                            <p class="text-body m-0">A person who holds a degree recognised by the Medical Council
                                is registered</p>
                            <div class="fencybox-button mt-3 mt-md-5">
                                <div class="iq-btn-container">
                                    <a class="iq-button iq-btn-link text-capitalize" href="./service1.html">
                                        read more
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
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                    <div class="iq-fancy-box position-relative bg-white">
                        <div class="iq-img-area bg-primary d-block m-auto">
                            <img src="{{ asset('website') }}/assets/images//general/treatment.svg" alt="icon"
                                class="img-fluid" loading="lazy">
                        </div>
                        <div class="iq-fancy-box-content mt-5">
                            <h4 class="mb-2">Trusted Treatment</h4>
                            <p class="text-body m-0">KiviCare has many types of treatment to relieve symptoms for
                                all types illness.</p>
                            <div class="fencybox-button mt-3 mt-md-5">
                                <div class="iq-btn-container">
                                    <a class="iq-button iq-btn-link text-capitalize" href="./service1.html">
                                        read more
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
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
                    <div class="iq-fancy-box position-relative bg-white">
                        <div class="iq-img-area bg-primary d-block m-auto">
                            <img src="{{ asset('website') }}/assets/images//general/service.svg" alt="icon"
                                class="img-fluid" loading="lazy">
                        </div>
                        <div class="iq-fancy-box-content mt-5">
                            <h4 class="mb-2">24/7 Services</h4>
                            <p class="text-body m-0">KiviCare is at your service 24×7 aiming to provide the best
                                services of medical</p>
                            <div class="fencybox-button mt-3 mt-md-5">
                                <div class="iq-btn-container">
                                    <a class="iq-button iq-btn-link text-capitalize" href="./service1.html">
                                        read more
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-primary-subtle section-padding">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-6 pe-md-5">
                    <div class="scrolling-text position-absolute">
                        <div class="iq-title text-uppercase">about us</div>
                    </div>
                    <div class="iq-title-box">
                        <span class="iq-subtitle text-uppercase">about kivicare</span>
                        <h2 class="iq-title iq-heading-title">
                            <span class="right-text text-capitalize fw-500">Health </span>
                            <span class="left-text text-capitalize fw-light">Commitments</span>
                        </h2>
                        <p class="iq-title-desc text-body mt-3 mb-0">
                            We are ready to provide you with any Medical, health and fitness help as well as prepare
                            a business plan. We are ready to provide you with any Medical, health and fitness help
                            as well as prepare a business plan.
                        </p>
                    </div>
                    <div class="block-progressbar">
                        <ul class="list-inline m-0">
                            <li class="mb-4">
                                <div class="wrapper-progress">
                                    <div class="percentage-progress d-flex justify-content-between">
                                        <h6 class="mb-2 text-body">Successful Operations</h6>
                                        <div><span>80%</span></div>
                                    </div>
                                </div>
                                <div class="progress" style="height:10px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%; height:10px"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="wrapper-progress">
                                    <div class="percentage-progress d-flex justify-content-between">
                                        <h6 class="mb-2 text-body">Empathy for Patients</h6>
                                        <div><span>90%</span></div>
                                    </div>
                                </div>
                                <div class="progress" style="height:10px">
                                    <div class="progress-bar bg-primary" role="progressbar"
                                        style="width: 90%; height:10px" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>
                                <div class="wrapper-progress">
                                    <div class="percentage-progress d-flex justify-content-between">
                                        <h6 class="mb-2 text-body">Hygiene</h6>
                                        <div><span>100%</span></div>
                                    </div>
                                </div>
                                <div class="progress" style="height:10px">
                                    <div class="progress-bar bg-primary" role="progressbar"
                                        style="width: 100%; height:10px" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex  gap-4 mt-5 flex-column flex-lg-row mb-5 mb-md-0">
                        <div>
                            <h4 class="fw-normal">Briar Ford</h4>
                            <p class="text-primary text-uppercase fw-bold">CEO &amp; Founder</p>
                        </div>
                        <div class="sign-image">
                            <img src="{{ asset('website') }}/assets/images/general/signature.png" alt=""
                                class="img-fluid mb-5">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('website') }}/assets/images/pages/about-banner.webp" alt="banner"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding testimonial-section">
        <div class="container position-relative">
            <div class="scrolling-text position-absolute">
                <div class="iq-title text-uppercase">Testimonails</div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 position-relative">
                    <div class="iq-title-box">
                        <span class="iq-subtitle text-uppercase">testimonials</span>
                        <h2 class="iq-title iq-heading-title">
                            <span class="right-text text-capitalize fw-500">What Our </span>
                            <span class="left-text text-capitalize fw-light">Patients Says</span>
                        </h2>
                        <p class="iq-title-desc text-body mt-3 mb-0">

                        </p>
                    </div>
                </div>
                <div class="col-md-6 position-relative">
                    <div class="overflow-hidden swiper swiper-general" data-slide="1" data-laptop="1" data-tab="1"
                        data-mobile="1" data-mobile-sm="1" data-autoplay="true" data-loop="true" data-navigation="true"
                        data-pagination="true">
                        <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                            <li class="swiper-slide">
                                <div class="iq-testimonial testimonial-standard">
                                    <div class="iq-testimonial-content">
                                        <p class="text-body fw-normal fst-italic">
                                            “You can’t go wrong here. I receive the best care and attention. The
                                            nursing staff and doctors are amazing and take their time with you. I
                                            felt better walking out here every time.”
                                        </p>
                                    </div>
                                    <div class="iq-testimonial-member mt-5 d-flex gap-3">
                                        <div class="iq-testimonial-avtar">
                                            <img src="{{ asset('website') }}/assets/images//testimonial/user-1.webp"
                                                alt="user" class="img-fluid rounded-circle" loading="lazy">
                                        </div>
                                        <div class="avtar-name">
                                            <h5 class="iq-lead text-capitalize m-0">Moric Horgon</h5>
                                            <span class="iq-post-meta text-secondary text-capitalize">Patient</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="iq-testimonial testimonial-standard">
                                    <div class="iq-testimonial-content">
                                        <p class="text-body fw-normal fst-italic">
                                            “Still very professional but a much more relaxed atmosphere. This makes
                                            for a more comfortable experience which is helpful in dealing with
                                            medical issues.”
                                        </p>
                                    </div>
                                    <div class="iq-testimonial-member mt-5 d-flex gap-3">
                                        <div class="iq-testimonial-avtar">
                                            <img src="{{ asset('website') }}/assets/images//testimonial/user-2.webp"
                                                alt="user" class="img-fluid rounded-circle" loading="lazy">
                                        </div>
                                        <div class="avtar-name">
                                            <h5 class="iq-lead text-capitalize m-0">Julia Roberts</h5>
                                            <span class="iq-post-meta text-secondary text-capitalize">Healthcare</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="iq-testimonial testimonial-standard">
                                    <div class="iq-testimonial-content">
                                        <p class="text-body fw-normal fst-italic">
                                            “It has been very effective, in my opinion. It has made everyone more
                                            relaxed in a very comfortable atmosphere. We have always felt like
                                            family here, even more so now.”
                                        </p>
                                    </div>
                                    <div class="iq-testimonial-member mt-5 d-flex gap-3">
                                        <div class="iq-testimonial-avtar">
                                            <img src="{{ asset('website') }}/assets/images//testimonial/user-3.webp"
                                                alt="user" class="img-fluid rounded-circle" loading="lazy">
                                        </div>
                                        <div class="avtar-name">
                                            <h5 class="iq-lead text-capitalize m-0">Jack leo</h5>
                                            <span class="iq-post-meta text-secondary text-capitalize">COO
                                                company</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="arrow-joint">
                            <div class="swiper-button swiper-button-next"></div>
                            <div class="swiper-button swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding bg-secondary-subtle text-body position-relative">
        <div class="container">
            <div class="text-left position-relative">
                <div class="scrolling-text position-absolute">
                    <div class="iq-title text-uppercase">Our History</div>
                </div>
            </div>
            <div class="iq-title-box">
                <span class="iq-subtitle text-uppercase">HISTORY</span>
                <h2 class="iq-title iq-heading-title">
                    <span class="right-text text-capitalize fw-500">Our </span>
                    <span class="left-text text-capitalize fw-light">History</span>
                </h2>
                <p class="iq-title-desc text-body mt-3 mb-0">

                </p>
            </div>
            <ul class="list-inline m-0">
                <li class="mb-5 pb-5 border-bottom">
                    <div class="history">
                        <div class="row align-items-center">
                            <div class="col-md-4 border-end">
                                <div class="d-flex align-items-center gap-3 gap-lg-5 flex-lg-auto flex-wrap">
                                    <img src="{{ asset('website') }}/assets/images//pages/history-1.webp" alt="icon"
                                        class="img-fluid history-image" loading="lazy">
                                    <h5>2012 – 2013</h5>
                                </div>
                            </div>
                            <div class="col-md-8 ps-md-5 mt-md-0 mt-3">
                                <p class="mb-0">The point of using Lorem Ipsum is that it has a more-or-less
                                    normal distribution of letters, as opposed to using ‘Content here, content
                                    here’, making it look like readable English.Many desktop publishing packagesage.
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-5 pb-5 border-bottom">
                    <div class="history">
                        <div class="row align-items-center">
                            <div class="col-md-4 border-end">
                                <div class="d-flex align-items-center gap-3 gap-lg-5 flex-lg-auto flex-wrap">
                                    <img src="{{ asset('website') }}/assets/images//pages/history-2.webp" alt="icon"
                                        class="img-fluid history-image" loading="lazy">
                                    <h5>2013 – 2014</h5>
                                </div>
                            </div>
                            <div class="col-md-8 ps-md-5 mt-md-0 mt-3">
                                <p class="mb-0">The point of using Lorem Ipsum is that it has a more-or-less
                                    normal distribution of letters, as opposed to using ‘Content here, content
                                    here’, making it look like readable English.Many desktop publishing packagesage.
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mb-5 pb-5 border-bottom">
                    <div class="history">
                        <div class="row align-items-center">
                            <div class="col-md-4 border-end">
                                <div class="d-flex align-items-center gap-3 gap-lg-5 flex-lg-auto flex-wrap">
                                    <img src="{{ asset('website') }}/assets/images//pages/history-3.webp" alt="icon"
                                        class="img-fluid history-image" loading="lazy">
                                    <h5>2014 – 2015</h5>
                                </div>
                            </div>
                            <div class="col-md-8 ps-md-5 mt-md-0 mt-3">
                                <p class="mb-0">The point of using Lorem Ipsum is that it has a more-or-less
                                    normal distribution of letters, as opposed to using ‘Content here, content
                                    here’, making it look like readable English.Many desktop publishing packagesage.
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="">
                    <div class="history">
                        <div class="row align-items-center">
                            <div class="col-md-4 border-end">
                                <div class="d-flex align-items-center gap-3 gap-lg-5 flex-lg-auto flex-wrap">
                                    <img src="{{ asset('website') }}/assets/images//pages/history-4.webp" alt="icon"
                                        class="img-fluid history-image" loading="lazy">
                                    <h5>2015 – 2020</h5>
                                </div>
                            </div>
                            <div class="col-md-8 ps-md-5 mt-md-0 mt-3">
                                <p class="mb-0">The point of using Lorem Ipsum is that it has a more-or-less
                                    normal distribution of letters, as opposed to using ‘Content here, content
                                    here’, making it look like readable English.Many desktop publishing packagesage.
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
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
                        <span class="right-text text-capitalize fw-500">Our outstanding </span>
                        <span class="left-text text-capitalize fw-light">Doctors</span>
                    </h2>
                    <p class="iq-title-desc text-body mt-3 mb-0">

                    </p>
                </div>
            </div>
            <div class="overflow-hidden swiper swiper-general" data-slide="3" data-laptop="3" data-tab="2"
                data-mobile="1" data-mobile-sm="1" data-autoplay="true" data-loop="true" data-navigation="true"
                data-pagination="true">
                <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                    <li class="swiper-slide">
                        <div class="iq-team-block team-overdetail position-relative p-2">
                            <div class="iq-team-img">
                                <img src="{{ asset('website') }}/assets/images//team/team-1.webp" alt="team"
                                    class="img-fluid w-100" loading="lazy">
                            </div>
                            <div class="share iq-team-social position-absolute">
                                <ul class="list-inline list-unstyled p-0 m-0">
                                    <li class="mb-2">
                                        <a class="position-relative bg-primary text-white d-flex justify-content-center align-items-center"
                                            href="https://www.facebook.com/">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="mb-2">
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
                            <div class="iq-team-info position-absolute d-block w-100">
                                <div class="iq-team-main-detail bg-white">
                                    <a href="doctor-details.html">
                                        <h5>Gunner Peha</h5>
                                    </a>
                                    <p class="mb-0 text-uppercase fw-bolder text-primary fw-500">Cardiologist</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-team-block team-overdetail position-relative p-2">
                            <div class="iq-team-img">
                                <img src="{{ asset('website') }}/assets/images//team/team-2.webp" alt="team"
                                    class="img-fluid w-100" loading="lazy">
                            </div>
                            <div class="share iq-team-social position-absolute">
                                <ul class="list-inline list-unstyled p-0 m-0">
                                    <li class="mb-2">
                                        <a class="position-relative bg-primary text-white d-flex justify-content-center align-items-center"
                                            href="https://www.facebook.com/">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="mb-2">
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
                            <div class="iq-team-info position-absolute d-block w-100">
                                <div class="iq-team-main-detail bg-white">
                                    <a href="doctor-details.html">
                                        <h5>Ayden Leabow</h5>
                                    </a>
                                    <p class="mb-0 text-uppercase fw-bolder text-primary fw-500">General Surgeon
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-team-block team-overdetail position-relative p-2">
                            <div class="iq-team-img">
                                <img src="{{ asset('website') }}/assets/images//team/team-3.webp" alt="team"
                                    class="img-fluid w-100" loading="lazy">
                            </div>
                            <div class="share iq-team-social position-absolute">
                                <ul class="list-inline list-unstyled p-0 m-0">
                                    <li class="mb-2">
                                        <a class="position-relative bg-primary text-white d-flex justify-content-center align-items-center"
                                            href="https://www.facebook.com/">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="mb-2">
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
                            <div class="iq-team-info position-absolute d-block w-100">
                                <div class="iq-team-main-detail bg-white">
                                    <a href="doctor-details.html">
                                        <h5>Jennifer Dumont</h5>
                                    </a>
                                    <p class="mb-0 text-uppercase fw-bolder text-primary fw-500">General Surgeon
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-team-block team-overdetail position-relative p-2">
                            <div class="iq-team-img">
                                <img src="{{ asset('website') }}/assets/images//team/team-4.webp" alt="team"
                                    class="img-fluid w-100" loading="lazy">
                            </div>
                            <div class="share iq-team-social position-absolute">
                                <ul class="list-inline list-unstyled p-0 m-0">
                                    <li class="mb-2">
                                        <a class="position-relative bg-primary text-white d-flex justify-content-center align-items-center"
                                            href="https://www.facebook.com/">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="mb-2">
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
                            <div class="iq-team-info position-absolute d-block w-100">
                                <div class="iq-team-main-detail bg-white">
                                    <a href="doctor-details.html">
                                        <h5>Damian Melcher</h5>
                                    </a>
                                    <p class="mb-0 text-uppercase fw-bolder text-primary fw-500">Gynecologist</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-team-block team-overdetail position-relative p-2">
                            <div class="iq-team-img">
                                <img src="{{ asset('website') }}/assets/images//team/team-5.webp" alt="team"
                                    class="img-fluid w-100" loading="lazy">
                            </div>
                            <div class="share iq-team-social position-absolute">
                                <ul class="list-inline list-unstyled p-0 m-0">
                                    <li class="mb-2">
                                        <a class="position-relative bg-primary text-white d-flex justify-content-center align-items-center"
                                            href="https://www.facebook.com/">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="mb-2">
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
                            <div class="iq-team-info position-absolute d-block w-100">
                                <div class="iq-team-main-detail bg-white">
                                    <a href="doctor-details.html">
                                        <h5>Lewis Scobee</h5>
                                    </a>
                                    <p class="mb-0 text-uppercase fw-bolder text-primary fw-500">Cardiologist</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section-padding bg-primary-subtle text-body">
        <div class="container">
            <div class="text-center position-relative">
                <div class="scrolling-text position-absolute">
                    <div class="iq-title text-uppercase">Why Choose</div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="iq-title-box">
                        <span class="iq-subtitle text-uppercase">SERVICES</span>
                        <h2 class="iq-title iq-heading-title">
                            <span class="right-text text-capitalize fw-500">Why choose </span>
                            <span class="left-text text-capitalize fw-light">us</span>
                        </h2>
                        <p class="iq-title-desc text-body mt-3 mb-0">

                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a
                        page when looking at its layout. The point of using Lorem Ipsum.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-md-6">
                    <div class="iq-icon-box iconbox-border position-relative bg-white">
                        <div class="iq-img-area pulse-shrink-on-hover text-primary">
                            <i aria-hidden="true" class="flaticon flaticon-flaticon flaticon-businessman"></i>
                        </div>
                        <div class="icon-box-content mt-5">
                            <h5 class="icon-title text-capitalize mb-2">Family Consultation</h5>
                            <p class="m-0"> It is a long established fact that a reader will be distracted.</p>
                            <div class="iconbox-button mt-5">
                                <div class="iq-btn-container">
                                    <a class="iq-button iq-btn-link text-capitalize" href="./service1.html">
                                        read more
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
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-md-0 mt-5">
                    <div class="iq-icon-box iconbox-border position-relative bg-white">
                        <div class="iq-img-area pulse-shrink-on-hover text-primary">
                            <i aria-hidden="true" class="flaticon flaticon-flaticon flaticon-insurance"></i>
                        </div>
                        <div class="icon-box-content mt-5">
                            <h5 class="icon-title text-capitalize mb-2">Health Services</h5>
                            <p class="m-0">It is a long established fact that a reader will be distracted.</p>
                            <div class="iconbox-button mt-5">
                                <div class="iq-btn-container">
                                    <a class="iq-button iq-btn-link text-capitalize" href="./service1.html">
                                        read more
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
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                    <div class="iq-icon-box iconbox-border position-relative bg-white">
                        <div class="iq-img-area pulse-shrink-on-hover text-primary">
                            <i aria-hidden="true" class="flaticon flaticon-flaticon flaticon-calendar"></i>
                        </div>
                        <div class="icon-box-content mt-5">
                            <h5 class="icon-title text-capitalize mb-2">Health Checkup</h5>
                            <p class="m-0">It is a long established fact that a reader will be distracted.</p>
                            <div class="iconbox-button mt-5">
                                <div class="iq-btn-container">
                                    <a class="iq-button iq-btn-link text-capitalize" href="./service1.html">
                                        read more
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
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                    <div class="iq-icon-box iconbox-border position-relative bg-white">
                        <div class="iq-img-area pulse-shrink-on-hover text-primary">
                            <i aria-hidden="true" class="flaticon flaticon-flaticon flaticon-reward-1"></i>
                        </div>
                        <div class="icon-box-content mt-5">
                            <h5 class="icon-title text-capitalize mb-2">Awesome Services</h5>
                            <p class="m-0">It is a long established fact that a reader will be distracted..</p>
                            <div class="iconbox-button mt-5">
                                <div class="iq-btn-container">
                                    <a class="iq-button iq-btn-link text-capitalize" href="./service1.html">
                                        read more
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding">
        <div class="container">
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


    @endsection
