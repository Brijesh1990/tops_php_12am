@extends('layout')

@section('title-here')
Home Page
@endsection

@section('content')
<div class="container p-5 mt-5">
    <div class="row align-items-center">

        <!-- Left Image -->
        <div class="col-md-5 mb-4">
            <img src="https://i.pinimg.com/736x/12/29/78/1229780cc8351200e767346c1869fd22.jpg"
                class="img-fluid rounded shadow" alt="Student">
        </div>

        <!-- Right Content -->
        <div class="col-md-7">
            <h2 class="fw-bold">Student Management System</h2>
            <p class="text-muted">
                Manage student information efficiently with an easy-to-use dashboard.
            </p>

            <hr>

            <div class="row g-4">

                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <h4>👨‍🎓</h4>
                            <h5>Student Records</h5>
                            <p class="text-muted">
                                Store and manage complete student information securely.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <h4>📚</h4>
                            <h5>Course Management</h5>
                            <p class="text-muted">
                                Organize courses and assign students easily.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <h4>📊</h4>
                            <h5>Reports</h5>
                            <p class="text-muted">
                                Generate student reports and analyze data quickly.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <h4>🔒</h4>
                            <h5>Secure Data</h5>
                            <p class="text-muted">
                                Keep student records safe with secure data management.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection