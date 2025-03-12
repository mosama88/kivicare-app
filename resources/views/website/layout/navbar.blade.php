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
                                <a class="nav-link" data-bs-toggle="collapse" href="#homePages" role="button"
                                    aria-expanded="false" aria-controls="homePages">
                                    <span class="item-name">{{ __('navbar.home') }}</span>
                                    <span class="menu-icon">
                                        <svg width="8" height="9" viewBox="0 0 8 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4 0.5C4.27614 0.5 4.5 0.723858 4.5 1V4H7.5C7.77614 4 8 4.22386 8 4.5C8 4.77614 7.77614 5 7.5 5H4.5V8C4.5 8.27614 4.27614 8.5 4 8.5C3.72386 8.5 3.5 8.27614 3.5 8V5H0.5C0.223858 5 0 4.77614 0 4.5C0 4.22386 0.223858 4 0.5 4H3.5V1C3.5 0.723858 3.72386 0.5 4 0.5Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </a>
                                <ul class="sub-nav mega-menu-item collapse list-unstyled" id="homePages">
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/index.html">
                                            <img src="{{ asset('website') }}/assets/images/mega/home-01.webp"
                                                alt="img" class="img-fluid d-xl-block d-none">
                                            <span class="d-inline-block mt-0 mt-xl-3">general
                                                doctor</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{ asset('website') }}/dentist.html">
                                            <img src="{{ asset('website') }}/assets/images/mega/home-02.webp"
                                                alt="img" class="img-fluid d-xl-block d-none">
                                            <span class="d-inline-block mt-0 mt-xl-3">dentist</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/eye-care.html">
                                            <img src="{{ asset('website') }}/assets/images/mega/home-03.webp"
                                                alt="img" class="img-fluid d-xl-block d-none">
                                            <span class="d-inline-block mt-0 mt-xl-3">eye care</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/skin-specialist.html">
                                            <img src="{{ asset('website') }}/assets/images/mega/home-04.webp"
                                                alt="img" class="img-fluid d-xl-block d-none">
                                            <span class="d-inline-block mt-0 mt-xl-3"> skin
                                                specialist</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/fertility-clinic.html">
                                            <img src="{{ asset('website') }}/assets/images/mega/home-05.webp"
                                                alt="img" class="img-fluid d-xl-block d-none">
                                            <span class="d-inline-block mt-0 mt-xl-3">Fertility
                                                Clinic</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/ent-clinic.html">
                                            <img src="{{ asset('website') }}/assets/images/mega/home-06.webp"
                                                alt="img" class="img-fluid d-xl-block d-none">
                                            <span class="d-inline-block mt-0 mt-xl-3"> ent
                                                clinic</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/product-home.html">
                                            <img src="{{ asset('website') }}/assets/images/mega/home-07.webp"
                                                alt="img" class="img-fluid d-xl-block d-none">
                                            <span class="d-inline-block mt-0 mt-xl-3">Product
                                                Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/psychiatrist.html">
                                            <img src="{{ asset('website') }}/assets/images/mega/home-08.webp"
                                                alt="img" class="img-fluid d-xl-block d-none">
                                            <span class="d-inline-block mt-0 mt-xl-3">
                                                Psychiatrist</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/paediatrician.html">
                                            <img src="{{ asset('website') }}/assets/images/mega/home-09.webp"
                                                alt="img" class="img-fluid d-xl-block d-none">
                                            <span class="d-inline-block mt-0 mt-xl-3">Paediatrician</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/cardiac.html">
                                            <img src="{{ asset('website') }}/assets/images/mega/home-10.webp"
                                                alt="img" class="img-fluid d-xl-block d-none">
                                            <span class="d-inline-block mt-0 mt-xl-3">Cardiac</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/orthopedics.html">
                                            <img src="{{ asset('website') }}/assets/images/mega/home-11.webp"
                                                alt="img" class="img-fluid d-xl-block d-none">
                                            <span class="d-inline-block mt-0 mt-xl-3">Orthopedics</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/laboratory.html">
                                            <img src="{{ asset('website') }}/assets/images/mega/home-12.webp"
                                                alt="img" class="img-fluid d-xl-block d-none">
                                            <span class="d-inline-block mt-0 mt-xl-3">Laboratory</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" href="#allPages" role="button"
                                    aria-expanded="false" aria-controls="allPages">
                                    <span class="item-name">Pages</span>
                                    <span class="menu-icon">
                                        <svg width="8" height="9" viewBox="0 0 8 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4 0.5C4.27614 0.5 4.5 0.723858 4.5 1V4H7.5C7.77614 4 8 4.22386 8 4.5C8 4.77614 7.77614 5 7.5 5H4.5V8C4.5 8.27614 4.27614 8.5 4 8.5C3.72386 8.5 3.5 8.27614 3.5 8V5H0.5C0.223858 5 0 4.77614 0 4.5C0 4.22386 0.223858 4 0.5 4H3.5V1C3.5 0.723858 3.72386 0.5 4 0.5Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </a>
                                <ul class="sub-nav collapse  list-unstyled" id="allPages">
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="collapse" href="#docPages"
                                            role="button" aria-expanded="false" aria-controls="docPages">
                                            <span class="item-name">Doctors</span>
                                            <span class="menu-icon">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                            </span>
                                        </a>
                                        <ul class="sub-nav collapse  list-unstyled" id="docPages">
                                            <li class="nav-item">
                                                <a class="nav-link "
                                                    href="{{ asset('website') }}/tab-two-column.html">
                                                    tab two column
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link "
                                                    href="{{ asset('website') }}/tab-three-column.html">
                                                    tab three column
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link "
                                                    href="{{ asset('website') }}/doctor-details.html">
                                                    doctor details
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/about-us.html">
                                            about-us
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="collapse" href="#pageServices"
                                            role="button" aria-expanded="false" aria-controls="pageServices">
                                            <span class="item-name">Service</span>
                                            <span class="menu-icon">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                            </span>
                                        </a>
                                        <ul class="sub-nav collapse  list-unstyled" id="pageServices">
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{ asset('website') }}/service1.html">
                                                    service 1
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{ asset('website') }}/service2.html">
                                                    service 2
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/client.html">
                                            client
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="collapse" href="#pricingPlan"
                                            role="button" aria-expanded="false" aria-controls="pricingPlan">
                                            <span class="item-name">Pricing Plan</span>
                                            <span class="menu-icon">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                            </span>
                                        </a>
                                        <ul class="sub-nav collapse  list-unstyled" id="pricingPlan">
                                            <li class="nav-item">
                                                <a class="nav-link "
                                                    href="{{ asset('website') }}/pricing-plan-one.html">
                                                    Pricing plan 1
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link "
                                                    href="{{ asset('website') }}/pricing-plan-two.html">
                                                    Pricing plan 2
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/faq.html">
                                            faq
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/404.html">
                                            404
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/contactus.html">
                                            contact us
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/comingsoon.html">
                                            coming soon
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" href="#specializationPages"
                                    role="button" aria-expanded="false" aria-controls="specializationPages">
                                    <span class="item-name">Specialization</span>
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
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/neurologist.html">
                                            neurologist
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/ent-specialist.html">
                                            ent specialist
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/cardiologist.html">
                                            cardiologist
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/audiologist.html">
                                            audiologist
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/psychiatrists.html">
                                            psychiatrists
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" href="#blogPages" role="button"
                                    aria-expanded="false" aria-controls="blogPages">
                                    <span class="item-name">Blog</span>
                                    <span class="menu-icon">
                                        <svg width="8" height="9" viewBox="0 0 8 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4 0.5C4.27614 0.5 4.5 0.723858 4.5 1V4H7.5C7.77614 4 8 4.22386 8 4.5C8 4.77614 7.77614 5 7.5 5H4.5V8C4.5 8.27614 4.27614 8.5 4 8.5C3.72386 8.5 3.5 8.27614 3.5 8V5H0.5C0.223858 5 0 4.77614 0 4.5C0 4.22386 0.223858 4 0.5 4H3.5V1C3.5 0.723858 3.72386 0.5 4 0.5Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </a>
                                <ul class="sub-nav collapse  list-unstyled" id="blogPages">
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/blog-lists.html">
                                            Blog Listing
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/blog-masonry.html">
                                            blog masonry
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="collapse" href="#blogGrid"
                                            role="button" aria-expanded="false" aria-controls="blogGrid">
                                            <span class="item-name">Blog Grid</span>
                                            <span class="menu-icon">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                            </span>
                                        </a>
                                        <ul class="sub-nav collapse  list-unstyled" id="blogGrid">
                                            <li class="nav-item">
                                                <a class="nav-link "
                                                    href="{{ asset('website') }}/two-column-blog.html">
                                                    two column blog
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link "
                                                    href="{{ asset('website') }}/three-column-blog.html">
                                                    three column blog
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link "
                                                    href="{{ asset('website') }}/three-column-full-width-blog.html">
                                                    three column full width blog
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link "
                                                    href="{{ asset('website') }}/four-column-blog.html">
                                                    four column blog
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="collapse" href="#blogSidebar"
                                            role="button" aria-expanded="false" aria-controls="blogSidebar">
                                            <span class="item-name">Blog Sidebar</span>
                                            <span class="menu-icon">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                            </span>
                                        </a>
                                        <ul class="sub-nav collapse  list-unstyled" id="blogSidebar">
                                            <li class="nav-item">
                                                <a class="nav-link "
                                                    href="{{ asset('website') }}/left-sidebar-grid-1.html">
                                                    left sidebar grid-1
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link "
                                                    href="{{ asset('website') }}/left-sidebar-grid-2.html">
                                                    left sidebar grid-2
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link "
                                                    href="{{ asset('website') }}/right-sidebar-grid-1.html">
                                                    Right sidebar grid-1
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link "
                                                    href="{{ asset('website') }}/right-sidebar-grid-2.html">
                                                    Right sidebar grid-2
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="collapse" href="#blogSingle"
                                            role="button" aria-expanded="false" aria-controls="docPages">
                                            <span class="item-name">Blog Single</span>
                                            <span class="menu-icon">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                            </span>
                                        </a>
                                        <ul class="sub-nav collapse  list-unstyled" id="blogSingle">
                                            <li class="nav-item">
                                                <a class="nav-link "
                                                    href="{{ asset('website') }}/blog-standard.html">
                                                    blog standard
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{ asset('website') }}/blog-video.html">
                                                    blog video
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{ asset('website') }}/blog-gallary.html">
                                                    blog gallary
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{ asset('website') }}/blog-audio.html">
                                                    blog audio
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{ asset('website') }}/blog-link.html">
                                                    blog link
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{ asset('website') }}/blog-quote.html">
                                                    blog quote
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" href="#shopPage" role="button"
                                    aria-expanded="false" aria-controls="shopPage">
                                    <span class="item-name">Shop</span>
                                    <span class="menu-icon">
                                        <svg width="8" height="9" viewBox="0 0 8 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4 0.5C4.27614 0.5 4.5 0.723858 4.5 1V4H7.5C7.77614 4 8 4.22386 8 4.5C8 4.77614 7.77614 5 7.5 5H4.5V8C4.5 8.27614 4.27614 8.5 4 8.5C3.72386 8.5 3.5 8.27614 3.5 8V5H0.5C0.223858 5 0 4.77614 0 4.5C0 4.22386 0.223858 4 0.5 4H3.5V1C3.5 0.723858 3.72386 0.5 4 0.5Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </a>
                                <ul class="sub-nav collapse  list-unstyled" id="shopPage">
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('website') }}/shop.html">
                                            Shop
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="collapse" href="#productSidebar"
                                            role="button" aria-expanded="false" aria-controls="productSidebar">
                                            <span class="item-name">Product Sidebar</span>
                                            <span class="menu-icon">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                            </span>
                                        </a>
                                        <ul class="sub-nav collapse  list-unstyled" id="productSidebar">
                                            <li class="nav-item">
                                                <a class="nav-link "
                                                    href="{{ asset('website') }}/shop-left-sidebar.html">
                                                    shop left sidebar
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link "
                                                    href="{{ asset('website') }}/shop-right-sidebar.html">
                                                    shop right sidebar
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link "
                                                    href="{{ asset('website') }}/shop-no-sidebar.html">
                                                    shop no sidebar
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="collapse" href="#sPages" role="button"
                                            aria-expanded="false" aria-controls="sPages">
                                            <span class="item-name">Shop Pages</span>
                                            <span class="menu-icon">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                            </span>
                                        </a>
                                        <ul class="sub-nav collapse  list-unstyled" id="sPages">
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{ asset('website') }}/cart.html">
                                                    cart
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{ asset('website') }}/checkout.html">
                                                    checkout
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{ asset('website') }}/wishlist.html">
                                                    wishlist
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{ asset('website') }}/my-account.html">
                                                    my account
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{ asset('website') }}/track-order.html">
                                                    track-order
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="collapse" href="#proType" role="button"
                                            aria-expanded="false" aria-controls="proType">
                                            <span class="item-name">Product Type</span>
                                            <span class="menu-icon">
                                                <svg class="icon-32" width="32" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                            </span>
                                        </a>
                                        <ul class="sub-nav collapse  list-unstyled" id="proType">
                                            <li class="nav-item">
                                                <a class="nav-link "
                                                    href="{{ asset('website') }}/product-standard.html">
                                                    product standard
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{ asset('website') }}/product-new.html">
                                                    product new
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{ asset('website') }}/product-sale.html">
                                                    product sale
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
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
                            <a href="#" class="nav-link" id="cart-drop" data-bs-toggle="dropdown">
                                <div class="btn-icon btn-sm rounded-pill btn-action position-relative">
                                    <span class="btn-inner">
                                        <svg class="cart-icons" xmlns="http://www.w3.org/2000/svg" width="18"
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
                                    <span class=" badge-notification">4</span>
                                </div>
                            </a>
                            <div class="p-3 sub-drop dropdown-menu dropdown-menu-end">
                                <div class="m-0 shadow-none card">
                                    <div class="card-body p-0 max-17 scroll-thin">
                                        <div class="iq-sub-card" data-item="list">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <img class="avatar-40 rounded"
                                                        src="{{ asset('website') }}/assets/images/shop/product-1.webp"
                                                        alt="" loading="lazy" />
                                                    <div class="ms-3 flex-grow-1">
                                                        <h6 class="mb-0 ">Electric Toothbrush</h6>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0"><span>1</span> *
                                                                <span>$123.00</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-primary"><i
                                                        class="far fa-times-circle delete-btn"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="iq-sub-card" data-item="list">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <img class="avatar-40 rounded"
                                                        src="{{ asset('website') }}/assets/images/shop/product-2.webp"
                                                        alt="" loading="lazy" />
                                                    <div class="ms-3 flex-grow-1">
                                                        <h6 class="mb-0 ">Medical Box</h6>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0"><span>1</span> *
                                                                <span>$92.00</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-primary"><i
                                                        class="far fa-times-circle delete-btn"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="iq-sub-card" data-item="list">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <img class="avatar-40 rounded"
                                                        src="{{ asset('website') }}/assets/images/shop/product-3.webp"
                                                        alt="" loading="lazy" />
                                                    <div class="ms-3 flex-grow-1">
                                                        <h6 class="mb-0 ">Hand Sanitizer Bottle</h6>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0"><span>1</span> *
                                                                <span>$90.00</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-primary"><i
                                                        class="far fa-times-circle delete-btn"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="iq-sub-card" data-item="list">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <img class="avatar-40 rounded"
                                                        src="{{ asset('website') }}/assets/images/shop/product-4.webp"
                                                        alt="" loading="lazy" />
                                                    <div class="ms-3 flex-grow-1">
                                                        <h6 class="mb-0 ">Wheel Chair</h6>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0"><span>1</span> *
                                                                <span>$89.00</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-primary"><i
                                                        class="far fa-times-circle delete-btn"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer pt-3 px-0 pb-0 text-center">
                                        <div class="d-flex align-items-center justify-content-between ">
                                            <strong>Subtotal:</strong>
                                            <span>$64.00</span>
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-between my-3 pt-3 border-top">
                                            <div class="cart-menu">
                                                <div class="iq-btn-container">
                                                    <a class="iq-button text-capitalize"
                                                        href="{{ asset('website') }}/cart.html">
                                                        <span class="iq-btn-text-holder position-relative">View
                                                            Cart</span>
                                                        <span class="iq-btn-icon-holder">
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
                                            <div class="button-primary">
                                                <div class="iq-btn-container">
                                                    <a class="iq-button text-capitalize"
                                                        href="{{ asset('website') }}/checkout.html">
                                                        <span
                                                            class="iq-btn-text-holder position-relative">Checkout</span>
                                                        <span class="iq-btn-icon-holder">
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
                        </li>
                        <li class="button-primary ms-3">
                            <div class="iq-btn-container">
                                <a class="iq-button text-capitalize" href="{{ asset('website') }}/appointment.html">
                                    <span class="iq-btn-text-holder position-relative">Appointment</span>
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
