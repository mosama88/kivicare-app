<nav class="nav navbar navbar-expand-xl navbar-light iq-navbar">
    <div class="container-fluid navbar-inner">
        <a href="{{ route('dashboard.index') }}" class="navbar-brand">

            <!--Logo start-->
            <div class="logo-main">
                <img class="logo-normal img-fluid" src="{{ asset('dashboard') }}/assets/images/logo.png" height="30"
                    alt="logo">
                <img class="logo-normal dark-normal img-fluid" src="{{ asset('dashboard') }}/assets/images/logo-dark.png"
                    height="30" alt="logo">
                <img class="logo-normal white-normal img-fluid"
                    src="{{ asset('dashboard') }}/assets/images/logo-white.png" height="30" alt="logo">
                <img class="logo-mini img-fluid" src="{{ asset('dashboard') }}/assets/images/logo-mini.png"
                    height="30" alt="logo">
                <img class="logo-mini dark-mini img-fluid"
                    src="{{ asset('dashboard') }}/assets/images/logo-mini-dark.png" height="30" alt="logo">
                <img class="logo-mini white-mini img-fluid"
                    src="{{ asset('dashboard') }}/assets/images/logo-mini-white.png" height="30" alt="logo">
            </div>
            <!--logo End-->
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon d-flex">
                <svg class="icon-20" width="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                </svg>
            </i>
        </div>
        <div class="d-flex align-items-center justify-content-between product-offcanvas">
            <div class="offcanvas offcanvas-end shadow-none iq-product-menu-responsive" tabindex="-1"
                id="offcanvasBottomNav">
                <div class="offcanvas-body">
                    <ul class="iq-nav-menu list-unstyled">
                        <li class="nav-item">
                            <a class="nav-link menu-arrow justify-content-start active" href="./index.html">
                                <span class="nav-text">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-arrow justify-content-start" data-bs-toggle="collapse"
                                href="#allPagesData" role="button" aria-expanded="false" aria-controls="allPagesData">
                                <span class="nav-text">Pages</span>
                            </a>
                            <ul class="iq-header-sub-menu list-unstyled collapse" id="allPagesData">
                                <li class="nav-item">
                                    <a class="nav-link" href="./component.html">Components</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./ui-color.html">UI Color</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#authSkins"
                                        role="button" aria-expanded="false">
                                        Auth skins
                                        <i class="right-icon">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </i>
                                    </a>
                                    <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                        id="defaultAuth">
                                        <li class="nav-item"><a class="nav-link " href="./auth/sign-in.html">Sign In</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link " href="./auth/sign-up.html">Sign Up</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link " href="./auth/confirm-mail.html">Email
                                                Verified</a></li>
                                        <li class="nav-item"><a class="nav-link " href="./auth/recoverpw.html">Reset
                                                Password</a></li>
                                        <li class="nav-item"><a class="nav-link " href="./auth/lock-screen.html">Lock
                                                Screen</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#userApps"
                                        role="button" aria-expanded="false" aria-controls="userApps">
                                        User
                                        <i class="right-icon">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </i>
                                    </a>
                                    <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                        id="userApps">
                                        <li class="nav-item"><a class="nav-link " href="./app/user-profile.html">User
                                                Profile</a></li>
                                        <li class="nav-item"><a class="nav-link " href="./app/user-add.html">User
                                                Add</a></li>
                                        <li class="nav-item"><a class="nav-link " href="./app/user-list.html">User
                                                List</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#utilities"
                                        role="button" aria-expanded="false" aria-controls="utilities">
                                        Utilities
                                        <i class="right-icon">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </i>
                                    </a>
                                    <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                        id="utilities">
                                        <li class="nav-item"><a class="nav-link "
                                                href="./errors/maintenance.html">Maintenance</a></li>
                                        <li class="nav-item"><a class="nav-link "
                                                href="./errors/error404.html">404</a></li>
                                        <li class="nav-item"><a class="nav-link "
                                                href="./errors/error500.html">500</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#widgetsPage"
                                        role="button" aria-expanded="false" aria-controls="widgetsPage">
                                        Widgets
                                        <i class="right-icon">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </i>
                                    </a>
                                    <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                        id="widgetsPage">
                                        <li class="nav-item"><a class="nav-link "
                                                href="./widget/widgetbasic.html">Widget Basic</a></li>
                                        <li class="nav-item"><a class="nav-link "
                                                href="./widget/widgetchart.html">Widget Chart</a></li>
                                        <li class="nav-item"><a class="nav-link "
                                                href="./widget/widgetcard.html">Widget Card</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#mapPages"
                                        role="button" aria-expanded="false" aria-controls="mapPages">
                                        Map
                                        <i class="right-icon">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </i>
                                    </a>
                                    <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                        id="mapPages">
                                        <li class="nav-item"><a class="nav-link "
                                                href="./maps/google.html">Google</a></li>
                                        <li class="nav-item"><a class="nav-link "
                                                href="./maps/vector.html">Vector</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#formsPages"
                                        role="button" aria-expanded="false" aria-controls="formsPages">
                                        Form
                                        <i class="right-icon">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </i>
                                    </a>
                                    <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                        id="formsPages">
                                        <li class="nav-item"><a class="nav-link "
                                                href="./form/form-element.html">Element</a></li>

                                        <li class="nav-item"><a class="nav-link "
                                                href="./form/form-validation.html">Validation</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#tablesPages"
                                        role="button" aria-expanded="false" aria-controls="tablesPages">
                                        Table
                                        <i class="right-icon">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </i>
                                    </a>
                                    <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                        id="tablesPages">
                                        <li class="nav-item"><a class="nav-link "
                                                href="./table/bootstrap-table.html">Bootstrap Table</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link " href="./table/table-data.html">Data
                                                Table</a></li>
                                        <li class="nav-item"><a class="nav-link "
                                                href="./table/border-table.html">Bordered Table</a></li>
                                        <li class="nav-item"><a class="nav-link "
                                                href="./table/fancy-table.html">Fancy Table</a></li>
                                        <li class="nav-item"><a class="nav-link "
                                                href="./table/fixed-table.html">Fixed Table</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#iconsPages"
                                        role="button" aria-expanded="false" aria-controls="iconsPages">
                                        Icons
                                        <i class="right-icon">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </i>
                                    </a>
                                    <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse"
                                        id="iconsPages">
                                        <li class="nav-item"><a class="nav-link " href="./icons/solid.html">Solid</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link "
                                                href="./icons/outline.html">Outlined</a></li>
                                        <li class="nav-item"><a class="nav-link " href="./icons/dual-tone.html">Dual
                                                Tone</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-arrow justify-content-start " href="./setting.html">
                                <span class="nav-text">Setting </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <button id="navbar-toggle" class="navbar-toggler px-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-btn">
                    <span class="navbar-toggler-icon"></span>
                </span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
                <li class="nav-item dropdown me-0 me-xl-3">
                    <div class="d-flex align-items-center mr-2 iq-font-style" role="group" aria-label="First group"
                        data-setting="radio">
                        <input type="radio" class="btn-check" name="theme_font_size" value="theme-fs-sm"
                            id="font-size-sm">
                        <label for="font-size-sm" class="btn btn-border border-0 btn-icon btn-sm"
                            data-bs-toggle="tooltip" title="Font size 14px" data-bs-placement="bottom">
                            <span class="mb-0 h6" style="color: inherit !important;">A</span>
                        </label>
                        <input type="radio" class="btn-check" name="theme_font_size" value="theme-fs-md"
                            id="font-size-md">
                        <label for="font-size-md" class="btn btn-border border-0 btn-icon" data-bs-toggle="tooltip"
                            title="Font size 16px" data-bs-placement="bottom">
                            <span class="mb-0 h4" style="color: inherit !important;">A</span>
                        </label>
                        <input type="radio" class="btn-check" name="theme_font_size" value="theme-fs-lg"
                            id="font-size-lg">
                        <label for="font-size-lg" class="btn btn-border border-0 btn-icon" data-bs-toggle="tooltip"
                            title="Font size 18px" data-bs-placement="bottom">
                            <span class="mb-0 h1" style="color: inherit !important;">A</span>
                        </label>
                    </div>
                </li>
                <li class="nav-item dropdown pe-3 d-none d-xl-block">
                    <div class="form-group input-group mb-0 search-input">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-text">
                            <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                                <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </span>
                    </div>
                </li>
                <li class="nav-item dropdown iq-responsive-menu d-block d-xl-none">
                    <div class="btn btn-sm px-0 border-0" id="navbarDropdown-search-11" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </circle>
                            <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </div>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown-search-11"
                        style="width: 25rem;">
                        <li class="px-3 py-0">
                            <div class="form-group input-group mb-0">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-text">
                                    <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        </circle>
                                        <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="notification-drop" data-bs-toggle="dropdown">
                        <div class="nav-list-icon">
                            <div class="btn-inner">
                                <svg class="icon-20" width="19" height="22" viewBox="0 0 19 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                                        width="19" height="18">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.15527e-05 0H18.497V17.348H9.15527e-05V0Z" fill="white" />
                                    </mask>
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M9.2471 1.5C5.75211 1.5 3.3161 4.238 3.3161 6.695C3.3161 8.774 2.7391 9.735 2.2291 10.583C1.8201 11.264 1.4971 11.802 1.4971 12.971C1.6641 14.857 2.90911 15.848 9.2471 15.848C15.5501 15.848 16.8341 14.813 17.0001 12.906C16.9971 11.802 16.6741 11.264 16.2651 10.583C15.7551 9.735 15.1781 8.774 15.1781 6.695C15.1781 4.238 12.7421 1.5 9.2471 1.5ZM9.2471 17.348C4.5711 17.348 0.345105 17.018 0.000104907 13.035C-0.00289509 11.387 0.500105 10.549 0.944105 9.811C1.3931 9.063 1.8161 8.358 1.8161 6.695C1.8161 3.462 4.8021 0 9.2471 0C13.6921 0 16.6781 3.462 16.6781 6.695C16.6781 8.358 17.1011 9.063 17.5501 9.811C17.9941 10.549 18.4971 11.387 18.4971 12.971C18.1481 17.018 13.9231 17.348 9.2471 17.348Z"
                                            fill="currentColor" />
                                    </g>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.1983 21.5001H9.1963C8.0753 21.4991 7.0143 21.0051 6.2093 20.1081C5.9323 19.8011 5.9573 19.3261 6.2653 19.0501C6.5733 18.7721 7.0473 18.7971 7.3243 19.1061C7.8423 19.6831 8.5073 20.0001 9.1973 20.0001H9.1983C9.8913 20.0001 10.5593 19.6831 11.0783 19.1051C11.3563 18.7981 11.8303 18.7731 12.1373 19.0501C12.4453 19.3271 12.4703 19.8021 12.1933 20.1091C11.3853 21.0061 10.3223 21.5001 9.1983 21.5001Z"
                                        fill="currentColor" />
                                </svg>
                                <span class="bg-danger dots"></span>
                            </div>
                        </div>
                    </a>
                    <div class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="notification-drop">
                        <div class="m-0 shadow-none card">
                            <div class="py-3 card-header d-flex justify-content-between bg-primary mb-0">
                                <div class="header-title">
                                    <h5 class="mb-0 text-white">All Notifications</h5>
                                </div>
                            </div>
                            <div class="p-0 card-body">
                                <a href="#" class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                        <img class="p-1 avatar-40 rounded-pill bg-primary-subtle"
                                            src="{{ asset('dashboard') }}/assets/images/shapes/01.png"
                                            loading="lazy" />
                                        <div class="ms-3 flex-grow-1 text-start">
                                            <h6 class="mb-0 ">Emma Watson Bni</h6>
                                            <p class="mb-0">95 MB</p>
                                        </div>
                                        <small class="float-end font-size-12">Just Now</small>
                                    </div>
                                </a>
                                <a href="#" class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                        <img class="p-1 avatar-40 rounded-pill bg-primary-subtle"
                                            src="{{ asset('dashboard') }}/assets/images/shapes/02.png"
                                            loading="lazy" />
                                        <div class="ms-3 flex-grow-1 text-start">
                                            <h6 class="mb-0 ">New customer is join</h6>
                                            <p class="mb-0">Cyst Bni</p>
                                        </div>
                                        <small class="float-end font-size-12">5 days ago</small>
                                    </div>
                                </a>
                                <a href="#" class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                        <img class="p-1 avatar-40 rounded-pill bg-primary-subtle"
                                            src="{{ asset('dashboard') }}/assets/images/shapes/03.png"
                                            loading="lazy" />
                                        <div class="ms-3 flex-grow-1 text-start">
                                            <h6 class="mb-0 ">Two customer is left</h6>
                                            <p class="mb-0">Cyst Bni</p>
                                        </div>
                                        <small class="float-end font-size-12">2 days ago</small>
                                    </div>
                                </a>
                                <a href="#" class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                        <img class="p-1 avatar-40 rounded-pill bg-primary-subtle"
                                            src="{{ asset('dashboard') }}/assets/images/shapes/04.png"
                                            loading="lazy" />
                                        <div class="ms-3 flex-grow-1 text-start">
                                            <h6 class="mb-0 ">New Mail from Fenny</h6>
                                            <p class="mb-0">Cyst Bni</p>
                                        </div>
                                        <small class="float-end font-size-12">3 days ago</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="notification-cart" data-bs-toggle="dropdown">
                        <div class="btn-action position-relative nav-list-icon">
                            <span class="btn-inner">
                                <svg class="cart-icons icon-20" xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="17" viewBox="0 0 18 17" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.27385 4.95616L4.77635 10.9328C4.81302 11.3928 5.18885 11.7378 5.64802 11.7378H5.65135H14.7439H14.7455C15.1797 11.7378 15.5505 11.4145 15.6122 10.9853L16.4039 5.51949C16.4222 5.38949 16.3897 5.25949 16.3105 5.15449C16.2322 5.04866 16.1172 4.98033 15.9872 4.96199C15.813 4.96866 8.58552 4.95866 4.27385 4.95616ZM5.64631 12.9878C4.54881 12.9878 3.61964 12.1311 3.53047 11.0353L2.76714 1.95695L1.51131 1.74028C1.17048 1.68028 0.942975 1.35778 1.00131 1.01695C1.06131 0.676117 1.39047 0.45445 1.72381 0.507784L3.45714 0.807784C3.73631 0.85695 3.94881 1.08862 3.97297 1.37195L4.16881 3.70612C16.0655 3.71112 16.1038 3.71695 16.1613 3.72362C16.6255 3.79112 17.0338 4.03362 17.3121 4.40695C17.5905 4.77945 17.7071 5.23862 17.6405 5.69862L16.8496 11.1636C16.7005 12.2036 15.7971 12.9878 14.7471 12.9878H14.743H5.65297H5.64631Z"
                                        fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13.4077 8.03638H11.0977C10.7518 8.03638 10.4727 7.75638 10.4727 7.41138C10.4727 7.06638 10.7518 6.78638 11.0977 6.78638H13.4077C13.7527 6.78638 14.0327 7.06638 14.0327 7.41138C14.0327 7.75638 13.7527 8.03638 13.4077 8.03638Z"
                                        fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.28815 15.2516C5.53898 15.2516 5.74148 15.4541 5.74148 15.7049C5.74148 15.9558 5.53898 16.1591 5.28815 16.1591C5.03648 16.1591 4.83398 15.9558 4.83398 15.7049C4.83398 15.4541 5.03648 15.2516 5.28815 15.2516Z"
                                        fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.28732 16.784C4.69232 16.784 4.20898 16.2998 4.20898 15.7048C4.20898 15.1098 4.69232 14.6265 5.28732 14.6265C5.88232 14.6265 6.36648 15.1098 6.36648 15.7048C6.36648 16.2998 5.88232 16.784 5.28732 16.784"
                                        fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.6877 16.784C14.0927 16.784 13.6094 16.2998 13.6094 15.7048C13.6094 15.1098 14.0927 14.6265 14.6877 14.6265C15.2835 14.6265 15.7677 15.1098 15.7677 15.7048C15.7677 16.2998 15.2835 16.784 14.6877 16.784"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <span class="badge-notification">4</span>
                        </div>
                    </a>
                    <div class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="notification-cart">
                        <div class="m-0 shadow-none card">
                            <div class="py-3 card-header d-flex justify-content-between bg-primary mb-0">
                                <div class="header-title">
                                    <h5 class="mb-0 text-white">All Carts</h5>
                                </div>
                            </div>
                            <div class="p-0 card-body max-17 scroll-thin">
                                <div class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                        <img class="p-1 avatar-40 rounded-pill bg-primary-subtle"
                                            src="{{ asset('dashboard') }}/assets/images/shapes/01.png"
                                            loading="lazy" />
                                        <div class="ms-3 flex-grow-1 text-start">
                                            <h6 class="mb-0 ">Biker’s Jacket</h6>
                                            <p class="mb-0">$56.00</p>
                                        </div>
                                        <button type="button" class="btn btn-icon text-danger btn-sm">
                                            <span class="btn-inner">
                                                <svg viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                        <img class="p-1 avatar-40 rounded-pill bg-primary-subtle"
                                            src="{{ asset('dashboard') }}/assets/images/shapes/02.png"
                                            loading="lazy" />
                                        <div class="ms-3 flex-grow-1 text-start">
                                            <h6 class="mb-0 ">Casual Shoes</h6>
                                            <p class="mb-0">$56.00</p>
                                        </div>
                                        <button type="button" class="btn btn-icon text-danger btn-sm">
                                            <span class="btn-inner">
                                                <svg viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                        <img class="p-1 avatar-40 rounded-pill bg-primary-subtle"
                                            src="{{ asset('dashboard') }}/assets/images/shapes/03.png"
                                            loading="lazy" />
                                        <div class="ms-3 flex-grow-1 text-start">
                                            <h6 class="mb-0 ">Knitted Shrug</h6>
                                            <p class="mb-0">$56.00</p>
                                        </div>
                                        <button type="button" class="btn btn-icon text-danger btn-sm">
                                            <span class="btn-inner">
                                                <svg viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                        <img class="p-1 avatar-40 rounded-pill bg-primary-subtle"
                                            src="{{ asset('dashboard') }}/assets/images/shapes/04.png"
                                            loading="lazy" />
                                        <div class="ms-3 flex-grow-1 text-start">
                                            <h6 class="mb-0 ">Blue Handbag</h6>
                                            <p class="mb-0">$56.00</p>
                                        </div>
                                        <button type="button" class="btn btn-icon text-danger btn-sm">
                                            <span class="btn-inner">
                                                <svg viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                        <img class="p-1 avatar-40 rounded-pill bg-primary-subtle"
                                            src="{{ asset('dashboard') }}/assets/images/shapes/01.png"
                                            loading="lazy" />
                                        <div class="ms-3 flex-grow-1 text-start">
                                            <h6 class="mb-0 ">Biker’s Jacket</h6>
                                            <p class="mb-0">$56.00</p>
                                        </div>
                                        <button type="button" class="btn btn-icon text-danger btn-sm">
                                            <span class="btn-inner">
                                                <svg viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                        <img class="p-1 avatar-40 rounded-pill bg-primary-subtle"
                                            src="{{ asset('dashboard') }}/assets/images/shapes/02.png"
                                            loading="lazy" />
                                        <div class="ms-3 flex-grow-1 text-start">
                                            <h6 class="mb-0 ">Casual Shoes</h6>
                                            <p class="mb-0">$56.00</p>
                                        </div>
                                        <button type="button" class="btn btn-icon text-danger btn-sm">
                                            <span class="btn-inner">
                                                <svg viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                        <img class="p-1 avatar-40 rounded-pill bg-primary-subtle"
                                            src="{{ asset('dashboard') }}/assets/images/shapes/03.png"
                                            loading="lazy" />
                                        <div class="ms-3 flex-grow-1 text-start">
                                            <h6 class="mb-0 ">Knitted Shrug</h6>
                                            <p class="mb-0">$56.00</p>
                                        </div>
                                        <button type="button" class="btn btn-icon text-danger btn-sm">
                                            <span class="btn-inner">
                                                <svg viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="iq-sub-card">
                                    <div class="d-flex align-items-center">
                                        <img class="p-1 avatar-40 rounded-pill bg-primary-subtle"
                                            src="{{ asset('dashboard') }}/assets/images/shapes/04.png"
                                            loading="lazy" />
                                        <div class="ms-3 flex-grow-1 text-start">
                                            <h6 class="mb-0 ">Blue Handbag</h6>
                                            <p class="mb-0">$56.00</p>
                                        </div>
                                        <button type="button" class="btn btn-icon text-danger btn-sm">
                                            <span class="btn-inner">
                                                <svg viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0 text-center">
                                <div class="d-grid">
                                    <a href="#" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>



































                {{-- Language --}}
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="notification-cart" data-bs-toggle="dropdown">
                        <div class="btn-action position-relative nav-list-icon">
                            <span class="btn-inner">
                                <i class="fas fa-language fa-lg mx-1"></i> Language </span>
                        </div>
                    </a>
                    <div class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="notification-cart">
                        <div class="m-0 shadow-none card">
                            <div class="py-3 card-header d-flex justify-content-between bg-primary mb-0">
                                <div class="header-title">
                                    <h5 class="mb-0 text-white">Choose Language</h5>
                                </div>
                            </div>
                            <div class="p-0 card-body max-17 scroll-thin">


                                <form action="{{ url('/dashboard/change-language/en') }}" method="GET">
                                    <div class="w-50">
                                        <button type="submit" class="btn dir-btn cutomizer-button w-100">
                                            <img style="width: 40px;height:40px; margin:5px"
                                                src="{{ asset('website') }}/assets/images/flags/united-states.png"
                                                alt=""> English</button>
                                    </div>
                                </form>

                                <form action="{{ url('/dashboard/change-language/ar') }}" method="GET">
                                    <div class="w-50">

                                        <button type="submit" class="btn dir-btn cutomizer-button w-100">
                                            <img style="width: 40px;height:40px; margin:5px"
                                                src="{{ asset('website') }}/assets/images/flags/egypt.png"
                                                alt=""> العربية </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </li>

























                <li class="nav-item iq-full-screen d-none d-xl-block" id="fullscreen-item">
                    <a href="#" class="nav-link" id="btnFullscreen" data-bs-toggle="dropdown">
                        <div class="icon nav-list-icon">
                            <span class="btn-inner">
                                <svg class="normal-screen icon-20" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.5528 5.99656L13.8595 10.8961" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M14.8016 5.97618L18.5524 5.99629L18.5176 9.96906" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M5.8574 18.896L10.5507 13.9964" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M9.60852 18.9164L5.85775 18.8963L5.89258 14.9235" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <svg class="full-normal-screen d-none icon-20" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.7542 10.1932L18.1867 5.79319" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M17.2976 10.212L13.7547 10.1934L13.7871 6.62518" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M10.4224 13.5726L5.82149 18.1398" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M6.74391 13.5535L10.4209 13.5723L10.3867 17.2755" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="nav-item dropdown" id="itemdropdown1">
                    <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="icon-40">
                            <span class="btn-inner d-inline-block position-relative">
                                <img src="{{ asset('dashboard') }}/assets/images/avatars/14.png"
                                    class="img-fluid rounded-circle object-fit-cover" alt="icon">
                                <span
                                    class="bg-success p-1 rounded-circle position-absolute end-0 bottom-0 border border-3 border-white"></span>
                            </span>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="./app/user-profile.html">Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="./app/user-privacy-setting.html">Privacy
                                Setting</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('dashboard.logout') }}" method="POST">
                                @csrf
                                <a class="dropdown-item" href=""
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> {{ __('navbar.logout') }}
                                </a>
                            </form>

                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
