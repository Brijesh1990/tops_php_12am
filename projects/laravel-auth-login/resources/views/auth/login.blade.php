@extends('layouts.app')

@section('content')

<div class="container-fluid bg-light min-vh-100 py-4 py-lg-5">

    <div class="container">

        <div class="row align-items-center g-4 g-lg-5">


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
                         data-aos-duration="900"
                         data-aos-delay="100">

                        <div class="card border-0 shadow-sm overflow-hidden rounded-4">

                            <div class="ratio ratio-16x9">

                                <img src="{{ asset('images/vrud-operations1.png') }}"
                                     class="img-fluid object-fit-cover"
                                     alt="VRUD Operations">

                            </div>

                            <div class="card-img-overlay d-flex flex-column justify-content-end text-white"
                                 style="background: linear-gradient(transparent, rgba(0,0,0,.75));">

                                <h3 class="fw-bold mb-1">
                                    Welcome to VRUD Operations
                                </h3>

                                <p class="mb-0">
                                    Manage your operations, teams and resources
                                    from one centralized platform.
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                         IMAGE 2
                    ================================================== --}}

                    <div class="col-md-6"
                         data-aos="fade-up"
                         data-aos-duration="900"
                         data-aos-delay="250">

                        <div class="card border-0 shadow-sm overflow-hidden rounded-4">

                            <div class="ratio ratio-4x3">

                                <img src="{{ asset('images/vrud-operations.png') }}"
                                     class="img-fluid object-fit-cover"
                                     alt="VRUD Team">

                            </div>

                            <div class="card-img-overlay d-flex flex-column justify-content-end text-white"
                                 style="background: linear-gradient(transparent, rgba(0,0,0,.75));">

                                <h5 class="fw-bold mb-1">
                                    Connected Teams
                                </h5>

                                <p class="small mb-0">
                                    Work together efficiently.
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                         IMAGE 3
                    ================================================== --}}

                    <div class="col-md-6"
                         data-aos="fade-up"
                         data-aos-duration="900"
                         data-aos-delay="400">

                        <div class="card border-0 shadow-sm overflow-hidden rounded-4">

                            <div class="ratio ratio-4x3">

                                <img src="{{ asset('images/vrud-operations1.png') }}"
                                     class="img-fluid object-fit-cover"
                                     alt="VRUD Operations">

                            </div>

                            <div class="card-img-overlay d-flex flex-column justify-content-end text-white"
                                 style="background: linear-gradient(transparent, rgba(0,0,0,.75));">

                                <h5 class="fw-bold mb-1">
                                    Operational Control
                                </h5>

                                <p class="small mb-0">
                                    Stay informed and organized.
                                </p>

                            </div>

                        </div>

                    </div>


                </div>

            </div>


            {{-- =====================================================
                 RIGHT SIDE - LOGIN FORM
            ====================================================== --}}

            <div class="col-lg-5"
                 data-aos="fade-left"
                 data-aos-duration="900"
                 data-aos-delay="150">


                <div class="card border-0 shadow-sm rounded-4">

                    <div class="card-body p-4 p-md-5">


                        {{-- =================================================
                             LOGIN ICON
                        ================================================== --}}

                        <div class="d-flex justify-content-center mb-3">

                            <div class="d-flex align-items-center justify-content-center
                                        bg-primary bg-opacity-10
                                        text-primary
                                        rounded-circle"
                                 style="width:64px;height:64px;">

                                <i class="bi bi-box-arrow-in-right fs-2"></i>

                            </div>

                        </div>


                        {{-- =================================================
                             HEADING
                        ================================================== --}}

                        <div class="text-center mb-4">

                            <h1 class="h2 fw-bold text-dark mb-2">
                                Welcome Back
                            </h1>

                            <p class="text-muted mb-0">
                                Sign in to continue to the
                                VRUD Operations platform.
                            </p>

                        </div>


                        {{-- =================================================
                             LOGIN FORM
                        ================================================== --}}

                        <form method="POST"
                              action="{{ route('login') }}">

                            @csrf


                            {{-- =============================================
                                 EMAIL
                            ============================================== --}}

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
                                           autofocus
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


                            {{-- =============================================
                                 PASSWORD
                            ============================================== --}}

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
                                           autocomplete="current-password"
                                           placeholder="Enter your password">


                                    <button type="button"
                                            class="btn btn-outline-secondary"
                                            onclick="togglePassword()">

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


                            {{-- =============================================
                                 REMEMBER + FORGOT PASSWORD
                            ============================================== --}}

                            <div class="d-flex justify-content-between
                                        align-items-center
                                        flex-wrap
                                        gap-2
                                        mb-4">


                                {{-- Remember Me --}}

                                <div class="form-check">

                                    <input class="form-check-input"
                                           type="checkbox"
                                           name="remember"
                                           id="remember"
                                           {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label"
                                           for="remember">

                                        {{ __('Remember Me') }}

                                    </label>

                                </div>


                                {{-- Forgot Password --}}

                                @if (Route::has('password.request'))

                                    <a href="{{ route('password.request') }}"
                                       class="link-primary text-decoration-none">

                                        {{ __('Forgot Password?') }}

                                    </a>

                                @endif


                            </div>


                            {{-- =============================================
                                 LOGIN BUTTON
                            ============================================== --}}

                            <button type="submit"
                                    class="btn btn-primary btn-lg w-100">

                                <i class="bi bi-box-arrow-in-right me-2"></i>

                                {{ __('Login') }}

                            </button>


                        </form>


                        {{-- =================================================
                             REGISTER
                        ================================================== --}}

                        @if (Route::has('register'))

                            <div class="text-center mt-4">

                                <span class="text-muted small">

                                    Don't have an account?

                                </span>


                                <a href="{{ route('register') }}"
                                   class="link-primary
                                          text-decoration-none
                                          fw-semibold
                                          small
                                          ms-1">

                                    Create Account

                                </a>

                            </div>

                        @endif


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


/* ==========================================================
   PASSWORD SHOW / HIDE
=========================================================== */

function togglePassword() {

    const password =
        document.getElementById('password');

    const icon =
        document.getElementById('passwordIcon');


    if (password.type === 'password') {

        password.type = 'text';

        icon.classList.remove('bi-eye');

        icon.classList.add('bi-eye-slash');

    } else {

        password.type = 'password';

        icon.classList.remove('bi-eye-slash');

        icon.classList.add('bi-eye');

    }

}

</script>

@endsection