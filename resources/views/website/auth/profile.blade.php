@extends('website.layout.master')
@section('title', __('navbar.About_US'))
@section('content')
    {{-- breadcrumb --}}
    @include('website\layout\breadcrumb', [
        'title' => __('navbar.My_Account'),
        'title_desc' => __('navbar.My_Account'),
    ])
    <!--bread-crumb-->

    </div>
    <div class="section-padding service-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="bg-primary-subtle p-4 mb-5 mb-lg-0 mb-md-0">
                        <div class="product-menu">
                            <ul class="list-inline m-0 nav nav-tabs flex-column bg-transparent" role="tablist">
                                <li class="pb-3 border-bottom nav-item">
                                    <button class="nav-link active p-0 bg-transparent" data-bs-toggle="tab"
                                        data-bs-target="#dashboard" type="button" role="tab" aria-selected="true"><i
                                            class="fas fa-tachometer-alt"></i><span class="ms-2">Dashboard</span></button>
                                </li>
                                <li class="py-3 border-bottom nav-item">
                                    <button class="nav-link p-0 bg-transparent" data-bs-toggle="tab"
                                        data-bs-target="#orders" type="button" role="tab" aria-selected="true"><i
                                            class="fas fa-list"></i><span class="ms-2">Orders</span></button>
                                </li>
                                <li class="py-3 border-bottom nav-item">
                                    <button class="nav-link p-0 bg-transparent" data-bs-toggle="tab"
                                        data-bs-target="#downloads" type="button" role="tab" aria-selected="true"><i
                                            class="fas fa-download"></i><span class="ms-2">Downloads</span></button>
                                </li>
                                <li class="py-3 border-bottom nav-item">
                                    <button class="nav-link p-0 bg-transparent" data-bs-toggle="tab"
                                        data-bs-target="#address" type="button" role="tab" aria-selected="true"><i
                                            class="fas fa-map-marker-alt"></i><span class="ms-2">Address</span></button>
                                </li>
                                <li class="py-3 border-bottom nav-item">
                                    <button class="nav-link p-0 bg-transparent" data-bs-toggle="tab"
                                        data-bs-target="#account-details" type="button" role="tab"
                                        aria-selected="true"><i class="fas fa-user"></i><span class="ms-2">Account
                                            details</span></button>
                                </li>
                                <li class="pt-3 nav-item">
                                    <button class="nav-link p-0 bg-transparent" data-bs-toggle="tab"
                                        data-bs-target="#logout" type="button" role="tab" aria-selected="true"><i
                                            class="fas fa-sign-out-alt"></i><span class="ms-2">Logout</span></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="tab-content" id="product-menu-content">
                        <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
                            <div class="myaccount-content bg-primary-subtle text-body p-4">
                                <p>Hello goldenmace (not goldenmace? <a href="custome-logout.html">Log out</a>)
                                </p>
                                <p>From your account dashboard you can view your <a href="javascript:void(0)">recent
                                        orders</a>,
                                    manage your <a href="javascript:void(0)">shipping and billing addresses</a>,
                                    and <a href="javascript:void(0)">edit your
                                        password and account details</a>.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="orders" role="tabpanel">
                            <div class="orders-table bg-primary-subtle text-body p-4">
                                <div class="table-responsive">
                                    <table class="w-100">
                                        <thead>
                                            <tr class="border-bottom">
                                                <th class="text-primary fw-bolder p-3">Order</th>
                                                <th class="text-primary fw-bolder p-3">Date</th>
                                                <th class="text-primary fw-bolder p-3">Status</th>
                                                <th class="text-primary fw-bolder p-3">Total</th>
                                                <th class="text-primary fw-bolder p-3">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-bottom">
                                                <td class="text-primary p-3 fs-6">#32604</td>
                                                <td class="p-3">October 28, 2022</td>
                                                <td class="p-3">Cancelled</td>
                                                <td class="p-3">$215.00 For 0 Items</td>
                                                <td class="text-primary p-3 fs-6">View</td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="text-primary p-3 fs-6">#32584</td>
                                                <td class="p-3">October 27, 2022</td>
                                                <td class="p-3">On Hold</td>
                                                <td class="p-3">$522.00 For 0 Items</td>
                                                <td class="text-primary p-3 fs-6">View</td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="text-primary p-3 fs-6">#31756</td>
                                                <td class="p-3">October 19, 2022</td>
                                                <td class="p-3">Processing</td>
                                                <td class="p-3">$243.00 For 0 Items</td>
                                                <td class="text-primary p-3 fs-6">View</td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="text-primary p-3 fs-6">#23663</td>
                                                <td class="p-3">October 7, 2022</td>
                                                <td class="p-3">Completed</td>
                                                <td class="p-3">$123.00 For 0 Items</td>
                                                <td class="text-primary p-3 fs-6">View</td>
                                            </tr>
                                            <tr class="border-bottom">
                                                <td class="text-primary p-3 fs-6">#23612</td>
                                                <td class="p-3">October 7, 2022</td>
                                                <td class="p-3">Completed</td>
                                                <td class="p-3">$64.00 For 0 Items</td>
                                                <td class="text-primary p-3 fs-6">View</td>
                                            </tr>
                                            <tr>
                                                <td class="text-primary p-3 fs-6">#19243</td>
                                                <td class="p-3">April 1, 2022</td>
                                                <td class="p-3">Completed</td>
                                                <td class="p-3">$159.00 For 0 Items</td>
                                                <td class="text-primary p-3 fs-6">View</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="downloads" role="tabpanel">
                            <div class="orders-table bg-primary-subtle text-body p-4">
                                <div class="table-responsive">
                                    <table class="w-100">
                                        <thead>
                                            <tr class="border-bottom">
                                                <th class="text-primary fw-bolder p-3">Product</th>
                                                <th class="text-primary fw-bolder p-3">Downloads Remaining</th>
                                                <th class="text-primary fw-bolder p-3">Expires</th>
                                                <th class="text-primary fw-bolder p-3">Download</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-primary p-3 fs-6">Electric Toothbrush</td>
                                                <td class="p-3">∞</td>
                                                <td class="p-3 fs-6">Never</td>
                                                <td class="p-3"><a href="#"
                                                        class="p-2 bg-primary text-white fs-6" download>Product
                                                        Demo</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="address" role="tabpanel">
                            <div class="bg-primary-subtle text-body p-4">
                                <p class="my-3">The following addresses will be used on the checkout page by
                                    default.</p>
                                <div class="d-flex align-items-center justify-content-between my-5 gap-2 flex-wrap">
                                    <h4 class="mb-0">Billing Address.</h4>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="collapse"
                                        data-bs-target="#edit-address-1" aria-expanded="false">Edit<i
                                            class="fas fa-chevron-right ms-1"></i></a>
                                </div>
                                <div id="edit-address-1" class="collapse">
                                    <div class="primary-soft-dark p-4 text-body mb-4">
                                        <form>
                                            <label class="mb-1">First name&nbsp; <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="first-name" value="John"
                                                class="form-control mb-5 rounded-0" required="required">
                                            <label class="mb-1">Last name&nbsp; <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="last-name" value="deo"
                                                class="form-control mb-5 rounded-0" required="required">
                                            <label class="mb-1">Company name (optional)</label>
                                            <input type="text" name="company-name" value="Iqonic Design"
                                                class="form-control mb-5 rounded-0">
                                            <label class="mb-1">Country / Region &nbsp; <span
                                                    class="text-danger">*</span></label>
                                            <div class="mb-5">
                                                <select class="select2-basic-single js-states" aria-label="select country"
                                                    required="required">
                                                    <option value="" selected>Choose a country</option>
                                                    <option value="1">India</option>
                                                    <option value="2">United Kingdom</option>
                                                    <option value="3">United States</option>
                                                    <option value="4">Australia</option>
                                                    <option value="5">North Corea</option>
                                                </select>
                                            </div>
                                            <label class="mb-1">Street address&nbsp; <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="address"
                                                placeholder="House number and street name" value="4517 Kentucky"
                                                class="form-control mb-5 rounded-0" required="required">
                                            <input type="text" name="address"
                                                placeholder="Apartment, suite, unit, etc. (optional)"
                                                class="form-control mb-5 rounded-0">
                                            <label class="mb-1">Town / City&nbsp; <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="city" value="Navsari"
                                                class="form-control mb-5 rounded-0" required="required">
                                            <label class="mb-1">State&nbsp; <span class="text-danger">*</span></label>
                                            <div class="mb-5">
                                                <select class="select2-basic-single js-states" aria-label="select state">
                                                    <option value="" selected>Choose a State</option>
                                                    <option value="1">Gujarat</option>
                                                    <option value="2">Delhi</option>
                                                    <option value="3">Goa</option>
                                                    <option value="4">Haryana</option>
                                                    <option value="5">Ladakh</option>
                                                </select>
                                            </div>
                                            <label class="mb-1">PIN code&nbsp; <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="pin code" value="396321"
                                                class="form-control mb-5 rounded-0" required="required">
                                            <label class="mb-1">Phone&nbsp; <span class="text-danger">*</span></label>
                                            <input type="tel" name="number" value="1234567890"
                                                class="form-control mb-5 rounded-0" required="required">
                                            <label class="mb-1">Email address&nbsp; <span
                                                    class="text-danger">*</span></label>
                                            <input type="email" name="email" value="johndeo@gmail.com"
                                                class="form-control mb-5 rounded-0" required="required">
                                            <div class="iq-btn-container button-primary">
                                                <button type="submit" class="iq-button text-capitalize border-0">
                                                    <span class="iq-btn-text-holder position-relative">Save
                                                        Address</span>
                                                    <span class="iq-btn-icon-holder">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                            height="10" viewBox="0 0 8 8" fill="none">
                                                            <path
                                                                d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="edit-address w-100">
                                        <tr>
                                            <td class="label-name p-2">Name</td>
                                            <td class="seprator p-2"><span>:</span></td>
                                            <td class="p-2">john deo</td>
                                        </tr>
                                        <tr>
                                            <td class="label-name p-2">Company</td>
                                            <td class="seprator p-2"><span>:</span></td>
                                            <td class="p-2">Iqonic Design</td>
                                        </tr>
                                        <tr>
                                            <td class="label-name p-2">Country</td>
                                            <td class="seprator p-2"><span>:</span></td>
                                            <td class="p-2">India</td>
                                        </tr>
                                        <tr>
                                            <td class="label-name p-2">Address</td>
                                            <td class="seprator p-2"><span>:</span></td>
                                            <td class="p-2">4517 Washington Ave, Manchester.</td>
                                        </tr>
                                        <tr>
                                            <td class="label-name p-2">E-mail</td>
                                            <td class="seprator p-2"><span>:</span></td>
                                            <td class="p-2">johndeo@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td class="label-name p-2">Phone</td>
                                            <td class="seprator p-2"><span>:</span></td>
                                            <td class="p-2">1234567890</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="d-flex align-items-center justify-content-between my-5 gap-2 flex-wrap">
                                    <h4 class="mb-0">Shipping Address</h4>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="collapse"
                                        data-bs-target="#edit-address-2" aria-expanded="false">Edit<i
                                            class="fas fa-chevron-right ms-1"></i></a>
                                </div>
                                <div id="edit-address-2" class="collapse">
                                    <div class="primary-soft-dark p-4 text-body mb-4">
                                        <form>
                                            <label class="mb-1">First name&nbsp; <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="first-name" value="John"
                                                class="form-control mb-5 rounded-0" required="required">
                                            <label class="mb-1">Last name&nbsp; <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="last-name" value="deo"
                                                class="form-control mb-5 rounded-0" required="required">
                                            <label class="mb-1">Company name (optional)</label>
                                            <input type="text" name="last-name" value="Iqonic Design"
                                                class="form-control mb-5 rounded-0">
                                            <label class="mb-1">Country / Region &nbsp; <span
                                                    class="text-danger">*</span></label>
                                            <div class="mb-5">
                                                <select class="select2-basic-single js-states" aria-label="select country"
                                                    required="required">
                                                    <option value="" selected>Choose a country</option>
                                                    <option value="1">India</option>
                                                    <option value="2">United Kingdom</option>
                                                    <option value="3">United States</option>
                                                    <option value="4">Australia</option>
                                                    <option value="5">North Corea</option>
                                                </select>
                                            </div>
                                            <label class="mb-1">Street address&nbsp; <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="address"
                                                placeholder="House number and street name" value="4517 Kentucky"
                                                class="form-control mb-3 rounded-0" required="required">
                                            <input type="text" name="address"
                                                placeholder="Apartment, suite, unit, etc. (optional)"
                                                class="form-control mb-5 rounded-0">
                                            <label class="mb-1">Town / City&nbsp; <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="city" value="Navsari"
                                                class="form-control mb-5 rounded-0" required="required">
                                            <label class="mb-1">State&nbsp; <span class="text-danger">*</span></label>
                                            <div class="mb-5">
                                                <select class="select2-basic-single js-states" aria-label="select state">
                                                    <option value="" selected>Choose a State</option>
                                                    <option value="1">Gujarat</option>
                                                    <option value="2">Delhi</option>
                                                    <option value="3">Goa</option>
                                                    <option value="4">Haryana</option>
                                                    <option value="5">Ladakh</option>
                                                </select>
                                            </div>
                                            <label class="mb-1">PIN code&nbsp; <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="pin code" value="396321"
                                                class="form-control mb-5 rounded-0" required="required">
                                            <label class="mb-1">Phone&nbsp; <span class="text-danger">*</span></label>
                                            <input type="tel" name="number" value="1234567890"
                                                class="form-control mb-5 rounded-0" required="required">
                                            <label class="mb-1">Email address&nbsp; <span
                                                    class="text-danger">*</span></label>
                                            <input type="email" name="email" value="johndeo@gmail.com"
                                                class="form-control mb-5 rounded-0" required="required">
                                            <div class="iq-btn-container button-primary">
                                                <button type="submit" class="iq-button text-capitalize border-0">
                                                    <span class="iq-btn-text-holder position-relative">Save
                                                        Address</span>
                                                    <span class="iq-btn-icon-holder">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                            height="10" viewBox="0 0 8 8" fill="none">
                                                            <path
                                                                d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="edit-address w-100">
                                        <tr>
                                            <td class="label-name p-2">Name</td>
                                            <td class="seprator p-2"><span>:</span></td>
                                            <td class="p-2">john deo</td>
                                        </tr>
                                        <tr>
                                            <td class="label-name p-2">Company</td>
                                            <td class="seprator p-2"><span>:</span></td>
                                            <td class="p-2">Iqonic Design</td>
                                        </tr>
                                        <tr>
                                            <td class="label-name p-2">Country</td>
                                            <td class="seprator p-2"><span>:</span></td>
                                            <td class="p-2">India</td>
                                        </tr>
                                        <tr>
                                            <td class="label-name p-2">Address</td>
                                            <td class="seprator p-2"><span>:</span></td>
                                            <td class="p-2">4517 Washington Ave, Manchester.</td>
                                        </tr>
                                        <tr>
                                            <td class="label-name p-2">E-mail</td>
                                            <td class="seprator p-2"><span>:</span></td>
                                            <td class="p-2">johndeo@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td class="label-name p-2">Phone</td>
                                            <td class="seprator p-2"><span>:</span></td>
                                            <td class="p-2">1234567890</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-details" role="tabpanel">
                            <div class="bg-primary-subtle p-4 text-body">
                                <form>
                                    <label class="mb-1">First name&nbsp; <span class="text-danger">*</span></label>
                                    <input type="text" name="first-name" value="John"
                                        class="form-control mb-5 rounded-0" required="required">
                                    <label class="mb-1">Last name&nbsp; <span class="text-danger">*</span></label>
                                    <input type="text" name="last-name" value="deo"
                                        class="form-control mb-5 rounded-0" required="required">
                                    <label class="mb-1">Display name&nbsp; <span class="text-danger">*</span></label>
                                    <input type="text" name="display-name" value="John"
                                        class="form-control rounded-0" required="required">
                                    <em class="d-block mb-5">This will be how your name will be displayed in the
                                        account
                                        section and in reviews</em>
                                    <label class="mb-1">Email address&nbsp; <span class="text-danger">*</span></label>
                                    <input type="email" name="email" value="johndeo@gmail.com"
                                        class="form-control mb-5 rounded-0" required="required">
                                    <h4 class="fw-normal mb-5">Password change</h4>
                                    <label class="mb-1">Current password (leave blank to leave
                                        unchanged)</label>
                                    <input type="password" name="password" class="form-control mb-5 rounded-0">
                                    <label class="mb-1">New password (leave blank to leave unchanged)</label>
                                    <input type="password" name="password" class="form-control mb-5 rounded-0">
                                    <label class="mb-1">Confirm new password</label>
                                    <input type="password" name="password" class="form-control mb-5 rounded-0">
                                    <div class="iq-btn-container button-primary">
                                        <button type="submit" class="iq-button text-capitalize border-0">
                                            <span class="iq-btn-text-holder position-relative">Save changes</span>
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
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="logout" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-5 text-primary">Login</h4>
                                    <form method="post">
                                        <input type="text" name="user-name" class="form-control mb-4 rounded-0"
                                            placeholder="Username or email address *" required>
                                        <input type="password" name="pwd" class="form-control mb-4 rounded-0"
                                            placeholder="Password" required>
                                        <label class="custom-form-field mb-5">
                                            <input type="checkbox" required="required" class="mr-2">
                                            <span class="checkmark"></span>
                                            <span>Remember me</span>
                                        </label>
                                        <div class="iq-btn-container button-primary">
                                            <button type="submit" class="iq-button text-capitalize border-0 mb-3">
                                                <span class="iq-btn-text-holder position-relative">log in</span>
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
                                    </form>
                                    <a href="reset-password.html" class="forgot-pwd text-primary">Lost your
                                        password?</a>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-5 mt-5 mt-lg-0 mt-md-0 text-primary">Register</h4>
                                    <form method="post">
                                        <input type="text" name="user-name" placeholder="Username *"
                                            class="form-control mb-4 rounded-0" required>
                                        <input type="email" name="email-address" placeholder="Email address *"
                                            pattern="^[a-zA-Z0-9._%+-]+@gmail\.com$" class="form-control mb-4 rounded-0"
                                            required>
                                        <input type="password" name="password" placeholder="Password *"
                                            class="form-control mb-4 rounded-0" required>
                                        <p class="mb-5"> Your personal data will be used to support your
                                            experience
                                            throughout this
                                            website, to manage access to your account, and for other purposes
                                            described in
                                            our <a href="{{ asset('website') }}/privacy-policy.html"> privcy policy</a>.
                                        </p>
                                        <div class="button-primary">
                                            <button type="submit" class="iq-button text-capitalize border-0">
                                                <span class="iq-btn-text-holder position-relative">register</span>
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
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
