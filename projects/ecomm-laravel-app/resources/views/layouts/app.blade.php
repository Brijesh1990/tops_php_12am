<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Ecommerce')
    </title>


    {{-- Bootstrap 5 --}}
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet">


    {{-- Bootstrap Icons --}}
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    {{-- AOS --}}
    <link
        href="https://unpkg.com/aos@2.3.1/dist/aos.css"
        rel="stylesheet">


    <style>

        /* =========================================
           GLOBAL
        ========================================= */

        :root {
            --primary: #4f46e5;
            --primary-dark: #3730a3;
            --secondary: #2563eb;
            --success: #059669;
            --dark: #0f172a;
            --text: #334155;
            --muted: #64748b;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;

            min-height: 100vh;

            font-family:
                Inter,
                -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                sans-serif;

            color: var(--text);

            background:
                linear-gradient(
                    135deg,
                    #eef2ff 0%,
                    #f8fafc 45%,
                    #e0f2fe 100%
                );

            background-attachment: fixed;
        }


        /* =========================================
           NAVBAR
        ========================================= */

        .main-navbar {
            position: sticky;

            top: 0;

            z-index: 1050;

            background:
                rgba(15, 23, 42, 0.92) !important;

            backdrop-filter: blur(18px);

            -webkit-backdrop-filter: blur(18px);

            border-bottom:
                1px solid
                rgba(255, 255, 255, 0.08);

            box-shadow:
                0 8px 30px
                rgba(15, 23, 42, 0.12);

            padding:
                12px 0;

            transition:
                all 0.3s ease;
        }


        /* BRAND */

        .brand-logo {
            display: inline-flex;

            align-items: center;

            gap: 10px;

            color: white !important;

            text-decoration: none;

            font-size: 21px;

            font-weight: 800;

            letter-spacing: -0.4px;

            transition:
                transform 0.3s ease;
        }

        .brand-logo:hover {
            transform: translateY(-2px);
        }

        .brand-icon {
            width: 40px;

            height: 40px;

            border-radius: 12px;

            display: flex;

            align-items: center;

            justify-content: center;

            background:
                linear-gradient(
                    135deg,
                    #6366f1,
                    #2563eb
                );

            color: white;

            font-size: 19px;

            box-shadow:
                0 8px 20px
                rgba(37, 99, 235, 0.25);
        }


        /* NAV LINKS */

        .main-navbar .navbar-nav {
            align-items: center;
        }

        .main-navbar .nav-link {
            position: relative;

            display: flex;

            align-items: center;

            gap: 7px;

            color:
                rgba(255, 255, 255, 0.72) !important;

            font-size: 14px;

            font-weight: 600;

            padding:
                9px 13px !important;

            border-radius: 10px;

            transition:
                all 0.25s ease;
        }

        .main-navbar .nav-link:hover {
            color: white !important;

            background:
                rgba(255, 255, 255, 0.08);

            transform:
                translateY(-1px);
        }


        /* ACTIVE STYLE */

        .main-navbar .nav-link::after {
            content: "";

            position: absolute;

            height: 2px;

            width: 0;

            left: 50%;

            bottom: 2px;

            transform:
                translateX(-50%);

            border-radius: 20px;

            background:
                linear-gradient(
                    90deg,
                    #818cf8,
                    #38bdf8
                );

            transition:
                width 0.3s ease;
        }

        .main-navbar .nav-link:hover::after {
            width: 35%;
        }


        /* USER */

        .user-greeting {
            display: flex;

            align-items: center;

            gap: 8px;

            color:
                rgba(255, 255, 255, 0.78);

            font-size: 13px;

            padding:
                7px 12px;

            border-radius: 10px;

            background:
                rgba(255, 255, 255, 0.05);
        }

        .user-avatar {
            width: 30px;

            height: 30px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

            color: white;

            background:
                linear-gradient(
                    135deg,
                    #6366f1,
                    #06b6d4
                );

            font-size: 13px;

            font-weight: 800;
        }


        /* LOGOUT */

        .logout-btn {
            border: 0;

            border-radius: 10px;

            padding:
                8px 15px;

            color: white;

            background:
                linear-gradient(
                    135deg,
                    #ef4444,
                    #dc2626
                );

            font-size: 13px;

            font-weight: 700;

            box-shadow:
                0 7px 16px
                rgba(220, 38, 38, 0.18);

            transition:
                all 0.3s ease;
        }

        .logout-btn:hover {
            color: white;

            transform:
                translateY(-2px);

            box-shadow:
                0 10px 22px
                rgba(220, 38, 38, 0.28);
        }


        /* LOGIN / REGISTER */

        .auth-login {
            color:
                rgba(255, 255, 255, 0.75) !important;
        }

        .auth-register {
            padding:
                8px 16px !important;

            color: white !important;

            background:
                linear-gradient(
                    135deg,
                    #4f46e5,
                    #2563eb
                ) !important;

            border-radius: 10px !important;

            box-shadow:
                0 7px 18px
                rgba(37, 99, 235, 0.20);
        }

        .auth-register:hover {
            transform:
                translateY(-2px) !important;

            box-shadow:
                0 11px 25px
                rgba(37, 99, 235, 0.30);
        }

        .auth-register::after {
            display: none !important;
        }


        /* =========================================
           MAIN CONTENT
        ========================================= */

        .main-content {
            width: 100%;

            min-height:
                calc(100vh - 70px);

            padding-top: 15px;

            padding-bottom: 50px;
        }


        /* =========================================
           ALERTS
        ========================================= */

        .custom-alert {
            border: 0;

            border-radius: 14px;

            padding:
                15px 18px;

            margin-bottom: 25px;

            box-shadow:
                0 8px 25px
                rgba(15, 23, 42, 0.07);

            animation:
                alertSlide 0.5s ease;
        }

        .custom-success {
            color: #166534;

            background:
                linear-gradient(
                    135deg,
                    #dcfce7,
                    #ecfdf5
                );
        }

        .custom-danger {
            color: #991b1b;

            background:
                linear-gradient(
                    135deg,
                    #fee2e2,
                    #fff1f2
                );
        }

        .custom-alert ul {
            padding-left: 20px;
        }


        @keyframes alertSlide {

            from {
                opacity: 0;

                transform:
                    translateY(-12px);
            }

            to {
                opacity: 1;

                transform:
                    translateY(0);
            }
        }


        /* =========================================
           NAVBAR TOGGLER
        ========================================= */

        .navbar-toggler {
            border:
                1px solid
                rgba(255, 255, 255, 0.15);

            border-radius: 10px;

            padding: 8px 10px;

            box-shadow: none !important;
        }

        .navbar-toggler:focus {
            box-shadow:
                0 0 0 3px
                rgba(99, 102, 241, 0.25) !important;
        }


        /* =========================================
           MOBILE NAVBAR
        ========================================= */

        @media (max-width: 991px) {

            .main-navbar {
                padding:
                    10px 0;
            }

            .main-navbar .navbar-collapse {
                margin-top: 15px;

                padding-top: 12px;

                border-top:
                    1px solid
                    rgba(255, 255, 255, 0.08);
            }

            .main-navbar .navbar-nav {
                align-items: stretch;
            }

            .main-navbar .nav-link {
                padding:
                    11px 13px !important;
            }

            .main-navbar .nav-link::after {
                display: none;
            }

            .user-greeting {
                margin-top: 10px;

                justify-content: flex-start;
            }

            .logout-btn {
                width: 100%;

                margin-top: 8px;
            }

            .auth-register {
                margin-top: 5px;

                text-align: center;

                justify-content: center;
            }
        }


        @media (max-width: 575px) {

            .brand-logo {
                font-size: 18px;
            }

            .brand-icon {
                width: 36px;

                height: 36px;

                font-size: 17px;
            }

            .main-content {
                padding-top: 10px;
            }
        }

    </style>

</head>


<body>


{{-- =================================================
     NAVBAR
================================================= --}}

<nav class="navbar navbar-expand-lg navbar-dark main-navbar">

    <div class="container">


        {{-- BRAND --}}

        <a
            class="navbar-brand brand-logo"
            href="{{ route('products.index') }}">

            <span class="brand-icon">

                <i class="bi bi-shop"></i>

            </span>

            Ecommerce

        </a>


        {{-- MOBILE BUTTON --}}

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>


        <div
            class="collapse navbar-collapse"
            id="navbarNav">


            {{-- LEFT MENU --}}

            <ul class="navbar-nav me-auto">


                @auth


                    {{-- PRODUCTS --}}

                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="{{ route('products.index') }}">

                            <i class="bi bi-grid"></i>

                            Products

                        </a>

                    </li>


                    {{-- CATEGORIES --}}

                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="{{ route('categories.index') }}">

                            <i class="bi bi-tags"></i>

                            Categories

                        </a>

                    </li>


                    {{-- CART --}}

                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="{{ route('cart.index') }}">

                            <i class="bi bi-cart3"></i>

                            Cart

                        </a>

                    </li>


                @endauth


            </ul>


            {{-- RIGHT MENU --}}

            <ul class="navbar-nav">


                @auth


                    {{-- USER --}}

                    <li class="nav-item">

                        <span class="nav-link user-greeting">

                            <span class="user-avatar">

                                {{ strtoupper(
                                    substr(
                                        Auth::user()->name,
                                        0,
                                        1
                                    )
                                ) }}

                            </span>

                            Hello,
                            {{ Auth::user()->name }}

                        </span>

                    </li>


                    {{-- LOGOUT --}}

                    <li class="nav-item">

                        <form
                            action="{{ route('logout') }}"
                            method="POST"
                            class="d-flex">

                            @csrf

                            <button
                                type="submit"
                                class="logout-btn">

                                <i class="bi bi-box-arrow-right me-1"></i>

                                Logout

                            </button>

                        </form>

                    </li>


                @else


                    {{-- LOGIN --}}

                    <li class="nav-item">

                        <a
                            class="nav-link auth-login"
                            href="{{ route('login') }}">

                            <i class="bi bi-box-arrow-in-right"></i>

                            Login

                        </a>

                    </li>


                    {{-- REGISTER --}}

                    <li class="nav-item">

                        <a
                            class="nav-link auth-register"
                            href="{{ route('register') }}">

                            <i class="bi bi-person-plus"></i>

                            Register

                        </a>

                    </li>


                @endauth


            </ul>


        </div>

    </div>

</nav>



{{-- =================================================
     MAIN CONTENT
================================================= --}}

<main class="main-content">

    <div class="container">


        {{-- SUCCESS MESSAGE --}}

        @if(session('success'))

            <div
                class="alert custom-alert custom-success alert-dismissible fade show"
                role="alert"
                data-aos="fade-down">

                <i class="bi bi-check-circle-fill me-2"></i>

                {{ session('success') }}

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
                </button>

            </div>

        @endif


        {{-- VALIDATION ERRORS --}}

        @if($errors->any())

            <div
                class="alert custom-alert custom-danger"
                data-aos="fade-down">

                <div class="fw-bold mb-2">

                    <i class="bi bi-exclamation-triangle-fill me-2"></i>

                    Please fix the following errors:

                </div>


                <ul class="mb-0">

                    @foreach($errors->all() as $error)

                        <li>

                            {{ $error }}

                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        {{-- PAGE CONTENT --}}

        @yield('content')


    </div>

</main>



{{-- Bootstrap JS --}}

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
</script>


{{-- AOS JS --}}

<script
    src="https://unpkg.com/aos@2.3.1/dist/aos.js">
</script>


<script>

    AOS.init({

        duration: 800,

        easing: 'ease-out-cubic',

        once: true,

        offset: 60

    });

</script>


</body>

</html>