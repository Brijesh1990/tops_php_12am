@extends('layouts.app')

@section('title', 'Login')

@section('content')

{{-- AOS CSS --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
    body {
        background: linear-gradient(
            135deg,
            #eef2ff 0%,
            #f8fafc 45%,
            #e0f2fe 100%
        );
        min-height: 100vh;
    }

    .login-wrapper {
        min-height: calc(100vh - 80px);
        display: flex;
        align-items: center;
        padding: 40px 15px;
    }

    .login-container {
        max-width: 1100px;
        width: 100%;
        margin: auto;
    }

    .login-card {
        border: 0;
        border-radius: 28px;
        overflow: hidden;
        background: rgba(255, 255, 255, 0.96);
        box-shadow: 0 25px 70px rgba(15, 23, 42, 0.15);
    }

    /* LEFT SECTION */
    .login-left {
        min-height: 600px;
        padding: 50px 40px;

        background: linear-gradient(
            145deg,
            #111827,
            #1e293b 50%,
            #312e81
        );

        color: white;
        position: relative;
        overflow: hidden;

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        text-align: center;
    }

    .login-left::before {
        content: "";
        position: absolute;

        width: 300px;
        height: 300px;

        background: rgba(99, 102, 241, 0.15);

        border-radius: 50%;

        top: -120px;
        left: -120px;
    }

    .login-left::after {
        content: "";
        position: absolute;

        width: 380px;
        height: 380px;

        background: rgba(129, 140, 248, 0.10);

        border-radius: 50%;

        right: -180px;
        bottom: -180px;
    }

    .login-image {
        width: 280px;
        max-width: 90%;

        border-radius: 20px;

        margin-bottom: 30px;

        position: relative;
        z-index: 2;

        filter:
            drop-shadow(
                0 20px 25px rgba(0, 0, 0, 0.30)
            );

        animation: floating 4s ease-in-out infinite;
    }

    .login-left h1 {
        font-size: 38px;
        font-weight: 800;

        position: relative;
        z-index: 2;
    }

    .login-left p {
        font-size: 16px;
        line-height: 1.7;

        max-width: 420px;

        opacity: 0.85;

        position: relative;
        z-index: 2;
    }

    .login-badge {
        margin-top: 25px;

        padding: 10px 20px;

        border-radius: 50px;

        background: rgba(255, 255, 255, 0.10);

        border: 1px solid rgba(255, 255, 255, 0.15);

        backdrop-filter: blur(10px);

        font-size: 14px;

        position: relative;
        z-index: 2;
    }


    /* RIGHT SECTION */

    .login-right {
        padding: 50px 45px;
    }

    .login-header h2 {
        font-size: 32px;

        font-weight: 800;

        color: #111827;

        margin-bottom: 8px;
    }

    .login-header p {
        color: #6b7280;

        margin-bottom: 30px;
    }


    /* FORM */

    .form-label {
        font-weight: 600;

        color: #374151;

        margin-bottom: 8px;
    }

    .form-control {
        height: 52px;

        border: 1px solid #e5e7eb;

        border-radius: 13px;

        padding: 0 16px;

        background: #f9fafb;

        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #6366f1;

        background: #ffffff;

        box-shadow:
            0 0 0 4px
            rgba(99, 102, 241, 0.10);
    }

    .password-wrapper {
        position: relative;
    }

    .password-input {
        padding-right: 50px;
    }

    .toggle-password {
        position: absolute;

        right: 15px;

        top: 50%;

        transform: translateY(-50%);

        border: 0;

        background: transparent;

        color: #6b7280;

        cursor: pointer;

        z-index: 5;
    }

    .toggle-password:hover {
        color: #4f46e5;
    }


    /* LOGIN BUTTON */

    .login-btn {
        height: 54px;

        border: 0;

        border-radius: 13px;

        font-size: 16px;

        font-weight: 700;

        background:
            linear-gradient(
                135deg,
                #111827,
                #312e81
            );

        transition: all 0.3s ease;

        box-shadow:
            0 10px 25px
            rgba(17, 24, 39, 0.22);
    }

    .login-btn:hover {
        transform: translateY(-3px);

        background:
            linear-gradient(
                135deg,
                #030712,
                #4338ca
            );

        box-shadow:
            0 15px 30px
            rgba(17, 24, 39, 0.30);
    }


    /* DIVIDER */

    .divider {
        display: flex;

        align-items: center;

        gap: 12px;

        margin: 25px 0;

        color: #9ca3af;

        font-size: 13px;
    }

    .divider::before,
    .divider::after {
        content: "";

        height: 1px;

        flex: 1;

        background: #e5e7eb;
    }


    /* REGISTER TEXT */

    .register-text {
        color: #6b7280;

        font-size: 14px;
    }

    .register-text a {
        color: #4f46e5;

        font-weight: 700;

        text-decoration: none;
    }

    .register-text a:hover {
        text-decoration: underline;
    }


    /* FLOATING ANIMATION */

    @keyframes floating {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-12px);
        }
    }


    /* TABLET */

    @media (max-width: 991px) {

        .login-left {
            min-height: 500px;

            padding: 40px 30px;
        }

        .login-image {
            width: 230px;
        }

        .login-left h1 {
            font-size: 32px;
        }

        .login-right {
            padding: 40px 30px;
        }
    }


    /* MOBILE */

    @media (max-width: 767px) {

        .login-wrapper {
            padding: 20px 12px;
        }

        .login-card {
            border-radius: 20px;
        }

        .login-left {
            min-height: auto;

            padding: 40px 25px;
        }

        .login-image {
            width: 200px;

            margin-bottom: 20px;
        }

        .login-left h1 {
            font-size: 28px;
        }

        .login-left p {
            font-size: 14px;
        }

        .login-badge {
            margin-top: 15px;
        }

        .login-right {
            padding: 35px 22px;
        }

        .login-header h2 {
            font-size: 27px;
        }
    }


    /* SMALL MOBILE */

    @media (max-width: 400px) {

        .login-right {
            padding: 30px 18px;
        }

        .login-left {
            padding: 35px 20px;
        }

        .login-image {
            width: 175px;
        }
    }
</style>


<div class="login-wrapper">

    <div class="login-container">

        <div class="login-card">

            <div class="row g-0">


                {{-- LEFT ANIMATED SECTION --}}

                <div
                    class="col-lg-6 login-left"
                    data-aos="fade-right"
                    data-aos-duration="1000">

                    <img
                        src="https://media.giphy.com/media/l0MYt5jPR6QX5pnqM/giphy.gif"
                        alt="Welcome Back"
                        class="login-image"
                        data-aos="zoom-in"
                        data-aos-delay="300">


                    <h1
                        data-aos="fade-up"
                        data-aos-delay="450">

                        Welcome Back!

                    </h1>


                    <p
                        data-aos="fade-up"
                        data-aos-delay="550">

                        Login to your account and continue
                        where you left off. We're happy to
                        have you back!

                    </p>


                    <div
                        class="login-badge"
                        data-aos="fade-up"
                        data-aos-delay="650">

                        🔐 Secure &nbsp; • &nbsp;
                        ⚡ Fast &nbsp; • &nbsp;
                        ✨ Simple

                    </div>

                </div>


                {{-- RIGHT LOGIN SECTION --}}

                <div
                    class="col-lg-6 login-right"
                    data-aos="fade-left"
                    data-aos-duration="1000">


                    <div
                        class="login-header"
                        data-aos="fade-down"
                        data-aos-delay="200">

                        <h2>
                            Welcome Back
                        </h2>

                        <p>
                            Sign in to continue to your account.
                        </p>

                    </div>


                    <form
                        action="{{ route('login.store') }}"
                        method="POST">

                        @csrf


                        {{-- EMAIL --}}

                        <div
                            class="mb-3"
                            data-aos="fade-up"
                            data-aos-delay="300">

                            <label class="form-label">

                                Email

                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                class="form-control"
                                placeholder="Enter email">

                        </div>


                        {{-- PASSWORD --}}

                        <div
                            class="mb-4"
                            data-aos="fade-up"
                            data-aos-delay="400">

                            <label class="form-label">

                                Password

                            </label>

                            <div class="password-wrapper">

                                <input
                                    type="password"
                                    name="password"
                                    id="loginPassword"
                                    class="form-control password-input"
                                    placeholder="Enter password">


                                <button
                                    type="button"
                                    class="toggle-password"
                                    onclick="toggleLoginPassword()"
                                    aria-label="Show password">

                                    <i
                                        id="passwordIcon"
                                        class="bi bi-eye">
                                    </i>

                                </button>

                            </div>

                        </div>


                        {{-- LOGIN BUTTON --}}

                        <div
                            data-aos="fade-up"
                            data-aos-delay="500">

                            <button
                                type="submit"
                                class="btn btn-dark login-btn w-100">

                                <i class="bi bi-box-arrow-in-right me-2"></i>

                                Login

                            </button>

                        </div>

                    </form>


                    <div
                        class="divider"
                        data-aos="fade-in"
                        data-aos-delay="600">

                        OR

                    </div>


                    <p
                        class="text-center register-text mb-0"
                        data-aos="fade-up"
                        data-aos-delay="700">

                        Don't have an account?

                        <a href="{{ route('register') }}">

                            Register

                        </a>

                    </p>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- Bootstrap Icons --}}

<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


{{-- AOS JS --}}

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script>

    AOS.init({

        duration: 800,

        easing: 'ease-out-cubic',

        once: true,

        offset: 80

    });


    function toggleLoginPassword() {

        const password =
            document.getElementById('loginPassword');

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