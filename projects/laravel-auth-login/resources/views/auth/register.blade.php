@extends('layouts.app')

@section('content')

<div class="container-fluid bg-light min-vh-100 py-5">

    <div class="container">

        <div class="row align-items-center g-4">


            {{-- =====================================================
                LEFT SIDE - IMAGE GRID
            ====================================================== --}}

            <div class="col-lg-7">

                <div class="row g-3">


                    {{-- =================================================
                        LARGE IMAGE
                    ================================================== --}}

                    <div class="col-12"
                         data-aos="zoom-in"
                         data-aos-duration="900">

                        <div class="card border-0 shadow-sm overflow-hidden">

                            <div class="ratio ratio-16x9 position-relative">

                                <img src="{{ asset('images/vrud-operations1.png') }}"
                                     class="img-fluid object-fit-cover"
                                     alt="VRUD Operations">

                                {{-- Overlay --}}

                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25">
                                </div>

                                {{-- Content --}}

                                <div class="position-absolute bottom-0 start-0 w-100 p-4 text-white">

                                    <h3 class="fw-bold mb-2">
                                        Manage Operations Smarter
                                    </h3>

                                    <p class="mb-0">
                                        Monitor teams, vehicles and daily
                                        operations from one centralized platform.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                        SECOND IMAGE
                    ================================================== --}}

                    <div class="col-md-6"
                         data-aos="fade-up"
                         data-aos-duration="900"
                         data-aos-delay="200">

                        <div class="card border-0 shadow-sm overflow-hidden">

                            <div class="ratio ratio-4x3 position-relative">

                                <img src="{{ asset('images/vrud-operations1.png') }}"
                                     class="img-fluid object-fit-cover"
                                     alt="VRUD Team">

                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25">
                                </div>

                                <div class="position-absolute bottom-0 start-0 w-100 p-3 text-white">

                                    <h5 class="fw-bold mb-1">
                                        Connected Teams
                                    </h5>

                                    <p class="small mb-0">
                                        Keep your teams coordinated.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                        THIRD IMAGE
                    ================================================== --}}

                    <div class="col-md-6"
                         data-aos="fade-up"
                         data-aos-duration="900"
                         data-aos-delay="400">

                        <div class="card border-0 shadow-sm overflow-hidden">

                            <div class="ratio ratio-4x3 position-relative">

                                <img src="{{ asset('images/vrud-operations.png') }}"
                                     class="img-fluid object-fit-cover"
                                     alt="VRUD Operations Management">

                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25">
                                </div>

                                <div class="position-absolute bottom-0 start-0 w-100 p-3 text-white">

                                    <h5 class="fw-bold mb-1">
                                        Real-Time Control
                                    </h5>

                                    <p class="small mb-0">
                                        Track operational activities efficiently.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>


                </div>

            </div>


            {{-- =====================================================
                RIGHT SIDE - REGISTER FORM
            ====================================================== --}}

            <div class="col-lg-5"
                 data-aos="fade-left"
                 data-aos-duration="900"
                 data-aos-delay="200">


                <div class="card border-0 shadow-sm rounded-4">

                    <div class="card-body p-4 p-md-5">


                        {{-- Icon --}}

                        <div class="d-flex align-items-center justify-content-center
                                    bg-primary bg-opacity-10 text-primary
                                    rounded-circle mb-3 mx-auto"
                             style="width:60px;height:60px;">

                            <i class="bi bi-person-plus-fill fs-3"></i>

                        </div>


                        {{-- Heading --}}

                        <div class="text-center mb-4">

                            <h1 class="h2 fw-bold text-dark mb-2">
                                Create Account
                            </h1>

                            <p class="text-muted mb-0">
                                Register to access the VRUD Operations platform.
                            </p>

                        </div>


                        {{-- =================================================
                            FORM
                        ================================================== --}}

                        <form method="POST"
                              action="{{ route('register') }}">

                            @csrf


                            {{-- NAME --}}

                            <div class="mb-3">

                                <label for="name"
                                       class="form-label fw-semibold">

                                    {{ __('Name') }}

                                </label>

                                <div class="input-group">

                                    <span class="input-group-text bg-white">

                                        <i class="bi bi-person"></i>

                                    </span>

                                    <input id="name"
                                           type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           name="name"
                                           value="{{ old('name') }}"
                                           required
                                           autocomplete="name"
                                           autofocus
                                           placeholder="Enter your full name">

                                    @error('name')

                                        <div class="invalid-feedback">

                                            <strong>
                                                {{ $message }}
                                            </strong>

                                        </div>

                                    @enderror

                                </div>

                            </div>


                            {{-- EMAIL --}}

                            <div class="mb-3">

                                <label for="email"
                                       class="form-label fw-semibold">

                                    {{ __('Email Address') }}

                                </label>

                                <div class="input-group">

                                    <span class="input-group-text bg-white">

                                        <i class="bi bi-envelope"></i>

                                    </span>

                                    <input id="email"
                                           type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           name="email"
                                           value="{{ old('email') }}"
                                           required
                                           autocomplete="email"
                                           placeholder="Enter your email address">

                                    @error('email')

                                        <div class="invalid-feedback">

                                            <strong>
                                                {{ $message }}
                                            </strong>

                                        </div>

                                    @enderror

                                </div>

                            </div>


                            {{-- PASSWORD --}}

                            <div class="mb-3">

                                <label for="password"
                                       class="form-label fw-semibold">

                                    {{ __('Password') }}

                                </label>

                                <div class="input-group">

                                    <span class="input-group-text bg-white">

                                        <i class="bi bi-lock"></i>

                                    </span>

                                    <input id="password"
                                           type="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           name="password"
                                           required
                                           autocomplete="new-password"
                                           placeholder="Create a password">

                                    <button type="button"
                                            class="btn btn-outline-secondary"
                                            onclick="togglePassword('password', 'passwordIcon')">

                                        <i id="passwordIcon"
                                           class="bi bi-eye"></i>

                                    </button>

                                    @error('password')

                                        <div class="invalid-feedback">

                                            <strong>
                                                {{ $message }}
                                            </strong>

                                        </div>

                                    @enderror

                                </div>

                            </div>


                            {{-- CONFIRM PASSWORD --}}

                            <div class="mb-4">

                                <label for="password-confirm"
                                       class="form-label fw-semibold">

                                    {{ __('Confirm Password') }}

                                </label>

                                <div class="input-group">

                                    <span class="input-group-text bg-white">

                                        <i class="bi bi-shield-lock"></i>

                                    </span>

                                    <input id="password-confirm"
                                           type="password"
                                           class="form-control"
                                           name="password_confirmation"
                                           required
                                           autocomplete="new-password"
                                           placeholder="Confirm your password">

                                    <button type="button"
                                            class="btn btn-outline-secondary"
                                            onclick="togglePassword(
                                                'password-confirm',
                                                'confirmPasswordIcon'
                                            )">

                                        <i id="confirmPasswordIcon"
                                           class="bi bi-eye"></i>

                                    </button>

                                </div>

                            </div>


                            {{-- TERMS --}}

                            <div class="alert alert-light border small text-muted">

                                <i class="bi bi-info-circle me-1"></i>

                                By creating an account, you agree to the
                                platform's terms and conditions.

                            </div>


                            {{-- REGISTER BUTTON --}}

                            <button type="submit"
                                    class="btn btn-primary btn-lg w-100">

                                <i class="bi bi-person-plus me-2"></i>

                                {{ __('Create Account') }}

                            </button>


                        </form>


                        {{-- LOGIN --}}

                        <div class="text-center mt-4">

                            <span class="text-muted small">
                                Already have an account?
                            </span>

                            <a href="{{ route('login') }}"
                               class="link-primary text-decoration-none
                                      fw-semibold small ms-1">

                                Login

                            </a>

                        </div>


                    </div>

                </div>

            </div>


        </div>

    </div>

</div>


{{-- ==========================================================
     AOS
=========================================================== --}}

<link rel="stylesheet"
      href="https://unpkg.com/aos@2.3.4/dist/aos.css">


<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>


<script>

    document.addEventListener("DOMContentLoaded", function () {

        AOS.init({

            duration: 800,

            once: true,

            offset: 80,

            easing: "ease-out-cubic"

        });

    });


    function togglePassword(inputId, iconId) {

        const input = document.getElementById(inputId);

        const icon = document.getElementById(iconId);


        if (input.type === "password") {

            input.type = "text";

            icon.classList.remove("bi-eye");

            icon.classList.add("bi-eye-slash");

        } else {

            input.type = "password";

            icon.classList.remove("bi-eye-slash");

            icon.classList.add("bi-eye");

        }

    }

</script>

@endsection