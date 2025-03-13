    @extends('website.layout.master')
    @section('title', __('navbar.Contact_Us'))
    @section('content')


        </div> <!--bread-crumb-->
        <div class="iq-breadcrumb bg-primary-subtle">
            <div class="container">
                <nav aria-label="breadcrumb" class="text-center">
                    <h2 class="title">{{ __('navbar.Contact_Us') }}</h2>
                    <ol class="breadcrumb justify-content-center mt-2 mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">{{ __('navbar.home') }}</a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{ __('navbar.Contact_Us') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div> <!--bread-crumb-->

        </div>
        <div class="text-center">
            <div class="container section-padding border-bottom">
                <div class="row">
                    <div class="col-md-4">
                        <i class="fas fa-map-marker-alt text-secondary font-size-60 mb-5"></i>
                        <div class="iq-title-box mb-0">
                            <span class="iq-subtitle text-uppercase">LOCATION</span>
                            <h5 class="iq-title iq-heading-title mt-3">
                                <span class="right-text text-capitalize ">Miami, Florida USA</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4 mt-md-0 mt-5">
                        <i class="far fa-envelope text-secondary font-size-60 mb-5"></i>
                        <div class="iq-title-box mb-0">
                            <span class="iq-subtitle text-uppercase">EMAIL</span>
                            <h5 class="iq-title iq-heading-title mt-3">
                                <span class="right-text text-capitalize ">Support@Kivitheme.Com</span>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4 mt-md-0 mt-5">
                        <i class="fas fa-phone  text-secondary font-size-60 mb-5"></i>
                        <div class="iq-title-box mb-0">
                            <span class="iq-subtitle text-uppercase">CALL ANYTIME</span>
                            <h5 class="iq-title iq-heading-title mt-3">
                                <span class="right-text text-capitalize ">+1 (111) 234 567</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-padding">
            <div class="container text-center">
                <div class="iq-title-box">
                    <span class="iq-subtitle text-uppercase">JUST A CALL AWAY</span>
                    <h2 class="iq-title iq-heading-title">
                        <span class="right-text text-capitalize fw-500">We'd love to</span>
                        <span class="left-text text-capitalize fw-light">hear from you!</span>
                    </h2>
                    <p class="iq-title-desc text-body mt-3 mb-0">
                        We are here and always ready to help you. Let us know how we serve
                        you and we’ll get back within no time.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-2 d-lg-block d-none"></div>
                    <div class="col-lg-8">
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="custom-form-field">
                                        <input type="text" name="your-name" placeholder="Your Name"
                                            class="form-control mb-5" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="custom-form-field">
                                        <input type="text" name="your-subject" placeholder="Last Name"
                                            class="form-control mb-5" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="custom-form-field">
                                        <input type="tel" name="tel-478" minlength="10" maxlength="140"
                                            placeholder="Phone Number" class="form-control mb-5" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="custom-form-field">
                                        <input type="email" name="your-email" placeholder="Your Email"
                                            class="form-control mb-5" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="custom-form-field">
                                        <textarea name="your-message" placeholder="Your Message" class="form-control mb-5" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-start">
                                    <div class="iq-btn-container">
                                        <button class="iq-button text-capitalize border-0" type="submit">
                                            <span class="iq-btn-text-holder position-relative">send message</span>
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
                        </form>
                    </div>
                    <div class="col-lg-2 d-lg-block d-none"></div>
                </div>
            </div>
        </div>



    @endsection
