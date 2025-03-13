@extends('website.layout.master')
@section('title', __('navbar.Appointment'))
@section('content')


    @include('website\layout\breadcrumb', [
        'title' => __('navbar.Appointment'),
        'title_desc' => __('navbar.Appointment'),
    ])
    
    <div class="section-padding">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="appointment-tab-form p-3 bg-white box-shadow">
                    <div class="row g-3">
                        <div class="col-lg-4">
                            <ul id="appointment-tab-list"
                                class="bg-primary p-4 list-inline m-0 d-flex justify-content-lg-between justify-content-center h-100 flex-lg-column">
                                <li class="active mb-lg-3 me-lg-0 me-sm-3 me-2">
                                    <a href="javascript:void(0);" class="d-inline-block">
                                        <span class="d-flex gap-3">
                                            <span class="tab-position text-center pe-lg-0 pe-sm-4 pe-3">
                                                <span class="d-inline-block active-circle"></span>
                                            </span>
                                            <span class="tab-content d-lg-block d-none">
                                                <span class="tab-title d-block mb-1">
                                                    Choose a Clinic
                                                </span>
                                                <span class="tab-desc">
                                                    Please select a Clinic you want to visit
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="mb-lg-3 me-lg-0 me-sm-3 me-2">
                                    <a href="javascript:void(0);" class="d-inline-block">
                                        <span class="d-flex gap-3">
                                            <span class="tab-position text-center pe-lg-0 pe-sm-4 pe-3">
                                                <span class="d-inline-block active-circle"></span>
                                            </span>
                                            <span class="tab-content d-lg-block d-none">
                                                <span class="tab-title d-block mb-1">
                                                    Choose Your Doctor
                                                </span>
                                                <span class="tab-desc">
                                                    Pick a specific Doctor to perform your service
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="mb-lg-3 me-lg-0 me-sm-3 me-2">
                                    <a href="javascript:void(0);" class="d-inline-block">
                                        <span class="d-flex gap-3">
                                            <span class="tab-position text-center pe-lg-0 pe-sm-4 pe-3">
                                                <span class="d-inline-block active-circle"> </span>
                                            </span>
                                            <span class="tab-content d-lg-block d-none">
                                                <span class="tab-title d-block mb-1">
                                                    Doctor Services
                                                </span>
                                                <span class="tab-desc">
                                                    Please select a service from below options
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="mb-lg-3 me-lg-0 me-sm-3 me-2">
                                    <a href="javascript:void(0);" class="d-inline-block">
                                        <span class="d-flex gap-3">
                                            <span class="tab-position text-center pe-lg-0 pe-sm-4 pe-3">
                                                <span class="d-inline-block active-circle"></span>
                                            </span>
                                            <span class="tab-content d-lg-block d-none">
                                                <span class="tab-title d-block mb-1">
                                                    Select Date and Time
                                                </span>
                                                <span class="tab-desc">
                                                    Select date to see a timeline of available slots
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="mb-lg-3 me-lg-0 me-sm-3 me-2">
                                    <a href="javascript:void(0);" class="d-inline-block">
                                        <span class="d-flex gap-3">
                                            <span class="tab-position text-center pe-lg-0 pe-sm-4 pe-3">
                                                <span class="d-inline-block active-circle"> </span>
                                            </span>
                                            <span class="tab-content d-lg-block d-none">
                                                <span class="tab-title d-block mb-1">
                                                    Appointment Extra Data
                                                </span>
                                                <span class="tab-desc">
                                                    Upload file and description about appointment
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="mb-lg-3 me-lg-0 me-sm-3 me-2">
                                    <a href="javascript:void(0);" class="d-inline-block">
                                        <span class="d-flex gap-3">
                                            <span class="tab-position text-center pe-lg-0 pe-sm-4 pe-3">
                                                <span class="d-inline-block active-circle"> </span>
                                            </span>
                                            <span class="tab-content d-lg-block d-none">
                                                <span class="tab-title d-block mb-1">
                                                    User Detail Information
                                                </span>
                                                <span class="tab-desc">
                                                    Please provide you contact details
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="d-inline-block">
                                        <span class="d-flex gap-3">
                                            <span class="tab-position text-center">
                                                <span class="d-inline-block active-circle"></span>
                                            </span>
                                            <span class="tab-content d-lg-block d-none">
                                                <span class="tab-title d-block mb-1">
                                                    Confirmation
                                                </span>
                                                <span class="tab-desc">
                                                    Confirm your booking
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-8 mt-lg-3 mt-5">
                            <div class="border h-100 position-relative">
                                <div class="appointment-content-active h-100">
                                    <div class="tab-widget-inner h-100">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap gap-3 py-3 mx-3 border-bottom">
                                            <h5 class="mb-0 flex-shrink-0">Select Clinic</h5>
                                            <div class="d-inline-block">
                                                <div class="form-group input-group mb-0 search-input me-3">
                                                    <input type="text" class="form-control" placeholder="Search...">
                                                    <span class="input-group-text">
                                                        <svg class="icon-20" width="20" height="20"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="11.7669" cy="11.7666" r="8.98856"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                            </circle>
                                                            <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-widget-inner-data pt-5 pb-3 px-3">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div
                                                        class="form-check form-check-inline m-0 p-0 position-relative d-block box-checked">
                                                        <input type="radio" name="radios" class="form-check-input"
                                                            id="customCheck1">
                                                        <label class="form-check-label d-inline-block w-100"
                                                            for="customCheck1">
                                                            <span class="d-block appointment-clinic-box p-4 text-center">
                                                                <span class="d-block mb-4">
                                                                    <img alt="img"
                                                                        src="{{ asset('website') }}/assets/images/pages/clinic-2.webp"
                                                                        height="80" width="80"
                                                                        class="rounded-circle object-cover">
                                                                </span>
                                                                <span class="d-block h5 mb-2">Miracle Clinic</span>
                                                                <span class="text-body">3/e, Naaz Bldg, Lamington
                                                                    Road,
                                                                    Mumbai, 400004,
                                                                    India</span>
                                                                <span class="d-block h6 mt-3 mb-1 fw-500">Email</span>
                                                                <span class="text-body">miracle_clinic@kivicare.com</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mt-sm-0 mt-4">
                                                    <div
                                                        class="form-check form-check-inline m-0 p-0 position-relative d-block box-checked">
                                                        <input type="radio" name="radios" class="form-check-input"
                                                            id="customCheck2">
                                                        <label class="form-check-label d-inline-block w-100"
                                                            for="customCheck2">
                                                            <span class="d-block appointment-clinic-box p-4 text-center">
                                                                <span class="d-block mb-4">
                                                                    <img alt="img"
                                                                        src="{{ asset('website') }}/assets/images/pages/clinic-1.webp"
                                                                        height="80" width="80"
                                                                        class="rounded-circle object-cover">
                                                                </span>
                                                                <span class="d-block h5 mb-2">Valley Clinic</span>
                                                                <span class="text-body">3/e, Naaz Bldg, Lamington
                                                                    Road,
                                                                    Mumbai, 400004,
                                                                    India</span>
                                                                <span class="d-block h6 mt-3 mb-1 fw-500">Email</span>
                                                                <span class="text-body">valley_clinic@yopmail.com</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end px-3 mb-3 mt-3">
                                            <button type="button" name="next"
                                                class="bg-primary iq-button text-capitalize next" value="Next">
                                                <span class="iq-btn-text-holder position-relative">Next</span>
                                                <span class="iq-btn-icon-holder">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                        viewBox="0 0 8 8" fill="none">
                                                        <path
                                                            d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-tab-content h-100 appointment-content-active">
                                    <div class="tab-widget-inner h-100">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap gap-3 py-3 mx-3 border-bottom">
                                            <h5 class="mb-0 flex-shrink-0">Select Doctor</h5>
                                            <div class="d-inline-block">
                                                <div class="form-group input-group mb-0 search-input me-3">
                                                    <input type="text" class="form-control" placeholder="Search...">
                                                    <span class="input-group-text">
                                                        <svg class="icon-20" width="20" height="20"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="11.7669" cy="11.7666" r="8.98856"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                            </circle>
                                                            <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-widget-inner-data pt-5 pb-3 px-3">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div
                                                        class="form-check form-check-inline m-0 p-0 position-relative d-block box-checked">
                                                        <input type="radio" name="radios" class="form-check-input"
                                                            id="customCheck3">
                                                        <label
                                                            class="form-check-label d-inline-block overflow-hidden w-100"
                                                            for="customCheck3">
                                                            <span
                                                                class="d-block appointment-doctor-box p-4 text-center position-relative">
                                                                <span
                                                                    class="d-block bg-light py-5 position-absolute top-0 start-0 end-0">
                                                                    <span class="py-1"></span>
                                                                </span>
                                                                <span class="d-block mb-3 position-relative">
                                                                    <img alt="img"
                                                                        src="{{ asset('website') }}/assets/images/general/dralexandrajohnson.webp"
                                                                        height="80" width="80"
                                                                        class="rounded-circle object-cover p-1 bg-white">
                                                                </span>
                                                                <span class="d-block h5 mb-2">Alexandra Johnson</span>
                                                                <span
                                                                    class="d-flex align-items-center gap-1 justify-content-between">
                                                                    <span class="border d-inline-block w-25"></span>
                                                                    <span
                                                                        class="bg-secondary px-3 py-2 rounded-pill text-white">Exp:
                                                                        2yr</span>
                                                                    <span class="border d-inline-block w-25"></span>
                                                                </span>
                                                                <span class="d-block h6 mt-3 mb-1 fw-500">Email</span>
                                                                <span
                                                                    class="text-body">alexandra_johnson@kivicare.com</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mt-sm-0 mt-4">
                                                    <div
                                                        class="form-check form-check-inline m-0 p-0 position-relative d-block box-checked">
                                                        <input type="radio" name="radios" class="form-check-input"
                                                            id="customCheck4">
                                                        <label
                                                            class="form-check-label d-inline-block overflow-hidden w-100"
                                                            for="customCheck4">
                                                            <span
                                                                class="d-block appointment-doctor-box p-4 text-center position-relative">
                                                                <span
                                                                    class="d-block bg-light py-5 position-absolute top-0 start-0 end-0">
                                                                    <span class="py-1"></span>
                                                                </span>
                                                                <span class="d-block mb-3 position-relative">
                                                                    <img alt="img"
                                                                        src="{{ asset('website') }}/assets/images/general/dr-emily-thompson.webp"
                                                                        height="80" width="80"
                                                                        class="rounded-circle object-cover p-1 bg-white">
                                                                </span>
                                                                <span class="d-block h5 mb-2">Emily Thompson</span>
                                                                <span
                                                                    class="d-flex align-items-center gap-1 justify-content-between">
                                                                    <span class="border d-inline-block w-25"></span>
                                                                    <span
                                                                        class="bg-secondary px-3 py-2 rounded-pill text-white">Exp
                                                                        : 2yr</span>
                                                                    <span class="border d-inline-block w-25"></span>
                                                                </span>
                                                                <span class="d-block h6 mt-3 mb-1 fw-500">Email</span>
                                                                <span class="text-body">emily_thompson@kivicare.com</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end px-3 mb-3 mt-3 gap-3">
                                            <button type="button" name="Previous" class="iq-button text-capitalize back"
                                                value="Previous">
                                                <span class="iq-btn-text-holder position-relative">Previous</span>
                                                <span class="iq-btn-icon-holder">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                        viewBox="0 0 8 8" fill="none">
                                                        <path
                                                            d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            <button type="button" name="next"
                                                class="bg-primary iq-button text-capitalize next" value="Next">
                                                <span class="iq-btn-text-holder position-relative">Next</span>
                                                <span class="iq-btn-icon-holder">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                        viewBox="0 0 8 8" fill="none">
                                                        <path
                                                            d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-tab-content h-100 appointment-content-active">
                                    <div class="tab-widget-inner h-100">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap gap-3 py-3 mx-3 border-bottom">
                                            <h5 class="mb-0 flex-shrink-0">Select Service</h5>
                                            <div class="d-inline-block">
                                                <div class="form-group input-group mb-0 search-input me-3">
                                                    <input type="text" class="form-control" placeholder="Search...">
                                                    <span class="input-group-text">
                                                        <svg class="icon-20" width="20" height="20"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="11.7669" cy="11.7666" r="8.98856"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                            </circle>
                                                            <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-widget-inner-data pt-5 pb-3 px-3">
                                            <h5 class="mb-3 text-secondary">Other</h5>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div
                                                        class="form-check form-check-inline m-0 p-0 position-relative d-block box-checked">
                                                        <input type="radio" name="radios" class="form-check-input"
                                                            id="customCheck5">
                                                        <label
                                                            class="form-check-label d-inline-block overflow-hidden w-100"
                                                            for="customCheck5">
                                                            <span class="d-block p-4 text-center position-relative">
                                                                <span class="d-block mb-3 position-relative">
                                                                    <img alt="img"
                                                                        src="{{ asset('website') }}/assets/images/general/doctor-home-visit.png"
                                                                        height="70" width="70"
                                                                        class="object-cover">
                                                                </span>
                                                                <span class="d-block h6 fw-500 mt-3 mb-1">Home Visit</span>
                                                                <span class="text-body">$500/-</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="my-3 text-secondary">General Dentistry</h5>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div
                                                        class="form-check form-check-inline m-0 p-0 position-relative d-block box-checked">
                                                        <input type="radio" name="radios" class="form-check-input"
                                                            id="customCheck6">
                                                        <label
                                                            class="form-check-label d-inline-block overflow-hidden w-100"
                                                            for="customCheck6">
                                                            <span class="d-block p-4 text-center position-relative">
                                                                <span class="d-block mb-3 position-relative">
                                                                    <img alt="img"
                                                                        src="{{ asset('website') }}/assets/images/general/extraction.webp"
                                                                        height="70" width="70"
                                                                        class="rounded-circle object-cover">
                                                                </span>
                                                                <span
                                                                    class="d-block h6 fw-500 mt-3 mb-1">Extractions</span>
                                                                <span class="text-body">$100/-</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-sm-0 mt-4">
                                                    <div
                                                        class="form-check form-check-inline m-0 p-0 position-relative d-block box-checked">
                                                        <input type="radio" name="radios" class="form-check-input"
                                                            id="customCheck7">
                                                        <label
                                                            class="form-check-label d-inline-block overflow-hidden w-100"
                                                            for="customCheck7">
                                                            <span class="d-block p-4 text-center position-relative">
                                                                <span class="d-block mb-3 position-relative">
                                                                    <img alt="img"
                                                                        src="{{ asset('website') }}/assets/images/general/teeth-cleaning.webp"
                                                                        height="70" width="70"
                                                                        class="rounded-circle object-cover">
                                                                </span>
                                                                <span class="d-block h6 fw-500 mt-3 mb-1">Teeth
                                                                    Cleaning</span>
                                                                <span class="text-body">$150/-</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 mt-sm-0 mt-4">
                                                    <div
                                                        class="form-check form-check-inline m-0 p-0 position-relative d-block box-checked">
                                                        <input type="radio" name="radios" class="form-check-input"
                                                            id="customCheck8">
                                                        <label
                                                            class="form-check-label d-inline-block overflow-hidden w-100"
                                                            for="customCheck8">
                                                            <span class="d-block p-4 text-center position-relative">
                                                                <span class="d-block mb-3 position-relative">
                                                                    <img alt="img"
                                                                        src="{{ asset('website') }}/assets/images/general/root-canel.webp"
                                                                        height="70" width="70"
                                                                        class="rounded-circle object-cover">
                                                                </span>
                                                                <span class="d-block h6 fw-500 mt-3 mb-1">Root Canal</span>
                                                                <span class="text-body">$100/-</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end px-3 mb-3 mt-3 gap-3">
                                            <button type="button" name="Previous" class="iq-button text-capitalize back"
                                                value="Previous">
                                                <span class="iq-btn-text-holder position-relative">Previous</span>
                                                <span class="iq-btn-icon-holder">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                        viewBox="0 0 8 8" fill="none">
                                                        <path
                                                            d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            <button type="button" name="next"
                                                class="bg-primary iq-button text-capitalize next" value="Next">
                                                <span class="iq-btn-text-holder position-relative">Next</span>
                                                <span class="iq-btn-icon-holder">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                        viewBox="0 0 8 8" fill="none">
                                                        <path
                                                            d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-tab-content h-100 appointment-content-active">
                                    <div class="tab-widget-inner h-100">
                                        <div class="py-5 mx-3 border-bottom">
                                            <h5 class="mb-0">Select Date and Time</h5>
                                        </div>
                                        <div class="tab-widget-inner-data pt-5 pb-3 px-3">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-0">
                                                        <input type="hidden" name="inline"
                                                            class="d-none inline_flatpickr">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mt-sm-0 mt-4">
                                                    <div class="p-3 bg-primary-subtle">
                                                        <div class="row gx-3">
                                                            <div class="col-md-4 col-sm-6">
                                                                <button
                                                                    class="btn bg-white text-body text-uppercase p-2 w-100">09:30am</button>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 mt-sm-0 mt-3">
                                                                <button
                                                                    class="btn bg-white text-body text-uppercase p-2 w-100">10:00am</button>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 mt-md-0 mt-3">
                                                                <button
                                                                    class="btn bg-white text-body text-uppercase p-2 w-100">10:30am</button>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 mt-3">
                                                                <button
                                                                    class="btn bg-white text-body text-uppercase p-2 w-100">11:00am</button>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 mt-3">
                                                                <button
                                                                    class="btn bg-white text-body text-uppercase p-2 w-100">11:30am</button>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 mt-3">
                                                                <button
                                                                    class="btn bg-white text-body text-uppercase p-2 w-100">12:00pm</button>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 mt-3">
                                                                <button
                                                                    class="btn bg-white text-body text-uppercase p-2 w-100">12:30pm</button>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 mt-3">
                                                                <button
                                                                    class="btn bg-white text-body text-uppercase p-2 w-100">01:00pm</button>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 mt-3">
                                                                <button
                                                                    class="btn bg-white text-body text-uppercase p-2 w-100">01:30pm</button>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 mt-3">
                                                                <button
                                                                    class="btn bg-white text-body text-uppercase p-2 w-100">02:00pm</button>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 mt-3">
                                                                <button
                                                                    class="btn bg-white text-body text-uppercase p-2 w-100">02:30pm</button>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 mt-3">
                                                                <button
                                                                    class="btn bg-white text-body text-uppercase p-2 w-100">03:00pm</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end px-3 mb-3 mt-3 gap-3">
                                            <button type="button" name="Previous" class="iq-button text-capitalize back"
                                                value="Previous">
                                                <span class="iq-btn-text-holder position-relative">Previous</span>
                                                <span class="iq-btn-icon-holder">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                        viewBox="0 0 8 8" fill="none">
                                                        <path
                                                            d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            <button type="button" name="next"
                                                class="bg-primary iq-button text-capitalize next" value="Next">
                                                <span class="iq-btn-text-holder position-relative">Next</span>
                                                <span class="iq-btn-icon-holder">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                        viewBox="0 0 8 8" fill="none">
                                                        <path
                                                            d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-tab-content h-100 appointment-content-active">
                                    <div class="tab-widget-inner h-100">
                                        <div class="py-3 mx-3 border-bottom">
                                            <h5 class="mb-0">More About Appointment</h5>
                                        </div>
                                        <div class="tab-widget-inner-data pt-5 pb-3 px-3">
                                            <form>
                                                <label class="form-label h6">Appointment Descriptions</label>
                                                <textarea class="form-control" required=""></textarea>
                                                <label class="form-label h6 mt-5">Add Medical Report</label>
                                                <input type="file" class="form-control" required="">
                                            </form>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end px-3 mb-3 mt-3 gap-3">
                                            <button type="button" name="Previous" class="iq-button text-capitalize back"
                                                value="Previous">
                                                <span class="iq-btn-text-holder position-relative">Previous</span>
                                                <span class="iq-btn-icon-holder">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                        viewBox="0 0 8 8" fill="none">
                                                        <path
                                                            d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            <button type="button" name="next"
                                                class="bg-primary iq-button text-capitalize next" value="Next">
                                                <span class="iq-btn-text-holder position-relative">Next</span>
                                                <span class="iq-btn-icon-holder">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                        viewBox="0 0 8 8" fill="none">
                                                        <path
                                                            d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-tab-content h-100 appointment-content-active">
                                    <div class="tab-widget-inner h-100">
                                        <div class="py-3 mx-3 border-bottom">
                                            <h5 class="mb-0">Enter Details</h5>
                                        </div>
                                        <div class="tab-widget-inner-data pt-5 pb-3 px-3">
                                            <div class="row h-100">
                                                <div class="col-12">
                                                    <ul class="nav nav-tabs mb-0" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link active" data-bs-toggle="tab"
                                                                data-bs-target="#register" type="button" role="tab"
                                                                aria-controls="register"
                                                                aria-selected="true">Register</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" data-bs-toggle="tab"
                                                                data-bs-target="#login" type="button" role="tab"
                                                                aria-controls="login" aria-selected="false">Login</button>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content h-100">
                                                        <div class="tab-pane fade show active h-100" id="register"
                                                            role="tabpanel" aria-labelledby="register">
                                                            <div class="py-5 px-4 bg-primary-subtle h-100">
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <label class="form-label h6">First Name
                                                                                *</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Enter Your First Name"
                                                                                required="">
                                                                        </div>
                                                                        <div class="col-sm-6 mt-sm-0 mt-3">
                                                                            <label class="form-label h6">Last Name
                                                                                *</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Enter Your Last Name"
                                                                                required="">
                                                                        </div>
                                                                        <div class="col-sm-6 mt-3">
                                                                            <label class="form-label h6">Email *</label>
                                                                            <input type="email" class="form-control"
                                                                                placeholder="Enter Your Email"
                                                                                required="">
                                                                        </div>
                                                                        <div class="col-sm-6 mt-3">
                                                                            <label class="form-label h6">Contact *</label>
                                                                            <div class="row g-2">
                                                                                <div class="col-4">
                                                                                    <select
                                                                                        class="select2-basic-single js-states"
                                                                                        aria-label=".form-select-lg example">
                                                                                        <option selected="">+44 United
                                                                                            Kingdom </option>
                                                                                        <option value="1">+91 India
                                                                                        </option>
                                                                                        <option value="2">+1 United
                                                                                            States </option>
                                                                                        <option value="3">+84 Vietnam
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-8">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="Enter Your Number"
                                                                                        required="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 mt-3">
                                                                            <label class="form-label h6">Gender *</label>
                                                                            <div
                                                                                class="d-flex align-items-center flex-wrap gap-3">
                                                                                <div class="form-check">
                                                                                    <input type="radio" name="radios"
                                                                                        class="form-check-input"
                                                                                        id="male">
                                                                                    <label class="form-check-label h6"
                                                                                        for="male">Male</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input type="radio" name="radios"
                                                                                        class="form-check-input"
                                                                                        id="female">
                                                                                    <label class="form-check-label h6"
                                                                                        for="female">Female</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input type="radio" name="radios"
                                                                                        class="form-check-input"
                                                                                        id="other">
                                                                                    <label class="form-check-label h6"
                                                                                        for="other">Other</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade h-100" id="login" role="tabpanel"
                                                            aria-labelledby="login">
                                                            <div class="py-5 px-4 bg-primary-subtle h-100">
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <label class="form-label h6">Username or Email
                                                                                *</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Enter Your Username or Email"
                                                                                required="">
                                                                        </div>
                                                                        <div class="col-sm-6 mt-sm-0 mt-3">
                                                                            <label class="form-label h6">Password *</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="************" required="">
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end px-3 mb-3 mt-3 gap-3">
                                            <button type="button" name="Previous" class="iq-button text-capitalize back"
                                                value="Previous">
                                                <span class="iq-btn-text-holder position-relative">Previous</span>
                                                <span class="iq-btn-icon-holder">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                        viewBox="0 0 8 8" fill="none">
                                                        <path
                                                            d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            <button type="button" name="next"
                                                class="bg-primary iq-button text-capitalize next" value="Next">
                                                <span class="iq-btn-text-holder position-relative">Next</span>
                                                <span class="iq-btn-icon-holder">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                        viewBox="0 0 8 8" fill="none">
                                                        <path
                                                            d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-tab-content h-100 appointment-content-active">
                                    <div class="tab-widget-inner h-100">
                                        <div class="py-3 mx-3 border-bottom">
                                            <h5 class="mb-0">Confirmation Detail</h5>
                                        </div>
                                        <div class="tab-widget-inner-data pt-5 pb-3 px-3">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h6 class="text-secondary mb-3 fw-500 text-uppercase">Clinic Info</h6>
                                                    <div class="p-4 bg-primary-subtle">
                                                        <h6 class="mb-2">Valley Clinic</h6>
                                                        <p class="m-0 text-body">3/e, Naaz Bldg, Lamington Road, Mumbai,
                                                            400004, India
                                                        </p>
                                                    </div>
                                                    <h6 class="text-secondary mt-5 mb-3 fw-500 text-uppercase">Patient Info
                                                    </h6>
                                                    <div class="p-4 bg-primary-subtle">
                                                        <div class="table-responsive">
                                                            <table class="table mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="p-0 border-0">
                                                                            <h6 class="mb-2">Name:</h6>
                                                                        </td>
                                                                        <td class="p-0 border-0">
                                                                            <p class="mb-2 text-end">John Deo</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="p-0 border-0">
                                                                            <h6 class="mb-2">Number:</h6>
                                                                        </td>
                                                                        <td class="p-0 border-0">
                                                                            <p class="mb-2 text-end">+91 123456789</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="p-0 border-0">
                                                                            <h6 class="mb-0">Email:</h6>
                                                                        </td>
                                                                        <td class="p-0 border-0">
                                                                            <p class="mb-0 text-end">johndeo@gmail.com</p>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mt-sm-0 mt-5">
                                                    <h6 class="text-secondary mb-3 fw-500 text-uppercase">Appointment
                                                        Summary </h6>
                                                    <div class="p-4 border">
                                                        <div class="table-responsive">
                                                            <table class="table mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="p-0 border-0">
                                                                            <p class="mb-2">Doctor:</p>
                                                                        </td>
                                                                        <td class="p-0 border-0">
                                                                            <h6 class="mb-2 text-end">Emily Thompson</h6>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="p-0 border-0">
                                                                            <p class="mb-2">Date:</p>
                                                                        </td>
                                                                        <td class="p-0 border-0">
                                                                            <h6 class="mb-2 text-end">July 1, 2023</h6>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="p-0 border-0">
                                                                            <p class="mb-0">Time:</p>
                                                                        </td>
                                                                        <td class="p-0 border-0">
                                                                            <h6 class="mb-0 text-end">02:30 PM</h6>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="p-4 bg-primary-subtle mt-4">
                                                            <h6 class="mb-2">Services</h6>
                                                            <div
                                                                class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                                                <p class="m-0 text-body">Home Visit</p>
                                                                <h6 class="m-0">$500/-</h6>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between flex-wrap gap-3 mt-4">
                                                            <h5 class="m-0">Total Price</h5>
                                                            <p class="m-0 text-primary">$500/-</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end px-3 mb-3 mt-3 gap-3">
                                            <button type="button" name="Previous" class="iq-button text-capitalize back"
                                                value="Previous">
                                                <span class="iq-btn-text-holder position-relative">Previous</span>
                                                <span class="iq-btn-icon-holder">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                        viewBox="0 0 8 8" fill="none">
                                                        <path
                                                            d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            <button type="button" name="next"
                                                class="bg-primary iq-button text-capitalize next" value="Next">
                                                <span class="iq-btn-text-holder position-relative">Next</span>
                                                <span class="iq-btn-icon-holder">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                        viewBox="0 0 8 8" fill="none">
                                                        <path
                                                            d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-tab-content h-100 appointment-content-active">
                                    <div class="tab-widget-inner h-100">
                                        <div class="py-3 mx-3 border-bottom">
                                            <h5 class="mb-0">Payment Selection</h5>
                                        </div>
                                        <div class="tab-widget-inner-data pt-5 pb-3 px-3">
                                            <div class="row h-100">
                                                <div class="col-sm-6">
                                                    <h6 class="text-secondary mb-3 fw-500 text-uppercase">Select Payment
                                                    </h6>
                                                    <div class="p-4 bg-primary-subtle">
                                                        <div class="mb-3">
                                                            <div
                                                                class="form-check form-check-inline m-0 p-0 position-relative d-block box-checked">
                                                                <input type="radio" name="radios"
                                                                    class="form-check-input" id="customCheck9">
                                                                <label
                                                                    class="form-check-label d-flex align-items-center justify-content-between bg-white w-100 px-5 py-3"
                                                                    for="customCheck9">
                                                                    <img src="{{ asset('website') }}/assets/images/general/payment-offline.png"
                                                                        alt="image">
                                                                    <span class="text-body">Pay Later</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div
                                                                class="form-check form-check-inline m-0 p-0 position-relative d-block box-checked">
                                                                <input type="radio" name="radios"
                                                                    class="form-check-input" id="customCheck10">
                                                                <label
                                                                    class="form-check-label d-flex align-items-center justify-content-between bg-white w-100 px-5 py-3"
                                                                    for="customCheck10">
                                                                    <img src="{{ asset('website') }}/assets/images/general/payment-woocommerce.png"
                                                                        alt="image">
                                                                    <span class="text-body">Woocommerce</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div
                                                                class="form-check form-check-inline m-0 p-0 position-relative d-block box-checked">
                                                                <input type="radio" name="radios"
                                                                    class="form-check-input" id="customCheck11">
                                                                <label
                                                                    class="form-check-label d-flex align-items-center justify-content-between bg-white w-100 px-5 py-3"
                                                                    for="customCheck11">
                                                                    <img src="{{ asset('website') }}/assets/images/general/payment-paypal.png"
                                                                        alt="image">
                                                                    <span class="text-body">Paypal</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mt-sm-0 mt-5">
                                                    <h6 class="text-secondary mb-3 fw-500 text-uppercase">Appointment
                                                        Summary
                                                    </h6>
                                                    <div class="p-4 border">
                                                        <div class="table-responsive">
                                                            <table class="table mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="p-0 border-0">
                                                                            <p class="mb-2">Doctor:</p>
                                                                        </td>
                                                                        <td class="p-0 border-0">
                                                                            <h6 class="mb-2 text-end">Emily Thompson</h6>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="p-0 border-0">
                                                                            <p class="mb-2">Date:</p>
                                                                        </td>
                                                                        <td class="p-0 border-0">
                                                                            <h6 class="mb-2 text-end">July 1, 2023</h6>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="p-0 border-0">
                                                                            <p class="mb-0">Time:</p>
                                                                        </td>
                                                                        <td class="p-0 border-0">
                                                                            <h6 class="mb-0 text-end">02:30 PM</h6>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="p-4 bg-primary-subtle mt-4">
                                                            <h6 class="mb-2">Services</h6>
                                                            <div
                                                                class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                                                <p class="m-0 text-body">Home Visit</p>
                                                                <h6 class="m-0">$500/-</h6>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between flex-wrap gap-3 mt-4">
                                                            <h5 class="m-0">Total Price</h5>
                                                            <p class="m-0 text-primary">$500/-</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-end px-3 mb-3 mt-3 gap-3">
                                            <button type="button" name="Previous" class="iq-button text-capitalize back"
                                                value="Previous">
                                                <span class="iq-btn-text-holder position-relative">Previous</span>
                                                <span class="iq-btn-icon-holder">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                        viewBox="0 0 8 8" fill="none">
                                                        <path
                                                            d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            <button type="button" name="next"
                                                class="bg-primary iq-button text-capitalize confirm-button"
                                                value="Next">
                                                <span class="iq-btn-text-holder position-relative">Confirm</span>
                                                <span class="iq-btn-icon-holder">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                        viewBox="0 0 8 8" fill="none">
                                                        <path
                                                            d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-tab-content h-100 appointment-content-active">
                                    <div class="tab-widget-inner h-100">
                                        <div
                                            class="tab-widget-inner-data py-5 px-3 h-100 d-flex align-items-center justify-content-center">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="text-center">
                                                        <div class="mb-5 text-success">
                                                            <svg class="checkmark-animated"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"
                                                                data-v-6b4a22d6="">
                                                                <circle class="checkmark__circle" cx="26"
                                                                    cy="26" r="25" fill="none"
                                                                    data-v-6b4a22d6=""></circle>
                                                                <path class="checkmark__check" fill="none"
                                                                    d="M14.1 27.2l7.1 7.2 16.7-16.8" data-v-6b4a22d6="">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <h4>Your Appointment is Booked Sucessfully!</h4>
                                                        <p>Please check your email for verification</p>
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center justify-content-center gap-3 flex-wrap mt-5">
                                                        <a href="./appointment.html"
                                                            class="bg-primary iq-button text-capitalize">
                                                            <span class="iq-btn-text-holder position-relative">Book More
                                                                Appointments</span>
                                                            <span class="iq-btn-icon-holder">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="8"
                                                                    height="8" viewBox="0 0 8 8" fill="none">
                                                                    <path
                                                                        d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a href="javascript:void(0);" class="iq-button text-capitalize">
                                                            <span class="iq-btn-text-holder position-relative">Print
                                                                Detail</span>
                                                            <span class="iq-btn-icon-holder">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="8"
                                                                    height="8" viewBox="0 0 8 8" fill="none">
                                                                    <path
                                                                        d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a href="javascript:void(0);"
                                                            class="bg-primary iq-button text-capitalize">
                                                            <span class="iq-btn-text-holder position-relative">Add To
                                                                Calendar</span>
                                                            <span class="iq-btn-icon-holder">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="8"
                                                                    height="8" viewBox="0 0 8 8" fill="none">
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
            <div class="col-xl-2 col-lg-1 d-none d-lg-block"></div>
        </div>
    </div>

 @endsection
