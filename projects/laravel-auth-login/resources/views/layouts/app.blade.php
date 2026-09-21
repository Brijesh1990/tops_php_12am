
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'VRUD Operations') }}</title>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.bunny.net">

<!-- Bootstrap 5.1.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
crossorigin="anonymous">

<!-- Bootstrap Icons -->
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!-- AOS Animation Library -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>

<div id="app">


<!-- =====================================
NAVIGATION
====================================== -->

<nav class="navbar navbar-expand-md vrud-navbar">

<div class="container">


<!-- ================================
BRAND
================================= -->

<a class="navbar-brand vrud-brand"
href="{{ url('/') }}">

<div class="vrud-brand-icon">

<i class="bi bi-grid-1x2-fill"></i>

</div>

<div class="vrud-brand-text">

VRUD <span>Operations</span>

</div>

</a>


<!-- ================================
MOBILE TOGGLE
================================= -->

<button class="navbar-toggler border-0 shadow-none"
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarSupportedContent"
aria-controls="navbarSupportedContent"
aria-expanded="false"
aria-label="{{ __('Toggle navigation') }}">

<i class="bi bi-list fs-2 text-dark"></i>

</button>


<!-- ================================
NAVIGATION CONTENT
================================= -->

<div class="collapse navbar-collapse"
id="navbarSupportedContent">


<!-- =================================
LEFT NAVIGATION
================================= -->

<ul class="navbar-nav mx-auto mb-2 mb-md-0">


<!-- Dashboard -->

<li class="nav-item">

<a class="nav-link vrud-nav-link active"
href="{{ url('/') }}">

<i class="bi bi-speedometer2 me-1"></i>

Dashboard

</a>

</li>


<!-- Operations -->

<li class="nav-item">

<a class="nav-link vrud-nav-link"
href="#">

<i class="bi bi-clipboard-check me-1"></i>

Operations

</a>

</li>


<!-- Vehicles -->

<li class="nav-item">

<a class="nav-link vrud-nav-link"
href="#">

<i class="bi bi-truck me-1"></i>

Vehicles

</a>

</li>


<!-- Employees -->

<li class="nav-item">

<a class="nav-link vrud-nav-link"
href="#">

<i class="bi bi-people me-1"></i>

Employees

</a>

</li>


<!-- Reports -->

<li class="nav-item">

<a class="nav-link vrud-nav-link"
href="#">

<i class="bi bi-bar-chart-line me-1"></i>

Reports

</a>

</li>

</ul>


<!-- =================================
RIGHT NAVIGATION
================================= -->

<ul class="navbar-nav ms-auto align-items-md-center navbar-right">


@guest


<!-- ============================
LOGIN
============================= -->

@if (Route::has('login'))

<li class="nav-item me-md-2">

<a class="btn btn-outline-primary px-3"
href="{{ route('login') }}">

<i class="bi bi-box-arrow-in-right me-1"></i>

{{ __('Login') }}

</a>

</li>

@endif


<!-- ============================
REGISTER
============================= -->

@if (Route::has('register'))

<li class="nav-item mt-2 mt-md-0">

<a class="btn btn-primary px-3"
href="{{ route('register') }}">

<i class="bi bi-person-plus me-1"></i>

{{ __('Register') }}

</a>

</li>

@endif


@else


<!-- ============================
NOTIFICATION
============================= -->

<li class="nav-item me-2">

<button type="button"
class="notification-btn">

<i class="bi bi-bell"></i>

<span class="notification-dot"></span>

</button>

</li>


<!-- ============================
USER DROPDOWN
============================= -->

<li class="nav-item dropdown">


<a id="navbarDropdown"
class="nav-link dropdown-toggle user-button"
href="#"
role="button"
data-bs-toggle="dropdown"
aria-haspopup="true"
aria-expanded="false"
v-pre>


<!-- Avatar -->

<div class="user-avatar">

{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}

</div>


<!-- User Details -->

<div class="d-none d-lg-block">

<span class="user-label">
Welcome
</span>

<span class="user-name">

{{ Auth::user()->name }}

</span>

</div>


</a>


<!-- Dropdown Menu -->

<div class="dropdown-menu dropdown-menu-end"
aria-labelledby="navbarDropdown">


<!-- Dashboard -->

<a class="dropdown-item"
href="{{ url('/home') }}">

<i class="bi bi-speedometer2 me-2"></i>

Dashboard

</a>


<!-- Profile -->

<a class="dropdown-item"
href="#">

<i class="bi bi-person me-2"></i>

Profile

</a>


<!-- Settings -->

<a class="dropdown-item"
href="#">

<i class="bi bi-gear me-2"></i>

Settings

</a>


<div class="dropdown-divider"></div>


<!-- Logout -->

<a class="dropdown-item text-danger"
href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">

<i class="bi bi-box-arrow-right me-2"></i>

{{ __('Logout') }}

</a>


<!-- Logout Form -->

<form id="logout-form"
action="{{ route('logout') }}"
method="POST"
class="d-none">

@csrf

</form>


</div>

</li>


@endguest


</ul>

</div>

</div>

</nav>


<!-- =====================================
PAGE CONTENT
====================================== -->

<main class="py-4">

@yield('content')

</main>


</div>


<!-- =====================================
BOOTSTRAP JS
====================================== -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
crossorigin="anonymous">
</script>

</body>
</html>
