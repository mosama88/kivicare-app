@extends('website.auth.layouts.master')
@section('title', __('navbar.Sign_up'))

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row mb-3">
            <div class="custom-form-field col-6">
                <label for="username">First Name&nbsp;<span>*</span></label>
                <input type="text" name="first_name" value="{{ old('first_name') }}"
                    class="form-control @error('first_name') is-invalid @enderror mb-5" title="First Name (e.g., Mohamed">
                @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="custom-form-field col-6">
                <label for="username">Last Name&nbsp;<span>*</span></label>
                <input type="text" name="last_name" value="{{ old('last_name') }}"
                    class="form-control @error('last_name') is-invalid @enderror mb-5" title="Last Name (e.g., Osama">
                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="custom-form-field mb-3">
            <label for="username">Mobile &nbsp;<span>*</span></label>
            <input type="text" name="mobile" value="{{ old('mobile') }}"
                class="form-control @error('mobile') is-invalid @enderror mb-5"
                title="Please enter a valid mobile number (e.g., 01xxxxxxxx">
            @error('mobile')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="custom-form-field mb-3">
            <label for="username">Email &nbsp;<span>*</span></label>
            <input type="email" name="email" value="{{ old('email') }}"
                class="form-control @error('email') is-invalid @enderror mb-5" pattern="^[a-zA-Z0-9._%+-]+@gmail\.com$"
                title="Please enter a valid Gmail address (e.g., example@gmail.com)">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="custom-form-field mb-3">
            <label for="password">Password&nbsp; <span>*</span>
            </label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror mb-5">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="custom-form-field mb-3">
            <label for="password">Confirm Password&nbsp; <span>*</span>
            </label>
            <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror
                mb-5">
            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="iq-btn-container">
            <button type="submit" class="iq-button text-capitalize border-0">
                <span class="iq-btn-text-holder position-relative">{{ __('navbar.Sign_up') }}</span>
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
        <p class="my-0 text-capitalize">Already have account.</p>
        <h5 class="sign_up_btn mb-0">
            <div class="iq-btn-container">
                <a class="iq-button iq-btn-link text-capitalize" href="{{ route('login') }}">
                    sign in
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
