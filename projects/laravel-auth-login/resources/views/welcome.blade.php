<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<!-- custom css -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!-- AOS Animation Library -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body class="antialiased">
<nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm sticky-top">
    <div class="container-fluid px-4">

        <!-- Brand -->
        <a class="navbar-brand d-flex align-items-center fw-bold"
           href="{{ url('/') }}">

            <span class="bg-primary text-white rounded-3 d-flex align-items-center justify-content-center me-2"
                  style="width: 40px; height: 40px;">
                <i class="bi bi-grid-1x2-fill"></i>
            </span>

            <span>
                VRUD <span class="text-primary">Operations</span>
            </span>

        </a>


        <!-- Mobile Toggle -->
        <button class="navbar-toggler border-0 shadow-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#vrudNavbar"
                aria-controls="vrudNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <i class="bi bi-list fs-2"></i>

        </button>


        <!-- Navigation -->
        <div class="collapse navbar-collapse" id="vrudNavbar">

            <!-- Main Menu -->
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active px-3"
                       href="{{ url('/') }}">
                        <i class="bi bi-speedometer2 me-1"></i>
                        Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3"
                       href="#">
                        <i class="bi bi-clipboard-check me-1"></i>
                        Operations
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3"
                       href="#">
                        <i class="bi bi-truck me-1"></i>
                        Vehicles
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3"
                       href="#">
                        <i class="bi bi-people me-1"></i>
                        Employees
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3"
                       href="#">
                        <i class="bi bi-bar-chart-line me-1"></i>
                        Reports
                    </a>
                </li>

            </ul>


            <!-- Right Side -->
            <div class="d-flex align-items-center gap-2">

                @if (Route::has('login'))

                    @auth

                        <!-- Notification -->
                        <button type="button"
                                class="btn btn-light rounded-circle position-relative"
                                style="width:40px;height:40px;">

                            <i class="bi bi-bell"></i>

                            <span class="position-absolute top-0 start-100 translate-middle
                                         p-1 bg-danger border border-light rounded-circle">
                            </span>

                        </button>


                        <!-- User Dropdown -->
                        <div class="dropdown">

                            <button class="btn d-flex align-items-center gap-2
                                           dropdown-toggle border-0"
                                    type="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false">

                                <span class="bg-primary-subtle text-primary
                                             rounded-circle d-flex
                                             align-items-center justify-content-center"
                                      style="width:40px;height:40px;">

                                    <i class="bi bi-person-fill"></i>

                                </span>

                                <span class="d-none d-lg-block text-start">

                                    <small class="text-muted d-block">
                                        Welcome
                                    </small>

                                    <strong>
                                        {{ Auth::user()->name }}
                                    </strong>

                                </span>

                            </button>


                            <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">

                                <li>
                                    <a class="dropdown-item"
                                       href="{{ url('/home') }}">

                                        <i class="bi bi-speedometer2 me-2"></i>
                                        Dashboard

                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item"
                                       href="#">

                                        <i class="bi bi-person me-2"></i>
                                        Profile

                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item"
                                       href="#">

                                        <i class="bi bi-gear me-2"></i>
                                        Settings

                                    </a>
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>

                                    <a class="dropdown-item text-danger"
                                       href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">

                                        <i class="bi bi-box-arrow-right me-2"></i>
                                        Logout

                                    </a>

                                    <form id="logout-form"
                                          action="{{ route('logout') }}"
                                          method="POST"
                                          class="d-none">

                                        @csrf

                                    </form>

                                </li>

                            </ul>

                        </div>

                    @else

                        <!-- Guest -->
                        <a href="{{ route('login') }}"
                           class="btn btn-outline-primary px-3">

                            <i class="bi bi-box-arrow-in-right me-1"></i>
                            Login

                        </a>


                        @if (Route::has('register'))

                            <a href="{{ route('register') }}"
                               class="btn btn-primary px-3">

                                <i class="bi bi-person-plus me-1"></i>
                                Register

                            </a>

                        @endif

                    @endauth

                @endif

            </div>

        </div>

    </div>
</nav>


<!-- =========================
MAIN
========================= -->

<main class="page-wrapper">

<div class="container">

<!-- Welcome -->
<div class="row align-items-center mb-4">

<div class="col-lg-7">

<h1 class="welcome-title">
Good Morning, Admin 👋
</h1>

<p class="welcome-text mb-0">
Here's what's happening with your operations today.
</p>

</div>

<div class="col-lg-5">

<div class="welcome-actions d-flex justify-content-lg-end gap-2">

<button class="btn btn-light-custom">
<i class="bi bi-bar-chart me-2"></i>
View Reports
</button>

<button class="btn btn-primary-custom">
<i class="bi bi-plus-lg me-2"></i>
Create Operation
</button>

</div>

</div>

</div>


<!-- =========================
STATISTICS
========================= -->

<div class="row g-3 mb-4">

<div class="col-12 col-sm-6 col-xl-3">

<div class="stat-card">

<div class="stat-icon icon-blue">
<i class="bi bi-clipboard-data"></i>
</div>

<div class="stat-number">
1,248
</div>

<div class="stat-label">
Total Operations
</div>

<div class="stat-change change-up mt-2">
<i class="bi bi-arrow-up"></i>
12.5% from last month
</div>

</div>

</div>


<div class="col-12 col-sm-6 col-xl-3">

<div class="stat-card">

<div class="stat-icon icon-green">
<i class="bi bi-activity"></i>
</div>

<div class="stat-number">
86
</div>

<div class="stat-label">
Active Operations
</div>

<div class="stat-change change-up mt-2">
<i class="bi bi-arrow-up"></i>
8.2% from last month
</div>

</div>

</div>


<div class="col-12 col-sm-6 col-xl-3">

<div class="stat-card">

<div class="stat-icon icon-orange">
<i class="bi bi-hourglass-split"></i>
</div>

<div class="stat-number">
32
</div>

<div class="stat-label">
Pending Tasks
</div>

<div class="stat-change change-down mt-2">
<i class="bi bi-arrow-down"></i>
4.3% from last month
</div>

</div>

</div>


<div class="col-12 col-sm-6 col-xl-3">

<div class="stat-card">

<div class="stat-icon icon-red">
<i class="bi bi-exclamation-triangle"></i>
</div>

<div class="stat-number">
07
</div>

<div class="stat-label">
Critical Issues
</div>

<div class="stat-change change-down mt-2">
<i class="bi bi-arrow-up"></i>
2 new today
</div>

</div>

</div>

</div>


<!-- =========================
CHART + STATUS
========================= -->

<div class="row g-3 mb-4">

<div class="col-lg-8">

<div class="dashboard-card">

<div class="card-header-custom">

<div>
<h5 class="card-title-custom">
Operations Overview
</h5>

<span class="card-subtitle">
Monthly operation activity
</span>
</div>

<div class="legend">

<span class="legend-item">
<span class="legend-dot bg-primary"></span>
Completed
</span>

<span class="legend-item">
<span class="legend-dot" style="background:#93c5fd"></span>
Active
</span>

</div>

</div>

<div class="chart-area">

<div class="chart">

<div class="bar-group">
<div class="bar bar-blue" style="height:55%"></div>
<div class="bar bar-light" style="height:35%"></div>
</div>

<div class="bar-group">
<div class="bar bar-blue" style="height:68%"></div>
<div class="bar bar-light" style="height:40%"></div>
</div>

<div class="bar-group">
<div class="bar bar-blue" style="height:48%"></div>
<div class="bar bar-light" style="height:50%"></div>
</div>

<div class="bar-group">
<div class="bar bar-blue" style="height:78%"></div>
<div class="bar bar-light" style="height:46%"></div>
</div>

<div class="bar-group">
<div class="bar bar-blue" style="height:65%"></div>
<div class="bar bar-light" style="height:58%"></div>
</div>

<div class="bar-group">
<div class="bar bar-blue" style="height:88%"></div>
<div class="bar bar-light" style="height:48%"></div>
</div>

</div>

<div class="chart-labels">
<span>Jan</span>
<span>Feb</span>
<span>Mar</span>
<span>Apr</span>
<span>May</span>
<span>Jun</span>
</div>

</div>

</div>

</div>


<div class="col-lg-4">

<div class="dashboard-card">

<div class="card-header-custom">

<div>
<h5 class="card-title-custom">
Operation Status
</h5>

<span class="card-subtitle">
Current distribution
</span>
</div>

</div>

<div class="p-4">

<div class="status-item">

<div class="status-row">
<span>Completed</span>
<strong>68%</strong>
</div>

<div class="progress">
<div class="progress-bar bg-success"
style="width:68%">
</div>
</div>

</div>


<div class="status-item">

<div class="status-row">
<span>In Progress</span>
<strong>21%</strong>
</div>

<div class="progress">
<div class="progress-bar bg-primary"
style="width:21%">
</div>
</div>

</div>


<div class="status-item">

<div class="status-row">
<span>Pending</span>
<strong>8%</strong>
</div>

<div class="progress">
<div class="progress-bar bg-warning"
style="width:8%">
</div>
</div>

</div>


<div class="status-item mb-0">

<div class="status-row">
<span>Critical</span>
<strong>3%</strong>
</div>

<div class="progress">
<div class="progress-bar bg-danger"
style="width:3%">
</div>
</div>

</div>

</div>

</div>

</div>

</div>

</body>
</html>
