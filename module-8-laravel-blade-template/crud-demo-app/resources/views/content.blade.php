@extends('layout')

@section('title-here')
Home Page
@endsection

@section('content')

<!-- Hero Section -->
<div class="container py-5">
    <div class="row align-items-center g-5">

        <!-- Left Content -->
        <div class="col-lg-6 order-2 order-lg-1">
            <span class="badge bg-primary mb-3 fs-6">Student Management System</span>

            <h1 class="display-5 fw-bold">
                Manage Student Records <span class="text-primary">Effortlessly</span>
            </h1>

            <p class="lead text-muted mt-3">
                Our Student Management System helps schools, colleges, and institutes
                organize student information in one place. Add, update, and manage
                student records with a simple, secure, and user-friendly interface.
            </p>

            <div class="mt-4">
                <a href="/add-students" class="btn btn-primary btn-lg me-3">
                    Add Students 👥
                </a>

                <a href="/contact" class="btn btn-outline-dark btn-lg">
                    Contact Us
                </a>
            </div>

            <div class="row mt-5 text-center">

                <div class="col-4">
                    <h2 class="text-primary fw-bold">500+</h2>
                    <p class="text-muted">Students</p>
                </div>

                <div class="col-4">
                    <h2 class="text-success fw-bold">50+</h2>
                    <p class="text-muted">Courses</p>
                </div>

                <div class="col-4">
                    <h2 class="text-danger fw-bold">100%</h2>
                    <p class="text-muted">Secure</p>
                </div>

            </div>

        </div>

        <!-- Right Image -->
        <div class="col-lg-6 text-center order-1 order-lg-2">
            <img src="https://i.pinimg.com/736x/12/29/78/1229780cc8351200e767346c1869fd22.jpg"
                class="img-fluid rounded-4 shadow-lg"
                alt="Student">
        </div>

    </div>
</div>

<!-- Features -->
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Why Choose Our System?</h2>
        <p class="text-muted">
            Everything you need to manage student information efficiently.
        </p>
    </div>

    <div class="row g-4">

        <div class="col-md-6 col-lg-3">
            <div class="card border-0 shadow h-100 text-center p-4">
                <div class="display-4">👨‍🎓</div>
                <h4 class="mt-3">Student Records</h4>
                <p class="text-muted">
                    Store and manage complete student profiles with ease.
                </p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card border-0 shadow h-100 text-center p-4">
                <div class="display-4">📚</div>
                <h4 class="mt-3">Course Management</h4>
                <p class="text-muted">
                    Organize departments, courses, and student enrollments.
                </p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card border-0 shadow h-100 text-center p-4">
                <div class="display-4">📊</div>
                <h4 class="mt-3">Reports</h4>
                <p class="text-muted">
                    Generate reports and analyze student performance quickly.
                </p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card border-0 shadow h-100 text-center p-4">
                <div class="display-4">🔒</div>
                <h4 class="mt-3">Secure Data</h4>
                <p class="text-muted">
                    Keep your records protected with reliable data security.
                </p>
            </div>
        </div>

    </div>
</div>

<!-- About -->
<div class="container py-5">
    <div class="row align-items-center g-5">

        <div class="col-lg-6">
            <img src="https://img.magnific.com/free-vector/student-campus-flat-composition-with-university-building-background-vector-illustration_1284-81556.jpg?semt=ais_hybrid&w=740&q=80"
                class="img-fluid rounded-4 shadow"
                alt="College">
        </div>

        <div class="col-lg-6">
            <h2 class="fw-bold mb-3">About Our Platform</h2>

            <p class="text-muted">
                Our Student Management System is designed to simplify educational
                administration by providing a centralized platform for managing
                student information. Whether you are handling admissions,
                maintaining records, or monitoring academic progress, our system
                makes every task faster and more efficient.
            </p>

            <p class="text-muted">
                Built with modern web technologies, the platform offers a clean
                interface, responsive design, and secure data handling, ensuring
                a seamless experience across desktops, tablets, and smartphones.
            </p>

            <a href="/add-students" class="btn btn-primary mt-3">
                Get Started
            </a>
        </div>

    </div>
</div>

<!-- Call To Action -->
<div class="container py-5">
    <div class="bg-primary text-white rounded-4 p-5 text-center shadow">
        <h2 class="fw-bold">
            Start Managing Students Today
        </h2>

        <p class="mt-3">
            Join hundreds of educational institutions using our Student
            Management System to simplify administration and improve productivity.
        </p>

        <a href="/add-students" class="btn btn-light btn-lg mt-3">
            Add Your First Student
        </a>
    </div>
</div>

@endsection