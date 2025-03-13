<nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu py-xl-0">
    <div class="container-fluid navbar-inner">
        <div class="d-flex align-items-center justify-content-between w-100 landing-header">
            <div class="d-flex gap-3 gap-xl-0 align-items-center">
                <div>
                    <button data-trigger="navbar_main"
                        class="d-xl-none btn btn-primary rounded-pill p-1 pt-0 toggle-rounded-btn" type="button">
                        <svg width="20px" class="icon-20" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z">
                            </path>
                        </svg>
                    </button>
                </div>
                <a href="{{ asset('website') }}/index.html" class="navbar-brand m-0 d-xl-none">
                    <!--Logo start-->
                    <svg width="30" height="31" viewBox="0 0 30 31" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path class="text-secondary"
                                d="M21.7 6.7499C21.7 5.0798 21.7 3.4097 21.7 1.7396C21.7 1.0769 21.2509 0.5 20.5882 0.5H9.78822C9.12552 0.5 8.50002 1.0769 8.50002 1.7396V8.9H1.63453C0.971826 8.9 0.400024 9.4427 0.400024 10.1054V20.9054C0.400024 21.5681 0.971826 22.1 1.63453 22.1C3.42313 22.0832 5.21172 22.0667 7.00002 22.0499C6.93732 21.1829 6.62923 15.6008 10.9627 11.1077C15.274 6.6374 20.8264 6.722 21.7 6.7499Z"
                                fill="currentColor" />
                            <path class="text-primary"
                                d="M28.5505 8.8999H21.7999H20.8003C14.1731 8.8999 8.80005 14.4217 8.80005 21.0493V29.4493C8.80005 30.112 9.33765 30.4999 10.0007 30.4999H20.6003C21.263 30.4999 21.7003 30.112 21.7003 29.4493V24.4999H28.5508C29.2135 24.4999 29.8003 24.112 29.8003 23.4493V10.2493C29.8 9.5863 29.2132 8.8999 28.5505 8.8999Z"
                                fill="currentColor" />
                            <path class="text-primary-dark" fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.83665 22.0491C8.82797 22.0486 8.81968 22.0482 8.81177 22.0478C8.81177 22.0478 8.81933 22.0361 8.83412 22.0136C8.7745 21.1484 8.5664 16.0579 12.591 12.2322C16.0804 8.91496 20.3292 8.85159 21.5037 8.8915C21.5613 8.8872 21.6181 8.8851 21.6743 8.88526C21.6746 8.88961 21.6749 8.89413 21.6753 8.89882C21.6839 8.89927 21.6922 8.8997 21.7002 8.90012C21.7002 8.90012 21.6926 8.91175 21.6778 8.9343C21.7374 9.79948 21.9455 14.89 17.921 18.7157C14.4317 22.0328 10.183 22.0963 9.00833 22.0564C8.95072 22.0607 8.89382 22.0628 8.83766 22.0626C8.83733 22.0583 8.83699 22.0538 8.83665 22.0491Z"
                                fill="currentColor" />
                        </g>
                    </svg>
                    <!--logo End-->
                    <h4 class="logo-title ms-1"><span>Kivi</span>Care</h4>
                </a>
                <!-- Horizontal Menu Start -->
                <nav id="navbar_main"
                    class="mobile-offcanvas nav navbar navbar-expand-xl hover-nav horizontal-nav mega-menu-content py-xl-0">
                    <div class="container-fluid p-lg-0">
                        <div class="offcanvas-header px-0">
                            <a href="{{ asset('website') }}/index.html" class="navbar-brand m-0">
                                <span class="logo-normal">
                                    <img src="{{ asset('website') }}/assets/images/logo/logo-skyblue.png" alt="logo"
                                        class="img-fluid" loading="lazy">
                                </span>
                            </a>
                            <button class="btn-close float-end px-3"></button>
                        </div>
                        <ul class="navbar-nav iq-nav-menu  list-unstyled" id="header-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('website.index') }}" role="button">
                                    <span class="item-name">{{ __('navbar.home') }}</span>
                                </a>

                            </li>


                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" href="#specializationPages" role="button"
                                    aria-expanded="false" aria-controls="specializationPages">
                                    <span class="item-name">{{ __('navbar.Specialization') }}</span>
                                    <span class="menu-icon">
                                        <svg width="8" height="9" viewBox="0 0 8 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4 0.5C4.27614 0.5 4.5 0.723858 4.5 1V4H7.5C7.77614 4 8 4.22386 8 4.5C8 4.77614 7.77614 5 7.5 5H4.5V8C4.5 8.27614 4.27614 8.5 4 8.5C3.72386 8.5 3.5 8.27614 3.5 8V5H0.5C0.223858 5 0 4.77614 0 4.5C0 4.22386 0.223858 4 0.5 4H3.5V1C3.5 0.723858 3.72386 0.5 4 0.5Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </a>
                                <ul class="sub-nav collapse  list-unstyled" id="specializationPages">
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/oncologist.html">
                                            oncologist
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('website.about') }}" role="button">
                                    <span class="item-name">{{ __('navbar.About_US') }}</span>
                                </a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('website.contact') }}" role="button">
                                    <span class="item-name">{{ __('navbar.Contact_Us') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div> <!-- container-fluid.// -->
                </nav>
                <!-- Sidebar Menu End -->
            </div>
            <div class="right-panel">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-btn">
                        <span class="navbar-toggler-icon"></span>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-center ms-auto mb-2 mb-xl-0">
                        <li class="nav-item dropdown iq-responsive-menu">
                            <a href="#" class="nav-link" id="search-drop" data-bs-toggle="dropdown">
                                <div class="btn-icon btn-sm rounded-pill btn-action">
                                    <span class="btn-inner">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </circle>
                                            <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end p-0" style="width: 20rem;">
                                <li class="p-0">
                                    <div class="form-group input-group mb-0">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-text">
                                            <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="11.7669" cy="11.7666" r="8.98856"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </circle>
                                                <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" id="itemdropdown1">
                            <a class="nav-link d-flex align-items-center" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="btn-icon btn-sm rounded-pill">
                                    <span class="btn-inner">
                                        <svg class="user-icons" xmlns="http://www.w3.org/2000/svg" width="20"
                                            height="21" viewBox="0 0 20 21" fill="none">
                                            <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="3" y="12"
                                                width="14" height="7">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.33203 12.3041H16.5319V18.4491H3.33203V12.3041Z"
                                                    fill="white"></path>
                                            </mask>
                                            <g>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.93286 13.5541C6.38203 13.5541 4.58203 14.1641 4.58203 15.3682C4.58203 16.5832 6.38203 17.1991 9.93286 17.1991C13.4829 17.1991 15.282 16.5891 15.282 15.3849C15.282 14.1699 13.4829 13.5541 9.93286 13.5541ZM9.93286 18.4491C8.30036 18.4491 3.33203 18.4491 3.33203 15.3682C3.33203 12.6216 7.09953 12.3041 9.93286 12.3041C11.5654 12.3041 16.532 12.3041 16.532 15.3849C16.532 18.1316 12.7654 18.4491 9.93286 18.4491Z"
                                                    fill="currentColor"></path>
                                            </g>
                                            <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="5" y="1"
                                                width="10" height="10">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5.50781 1.89075H14.3578V10.7396H5.50781V1.89075Z"
                                                    fill="white"></path>
                                            </mask>
                                            <g>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.93367 3.08038C8.14951 3.08038 6.69784 4.53121 6.69784 6.31538C6.69201 8.09371 8.13284 9.54371 9.9095 9.55038L9.93367 10.1454V9.55038C11.717 9.55038 13.1678 8.09871 13.1678 6.31538C13.1678 4.53121 11.717 3.08038 9.93367 3.08038ZM9.93367 10.7395H9.90701C7.47201 10.732 5.49951 8.74622 5.50784 6.31288C5.50784 3.87538 7.49284 1.89038 9.93367 1.89038C12.3737 1.89038 14.3578 3.87538 14.3578 6.31538C14.3578 8.75538 12.3737 10.7395 9.93367 10.7395Z"
                                                    fill="currentColor"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item border-bottom"
                                        href="{{ asset('website') }}/login.html">Sign
                                        in</a></li>
                                <li><a class="dropdown-item" href="{{ asset('website') }}/registration.html">Sign
                                        up</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" id="lang-drop" data-bs-toggle="dropdown">
                                <div class="btn-icon btn-sm rounded-pill btn-action position-relative">
                                    <span class="btn-inner">
                                        <i class="fas fa-globe"></i>
                                    </span>
                                </div>
                            </a>
                            <div class="p-3 sub-drop dropdown-menu dropdown-menu-end">
                                <div class="m-0 shadow-none card">

                                    Change Language
                                </div>
                                <form action="{{ url('/website/change-language/en') }}" method="GET">
                                    <div data-setting="attribute" class="text-center w-100">
                                        <input type="radio" value="ltr" class="btn-check"
                                            name="theme_scheme_direction" data-prop="dir"
                                            id="theme-scheme-direction-ltr" checked>
                                        <button type="submit" class="btn dir-btn cutomizer-button w-100"
                                            for="theme-scheme-direction-ltr">
                                            <img style="width: 40px;height:40px; margin:5px"
                                                src="{{ asset('website') }}/assets/images/flags/united-states.png"
                                                alt=""> English</button>
                                    </div>
                                </form>

                                <form action="{{ url('/website/change-language/ar') }}" method="GET">
                                    <div data-setting="attribute" class="text-center w-100">
                                        <input type="radio" value="rtl" class="btn-check"
                                            name="theme_scheme_direction" data-prop="dir"
                                            id="theme-scheme-direction-rtl">

                                        <button type="submit" class="btn dir-btn cutomizer-button w-100"
                                            for="theme-scheme-direction-rtl">
                                            <img style="width: 40px;height:40px; margin:5px"
                                                src="{{ asset('website') }}/assets/images/flags/egypt.png"
                                                alt=""> العربية </button>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="button-primary ms-3">
                            <div class="iq-btn-container">
                                <a class="iq-button text-capitalize" href="{{ asset('website') }}/appointment.html">
                                    <span
                                        class="iq-btn-text-holder position-relative">{{ __('navbar.Appointment') }}</span>
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
                        </li>
                        <li class="ms-3">
                            <div class="cursor-pointer" data-bs-toggle="offcanvas"
                                data-bs-target="#right-panel-toggle" aria-controls="right-panel-toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="22"
                                    viewBox="0 0 28 22" fill="none">
                                    <path d="M0 0H24V2H0V0Z" fill="#171C26" />
                                    <path d="M4 10H28V12H4V10Z" fill="#171C26" />
                                    <path d="M0 20H24V22H0V20Z" fill="#171C26" />
                                </svg>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
