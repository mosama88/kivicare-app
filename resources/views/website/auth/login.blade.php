@extends('website.auth.layouts.master')
@section('title', __('navbar.Sign_in'))

@section('content')
    <form method="post">
        <div class="custom-form-field">
            <label for="username">Username or email
                address&nbsp;<span>*</span></label>
            <input type="email" name="user-name" class="form-control mb-5" required pattern="^[a-zA-Z0-9._%+-]+@gmail\.com$"
                title="Please enter a valid Gmail address (e.g., example@gmail.com)">
        </div>
        <div class="custom-form-field">
            <label for="password">Password&nbsp; <span>*</span>
            </label>
            <input type="password" name="pwd" class="form-control mb-5" required>
        </div>
        <div class="flex-column flex-sm-row d-flex align-items-start justify-content-between mb-5 gap-2">
            <label class="custom-form-field">
                <input type="checkbox" required="required" class="mr-2">
                <span class="checkmark"></span>
                <span>Remember me</span>
            </label>
            <a href="reset-password.html" class="forgot-pwd">Forgot
                Password?</a>
        </div>
        <div class="iq-btn-container">
            <button type="submit" class="iq-button text-capitalize border-0">
                <span class="iq-btn-text-holder position-relative">{{__('navbar.Sign_in')}}</span>
                <span class="iq-btn-icon-holder">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 8 8" fill="none">
                        <path
                            d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                            fill="currentColor"></path>
                    </svg>
                </span>
            </button>
        </div>
    </form>
    <div class="d-flex align-items-center mt-5 flex-wrap gap-2">
        <p class="my-0 text-capitalize">Don't have an account yet?</p>
        <h5 class="sign_up_btn mb-0">
            <div class="iq-btn-container">
                <a class="iq-button iq-btn-link text-capitalize" href="{{route('register')}}">
                    sign up
                    <span class="btn-link-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 8 8"
                            fill="none">
                            <path
                                d="M7.32046 4.70834H4.74952V7.25698C4.74952 7.66734 4.41395 8 4 8C3.58605 8 3.25048 7.66734 3.25048 7.25698V4.70834H0.679545C0.293423 4.6687 0 4.34614 0 3.96132C0 3.5765 0.293423 3.25394 0.679545 3.21431H3.24242V0.673653C3.28241 0.290878 3.60778 0 3.99597 0C4.38416 0 4.70954 0.290878 4.74952 0.673653V3.21431H7.32046C7.70658 3.25394 8 3.5765 8 3.96132C8 4.34614 7.70658 4.6687 7.32046 4.70834Z"
                                fill="currentColor"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </h5>
    </div>
@endsection
