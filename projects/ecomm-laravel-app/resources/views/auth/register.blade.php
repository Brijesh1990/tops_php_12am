@extends('layouts.app')

@section('title', 'Register')

@section('content')

{{-- AOS CSS --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
    body {
        background: linear-gradient(135deg, #eef2ff 0%, #f8fafc 45%, #e0f2fe 100%);
        min-height: 100vh;
    }

    .register-wrapper {
        min-height: calc(100vh - 80px);
        display: flex;
        align-items: center;
        padding: 40px 15px;
    }

    .register-container {
        max-width: 1100px;
        width: 100%;
        margin: auto;
    }

    .register-card {
        border: 0;
        border-radius: 28px;
        overflow: hidden;
        background: rgba(255, 255, 255, 0.95);
        box-shadow: 0 25px 70px rgba(15, 23, 42, 0.15);
    }

    /* LEFT SIDE */
    .register-left {
        min-height: 650px;
        padding: 50px 40px;
        background: linear-gradient(
            145deg,
            #4f46e5,
            #6366f1 45%,
            #7c3aed
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

    .register-left::before {
        content: "";
        position: absolute;
        width: 280px;
        height: 280px;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 50%;
        top: -100px;
        left: -100px;
    }

    .register-left::after {
        content: "";
        position: absolute;
        width: 350px;
        height: 350px;
        background: rgba(255, 255, 255, 0.06);
        border-radius: 50%;
        bottom: -180px;
        right: -150px;
    }

    .register-image {
        width: 280px;
        max-width: 90%;
        border-radius: 20px;
        margin-bottom: 30px;
        position: relative;
        z-index: 2;
        filter: drop-shadow(0 20px 25px rgba(0, 0, 0, 0.18));
        animation: floating 4s ease-in-out infinite;
    }

    .register-left h1 {
        font-size: 38px;
        font-weight: 800;
        position: relative;
        z-index: 2;
    }

    .register-left p {
        font-size: 16px;
        line-height: 1.7;
        max-width: 420px;
        opacity: 0.9;
        position: relative;
        z-index: 2;
    }

    .feature-badge {
        margin-top: 25px;
        padding: 10px 18px;
        border-radius: 50px;
        background: rgba(255, 255, 255, 0.13);
        backdrop-filter: blur(10px);
        font-size: 14px;
        position: relative;
        z-index: 2;
    }

    /* RIGHT SIDE */
    .register-right {
        padding: 50px 45px;
    }

    .register-header h2 {
        font-size: 32px;
        font-weight: 800;
        color: #111827;
        margin-bottom: 8px;
    }

    .register-header p {
        color: #6b7280;
        margin-bottom: 30px;
    }

    .form-label {
        font-weight: 600;
        color: #374151;
        margin-bottom: 8px;
    }

    .input-group-custom {
        position: relative;
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
        background: #fff;
        box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.10);
    }

    .password-input {
        padding-right: 48px;
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

    .register-btn {
        height: 54px;
        border: 0;
        border-radius: 13px;
        font-size: 16px;
        font-weight: 700;
        background: linear-gradient(
            135deg,
            #4f46e5,
            #7c3aed
        );
        transition: all 0.3s ease;
        box-shadow: 0 10px 25px rgba(79, 70, 229, 0.25);
    }

    .register-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(79, 70, 229, 0.35);
        background: linear-gradient(
            135deg,
            #4338ca,
            #6d28d9
        );
    }

    .login-text {
        color: #6b7280;
        font-size: 14px;
    }

    .login-text a {
        color: #4f46e5;
        font-weight: 700;
        text-decoration: none;
    }

    .login-text a:hover {
        text-decoration: underline;
    }

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

    @keyframes floating {
        0%, 100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-12px);
        }
    }

    /* TABLET */
    @media (max-width: 991px) {
        .register-left {
            min-height: 500px;
            padding: 40px 30px;
        }

        .register-image {
            width: 230px;
        }

        .register-left h1 {
            font-size: 32px;
        }

        .register-right {
            padding: 40px 30px;
        }
    }

    /* MOBILE */
    @media (max-width: 767px) {
        .register-wrapper {
            padding: 20px 12px;
        }

        .register-card {
            border-radius: 20px;
        }

        .register-left {
            min-height: auto;
            padding: 40px 25px;
        }

        .register-image {
            width: 200px;
            margin-bottom: 20px;
        }

        .register-left h1 {
            font-size: 28px;
        }

        .register-left p {
            font-size: 14px;
        }

        .feature-badge {
            margin-top: 15px;
        }

        .register-right {
            padding: 35px 22px;
        }

        .register-header h2 {
            font-size: 27px;
        }
    }

    @media (max-width: 400px) {
        .register-right {
            padding: 30px 18px;
        }

        .register-left {
            padding: 35px 20px;
        }

        .register-image {
            width: 175px;
        }
    }
</style>

<div class="register-wrapper">

    <div class="register-container">

        <div class="register-card">

            <div class="row g-0">

                {{-- LEFT ANIMATED SECTION --}}
                <div
                    class="col-lg-6 register-left"
                    data-aos="fade-right"
                    data-aos-duration="1000">

                    {{-- Replace this GIF URL with your own GIF if needed --}}
                    <img
                        src="https://media.giphy.com/media/3oKIPtjElfqwMOTbH2/giphy.gif"
                        alt="Create Account"
                        class="register-image"
                        data-aos="zoom-in"
                        data-aos-delay="300">

                    <h1 data-aos="fade-up" data-aos-delay="450">
                        Join Us Today!
                    </h1>

                    <p
                        data-aos="fade-up"
                        data-aos-delay="550">
                        Create your account and become part of our growing
                        community. It only takes a few seconds to get started.
                    </p>

                    <div
                        class="feature-badge"
                        data-aos="fade-up"
                        data-aos-delay="650">
                        ✨ Simple &nbsp; • &nbsp; Secure &nbsp; • &nbsp; Fast
                    </div>

                </div>


                {{-- RIGHT REGISTER FORM --}}
                <div
                    class="col-lg-6 register-right"
                    data-aos="fade-left"
                    data-aos-duration="1000">

                    <div
                        class="register-header"
                        data-aos="fade-down"
                        data-aos-delay="200">

                        <h2>
                            Create Account
                        </h2>

                        <p>
                            Fill in your details to create your account.
                        </p>

                    </div>


                    <form
                        action="{{ route('register.store') }}"
                        method="POST">

                        @csrf


                        {{-- NAME --}}
                        <div
                            class="mb-3"
                            data-aos="fade-up"
                            data-aos-delay="300">

                            <label class="form-label">
                                Name
                            </label>

                            <input
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                class="form-control"
                                placeholder="Enter name">

                        </div>


                        {{-- EMAIL --}}
                        <div
                            class="mb-3"
                            data-aos="fade-up"
                            data-aos-delay="400">

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
                            class="mb-3"
                            data-aos="fade-up"
                            data-aos-delay="500">

                            <label class="form-label">
                                Password
                            </label>

                            <div class="input-group-custom">

                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    class="form-control password-input"
                                    placeholder="Enter password">

                                <button
                                    type="button"
                                    class="toggle-password"
                                    onclick="togglePassword('password', this)"
                                    aria-label="Show password">

                                    <i class="bi bi-eye"></i>

                                </button>

                            </div>

                        </div>


                        {{-- CONFIRM PASSWORD --}}
                        <div
                            class="mb-4"
                            data-aos="fade-up"
                            data-aos-delay="600">

                            <label class="form-label">
                                Confirm Password
                            </label>

                            <div class="input-group-custom">

                                <input
                                    type="password"
                                    name="password_confirmation"
                                    id="password_confirmation"
                                    class="form-control password-input"
                                    placeholder="Confirm password">

                                <button
                                    type="button"
                                    class="toggle-password"
                                    onclick="togglePassword('password_confirmation', this)"
                                    aria-label="Show password">

                                    <i class="bi bi-eye"></i>

                                </button>

                            </div>

                        </div>


                        {{-- REGISTER BUTTON --}}
                        <div
                            data-aos="fade-up"
                            data-aos-delay="700">

                            <button
                                type="submit"
                                class="btn btn-primary register-btn w-100">

                                <i class="bi bi-person-plus me-2"></i>
                                Register

                            </button>

                        </div>

                    </form>


                    <div
                        class="divider"
                        data-aos="fade-in"
                        data-aos-delay="750">

                        OR

                    </div>


                    <p
                        class="text-center login-text mb-0"
                        data-aos="fade-up"
                        data-aos-delay="800">

                        Already have an account?

                        <a href="{{ route('login') }}">
                            Login
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

    function togglePassword(inputId, button) {

        const input = document.getElementById(inputId);
        const icon = button.querySelector('i');

        if (input.type === 'password') {

            input.type = 'text';

            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');

        } else {

            input.type = 'password';

            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');

        }
    }
</script>

@endsection