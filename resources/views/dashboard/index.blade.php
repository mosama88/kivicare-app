@extends('dashboard.layouts.master')

@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="d-flex align-items-center justify-content-between flex-sm-row flex-column-reverse">
                <div>
                    <h1 class="fs-37">
                        <span class="left-text text-capitalize fw-light">Good morning, </span>
                        <span class="right-text text-capitalize">Dr. Christopher </span>
                    </h1>
                    <p class="mb-5">Have a nice day at work. Progress is excellent!</p>
                    <div class="d-flex align-items-center flex-wrap gap-3">
                        <a class="btn btn-primary">
                            <span class="btn-inner">
                                <span class="text d-inline-block align-middle">View Schedule</span>
                                <span class="icon d-inline-block align-middle ms-1 ps-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8"
                                        fill="none">
                                        <path
                                            d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                            </span>
                        </a>
                        <a href="appointment.html" class="btn btn-secondary">
                            <span class="btn-inner">
                                <span class="text d-inline-block align-middle">Appointment</span>
                                <span class="icon d-inline-block align-middle ms-1 ps-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8"
                                        fill="none">
                                        <path
                                            d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <div>
                    <img class="img-fluid" src="{{ asset('dashboard') }}/assets/images/dashboard/dr-dashboard.png"
                        alt="dr-profile" loading="lazy" />
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card card-block card-stretch card-height overflow-hidden">
                        <div class="card-body px-0 pb-0 text-center d-flex flex-column justify-content-end">
                            <h5>Monthly Progress</h5>
                            <h3 class="text-secondary counter mb-4" style="visibility: visible;">56%</h3>
                            <div id="areachart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-block card-stretch card-height overflow-hidden">
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-3">Today Appointment</h5>
                                <div class="dropdown lh-1">
                                    <span role="button" id="dropdownMenuTodayAppointment" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg width="3" height="20" viewBox="0 0 5 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" style="transform: rotate(90deg);">
                                            <circle cx="2.5" cy="3" r="2.5" fill="currentColor" />
                                            <circle cx="2.5" cy="10" r="2.5" fill="currentColor" />
                                            <circle cx="2.5" cy="17" r="2.5" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <ul class="dropdown-menu dropdown-menu-soft-primary sub-dropdown"
                                        aria-labelledby="dropdownMenuTodayAppointment">
                                        <li><a class="dropdown-item active" href="#">View</a></li>
                                        <li><a class="dropdown-item my-1" href="#">Delete</a></li>
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <h3 class="text-primary d-inline-block counter mb-0" style="visibility: visible;">50</h3>
                                <span class="badge rounded-pill bg-success-subtle text-success p-2">+25.2%</span>
                            </div>
                        </div>
                        <div class="card-bg position-relative mt-2">
                            <img class="img-fluid float-end"
                                src="{{ asset('dashboard') }}/assets/images/dashboard/finance.png" alt="finance"
                                loading="lazy" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-block card-stretch card-height overflow-hidden">
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h5 class="mb-3">Total patients</h5>
                                <div class="dropdown lh-1">
                                    <span role="button" id="dropdownMenuTotalPatients" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg width="3" height="20" viewBox="0 0 5 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" style="transform: rotate(90deg);">
                                            <circle cx="2.5" cy="3" r="2.5" fill="currentColor" />
                                            <circle cx="2.5" cy="10" r="2.5" fill="currentColor" />
                                            <circle cx="2.5" cy="17" r="2.5" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <ul class="dropdown-menu dropdown-menu-soft-primary sub-dropdown"
                                        aria-labelledby="dropdownMenuTotalPatients">
                                        <li><a class="dropdown-item active" href="#">View</a></li>
                                        <li><a class="dropdown-item my-1" href="#">Print</a></li>
                                        <li><a class="dropdown-item" href="#">Download</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <h3 class="text-primary d-inline-block counter mb-0" style="visibility: visible;">20M</h3>
                                <span class="badge rounded-pill bg-success-subtle text-success p-2">+25.2%
                                    last week</span>
                            </div>
                        </div>
                        <div class="card-bg position-relative mt-2">
                            <img class="img-fluid float-end"
                                src="{{ asset('dashboard') }}/assets/images/dashboard/hand-holding-heart.png"
                                alt="finance" loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-3">
                    <div>
                        <h4>Upcoming Appointment</h4>
                        <p class="mb-0">6 Appointment Today</p>
                    </div>
                    <div class="dropdown text-end f-none">
                        <button class="dropdown btn btn-light-subtle border text-body py-2 px-3"
                            id="dropdownMenuAppointmentToday" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="fw-500">Today</span>
                            <svg width="8" class="ms-1 transform-up" viewBox="0 0 12 8" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6 5.08579L10.2929 0.792893C10.6834 0.402369 11.3166 0.402369 11.7071 0.792893C12.0976 1.18342 12.0976 1.81658 11.7071 2.20711L6.70711 7.20711C6.31658 7.59763 5.68342 7.59763 5.29289 7.20711L0.292893 2.20711C-0.0976311 1.81658 -0.0976311 1.18342 0.292893 0.792893C0.683418 0.402369 1.31658 0.402369 1.70711 0.792893L6 5.08579Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-soft-primary sub-dropdown"
                            aria-labelledby="dropdownMenuAppointmentToday">
                            <li><a class="dropdown-item active" href="#">Monday</a></li>
                            <li><a class="dropdown-item" href="#">Tuesday</a></li>
                            <li><a class="dropdown-item" href="#">Wednesday</a></li>
                            <li><a class="dropdown-item" href="#">Thursday</a></li>
                            <li><a class="dropdown-item" href="#">Friday</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="d-flex align-items-center mb-4 bg-primary-subtle px-3 py-3 px-lg-4 rounded">
                        <h6 class="mb-0 text-primary f-none">10:00 AM</h6>
                        <div class="border-start ps-3 ms-3 flex-grow-1">
                            <h5>Emily Johnson</h5>
                            <h6 class="mb-0">Reason: <span class="text-body fw-normal">Acne
                                    Treatment</span></h6>
                        </div>
                        <div>
                            <button class="dropdown btn border-0 p-0">
                                <svg width="15" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 bg-primary-subtle px-3 py-3 px-lg-4 rounded">
                        <h6 class="mb-0 text-primary f-none">10:00 AM</h6>
                        <div class="border-start ps-3 ms-3 flex-grow-1">
                            <h5>Michael Rodriguez</h5>
                            <h6 class="mb-0">Reason: <span class="text-body fw-normal">Tooth
                                    Cleaning</span></h6>
                        </div>
                        <div>
                            <button class="dropdown btn border-0 p-0">
                                <svg width="15" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="d-flex align-items-center bg-primary-subtle px-3 py-3 px-lg-4 rounded">
                        <h6 class="mb-0 text-primary f-none">10:00 AM</h6>
                        <div class="border-start ps-3 ms-3 flex-grow-1">
                            <h5>Jessica Anderson</h5>
                            <h6 class="mb-0">Reason: <span class="text-body fw-normal">Skin
                                    Whitening</span></h6>
                        </div>
                        <div>
                            <button class="dropdown btn border-0 p-0">
                                <svg width="15" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <h4 class="card-title">Revenue</h4>
                        <div class="d-flex align-items-center">
                            <div class="dropdown text-end">
                                <button class="dropdown btn btn-light-subtle border text-body py-2 px-3"
                                    id="dropdownMenuRevenue" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="fw-500">Month</span>
                                    <svg width="8" class="ms-1 transform-up" viewBox="0 0 12 8" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M6 5.08579L10.2929 0.792893C10.6834 0.402369 11.3166 0.402369 11.7071 0.792893C12.0976 1.18342 12.0976 1.81658 11.7071 2.20711L6.70711 7.20711C6.31658 7.59763 5.68342 7.59763 5.29289 7.20711L0.292893 2.20711C-0.0976311 1.81658 -0.0976311 1.18342 0.292893 0.792893C0.683418 0.402369 1.31658 0.402369 1.70711 0.792893L6 5.08579Z"
                                            fill="currentColor" />
                                    </svg>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-soft-primary sub-dropdown transform-month-dropdown"
                                    aria-labelledby="dropdownMenuRevenue">
                                    <li><a class="dropdown-item active" href="#">January</a></li>
                                    <li><a class="dropdown-item" href="#">February</a></li>
                                    <li><a class="dropdown-item" href="#">March</a></li>
                                    <li><a class="dropdown-item" href="#">April</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body py-0">
                    <div id="appointment-line-chart" class="appointment-line-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap gap-3 mb-3">
                    <h4 class="mb-0">Available Doctors</h4>
                    <div class="dropdown text-end">
                        <button class="dropdown btn border-0 p-0" id="dropdownMenuAvailableDoc" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="fw-500 d-inline-block align-middle">View All</span>
                            <svg width="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="transform-icon transform-down">
                                <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-soft-primary sub-dropdown"
                            aria-labelledby="dropdownMenuAvailableDoc">
                            <li><a class="dropdown-item active" href="#">View</a></li>
                            <li><a class="dropdown-item" href="#">Appointment</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <ul class="list-inline m-0 p-0">
                        <li class="d-flex mb-4 align-items-center">
                            <div>
                                <img class="img-fluid"
                                    src="{{ asset('dashboard') }}/assets/images/dashboard/draminelouis.png"
                                    alt="Dr-profile" loading="lazy" />
                            </div>
                            <div class="ms-4 flex-grow-1">
                                <h5>Dr.Amine Louis</h5>
                                <p class="mb-0">Skin Specialist</p>
                            </div>
                            <div>
                                <h6 class="text-primary mb-0">120 patients</h6>
                            </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center">
                            <div>
                                <img class="img-fluid"
                                    src="{{ asset('dashboard') }}/assets/images/dashboard/drKeinoshine.png"
                                    alt="Dr-profile" loading="lazy" />
                            </div>
                            <div class="ms-4 flex-grow-1">
                                <h5>Dr.Keino Shine</h5>
                                <p class="mb-0">Cardiologist</p>
                            </div>
                            <div>
                                <h6 class="text-primary mb-0">89 Patients</h6>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div>
                                <img class="img-fluid"
                                    src="{{ asset('dashboard') }}/assets/images/dashboard/drMaxwellena.png"
                                    alt="Dr-profile" loading="lazy" />
                            </div>
                            <div class="ms-4 flex-grow-1">
                                <h5>Dr.Maxwell Ena</h5>
                                <p class="mb-0">Orthopedics</p>
                            </div>
                            <div>
                                <h6 class="text-primary mb-0">106 patients</h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <h4 class="mb-0">Transaction History</h4>
                    <div class="dropdown text-end">
                        <button class="dropdown btn border-0 p-0" id="dropdownMenuTransaction" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="fw-500 d-inline-block align-middle">View All</span>
                            <svg width="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="transform-icon transform-down">
                                <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-soft-primary sub-dropdown transform-left-dropdown"
                            aria-labelledby="dropdownMenuTransaction">
                            <li><a class="dropdown-item active" href="#">View</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><a class="dropdown-item" href="#">Print</a></li>
                            <li><a class="dropdown-item" href="#">Download</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <ul class="list-inline m-0 p-0">
                        <li
                            class="d-flex flex-wrap gap-sm-1 gap-3 align-items-center justify-content-between flex-sm-row flex-column text-sm-start text-center bg-primary-subtle p-3 mb-4 rounded">
                            <div class="d-flex gap-3 align-items-center flex-sm-row flex-column">
                                <img class="img-fluid"
                                    src="{{ asset('dashboard') }}/assets/images/dashboard/angle-jonas.png"
                                    alt="Dr-profile" loading="lazy" />
                                <div>
                                    <h5>Angle Jonas </h5>
                                    <p class="mb-0 text-body">23 May,2023</p>
                                </div>
                            </div>
                            <h5 class="mb-0">$2.493</h5>
                            <button
                                class="badge bg-success-subtle text-success fw-500 px-3 py-2 border-0 me-sm-2 me-0">Paid</button>
                        </li>
                        <li
                            class="d-flex flex-wrap gap-sm-1 gap-3 align-items-center justify-content-between flex-sm-row flex-column text-sm-start text-center bg-primary-subtle p-3 mb-4 rounded">
                            <div class="d-flex gap-3 align-items-center flex-sm-row flex-column">
                                <img class="img-fluid"
                                    src="{{ asset('dashboard') }}/assets/images/dashboard/alexa-zander.png"
                                    alt="Dr-profile" loading="lazy" />
                                <div>
                                    <h5>Alexa Zander</h5>
                                    <p class="mb-0 text-body">06 June, 2023</p>
                                </div>
                            </div>
                            <h5 class="mb-0">$05.69</h5>
                            <button
                                class="badge bg-danger-subtle text-danger fw-500 px-3 py-2 border-0 me-sm-2 me-0">Accept</button>
                        </li>
                        <li
                            class="d-flex flex-wrap gap-sm-1 gap-3 align-items-center justify-content-between flex-sm-row flex-column text-sm-start text-center bg-primary-subtle p-3 rounded">
                            <div class="d-flex gap-3 align-items-center flex-sm-row flex-column">
                                <img class="img-fluid"
                                    src="{{ asset('dashboard') }}/assets/images/dashboard/angle-jonas.png"
                                    alt="Dr-profile" loading="lazy" />
                                <div>
                                    <h5>Smith Rayan</h5>
                                    <p class="mb-0 text-body">28 June, 2023</p>
                                </div>
                            </div>
                            <h5 class="mb-0">$20.49</h5>
                            <button
                                class="badge bg-success-subtle text-success fw-500 px-3 py-2 border-0 me-sm-2 me-0">Paid</button>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <h4 class="mb-0">Appointment Request</h4>
                    <div class="dropdown text-end">
                        <button class="dropdown btn border-0 p-0" id="dropdownMenuAppReq" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="fw-500 d-inline-block align-middle">View All</span>
                            <svg width="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="transform-icon transform-down">
                                <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-soft-primary sub-dropdown"
                            aria-labelledby="dropdownMenuAppReq">
                            <li><a class="dropdown-item active" href="#">View</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><a class="dropdown-item" href="#">Print</a></li>
                            <li><a class="dropdown-item" href="#">Download</a></li>
                        </ul>
                    </div>
                </div>
                <div class="pt-0 card-body">
                    <div class="table-responsive">
                        <table class="table py-3 mb-0" role="grid" data-toggle="appointment_admin">
                            <thead class="bg-primary-subtle">
                                <tr class="text-dark">
                                    <th class="border-bottom">No.</th>
                                    <th class="border-bottom">Names</th>
                                    <th class="border-bottom">Date</th>
                                    <th class="border-bottom">Reason</th>
                                    <th class="border-bottom">Type</th>
                                    <th class="border-bottom">Staus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="{{ asset('dashboard') }}/assets/images/table/10.png"
                                                class="img-fluid flex-shrink-0 icon-40 object-fit-cover" alt="icon">
                                            <h5 class="mb-0">Courtney Henry</h5>
                                        </div>
                                    </td>
                                    <td>22 Mar, 2023</td>
                                    <td>Acne Treatment</td>
                                    <td>New Patient</td>
                                    <td>
                                        <button
                                            class="badge bg-success-subtle text-success fw-500 px-3 py-2 border-0 me-2">Accept</button>
                                        <button
                                            class="badge bg-danger-subtle text-danger fw-500 px-3 py-2 border-0 me-2">Cancel</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="{{ asset('dashboard') }}/assets/images/table/11.png"
                                                class="img-fluid flex-shrink-0 icon-40 object-fit-cover" alt="icon">
                                            <h5 class="mb-0">Jerome Bell</h5>
                                        </div>
                                    </td>
                                    <td>16 June, 2023</td>
                                    <td>Tooth Cleaning</td>
                                    <td>Old Patient</td>
                                    <td>
                                        <button
                                            class="badge bg-success-subtle text-success fw-500 px-3 py-2 border-0 me-2">Accept</button>
                                        <button
                                            class="badge bg-danger-subtle text-danger fw-500 px-3 py-2 border-0 me-2">Cancel</button>
                                    </td>
                                </tr>
                                <tr class="border-0">
                                    <td class="border-0">3</td>
                                    <td class="border-0">
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="{{ asset('dashboard') }}/assets/images/table/12.png"
                                                class="img-fluid flex-shrink-0 icon-40 object-fit-cover" alt="icon">
                                            <h5 class="mb-0">Darrell Steward</h5>
                                        </div>
                                    </td>
                                    <td class="border-0">18 May, 2023</td>
                                    <td class="border-0">Skin Whitening</td>
                                    <td class="border-0">Old Patient</td>
                                    <td class="border-0">
                                        <button
                                            class="badge bg-success-subtle text-success fw-500 px-3 py-2 border-0 me-2">Accept</button>
                                        <button
                                            class="badge bg-danger-subtle text-danger fw-500 px-3 py-2 border-0 me-2">Cancel</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
