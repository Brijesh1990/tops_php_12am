@extends('layouts.app')

@section('content')

<div class="container-fluid py-4">

    <!-- =====================================
        DASHBOARD HEADER
    ====================================== -->
    <div class="row align-items-center mb-4">

        <div class="col-12 col-md">
            <h1 class="h3 fw-bold mb-1">
                Dashboard
            </h1>

            <p class="text-muted mb-0 small">
                Manage your VRUD Operations and blog content.
            </p>
        </div>

        <div class="col-12 col-md-auto mt-3 mt-md-0">
            <button
                class="btn btn-primary w-100 w-md-auto"
                data-bs-toggle="collapse"
                data-bs-target="#addBlogForm">

                <i class="bi bi-plus-lg me-1"></i>
                Add New Blog

            </button>
        </div>

    </div>


    <!-- =====================================
        STATISTICS
    ====================================== -->

    <div class="row g-3 mb-4">

        <!-- Total Blogs -->
        <div class="col-6 col-xl-3">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div class="bg-primary bg-opacity-10 text-primary
                                    rounded p-2">

                            <i class="bi bi-journal-text fs-5"></i>

                        </div>

                        <span class="badge bg-success bg-opacity-10 text-success">
                            +12%
                        </span>

                    </div>

                    <h3 class="fw-bold mt-3 mb-1">
                        128
                    </h3>

                    <p class="text-muted small mb-0">
                        Total Blogs
                    </p>

                </div>

            </div>

        </div>


        <!-- Published -->
        <div class="col-6 col-xl-3">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div class="bg-success bg-opacity-10 text-success
                                    rounded p-2">

                            <i class="bi bi-check-circle fs-5"></i>

                        </div>

                        <span class="badge bg-success bg-opacity-10 text-success">
                            +8%
                        </span>

                    </div>

                    <h3 class="fw-bold mt-3 mb-1">
                        96
                    </h3>

                    <p class="text-muted small mb-0">
                        Published
                    </p>

                </div>

            </div>

        </div>


        <!-- Drafts -->
        <div class="col-6 col-xl-3">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div class="bg-warning bg-opacity-10 text-warning
                                    rounded p-2">

                            <i class="bi bi-file-earmark fs-5"></i>

                        </div>

                    </div>

                    <h3 class="fw-bold mt-3 mb-1">
                        32
                    </h3>

                    <p class="text-muted small mb-0">
                        Draft Blogs
                    </p>

                </div>

            </div>

        </div>


        <!-- Views -->
        <div class="col-6 col-xl-3">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div class="bg-info bg-opacity-10 text-info
                                    rounded p-2">

                            <i class="bi bi-eye fs-5"></i>

                        </div>

                        <span class="badge bg-success bg-opacity-10 text-success">
                            +24%
                        </span>

                    </div>

                    <h3 class="fw-bold mt-3 mb-1">
                        24.8K
                    </h3>

                    <p class="text-muted small mb-0">
                        Blog Views
                    </p>

                </div>

            </div>

        </div>

    </div>


    <!-- =====================================
        ADD BLOG FORM
    ====================================== -->

    <div class="collapse mb-4" id="addBlogForm">

        <div class="card border-0 shadow-sm">

            <div class="card-header bg-white py-3">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <h5 class="fw-bold mb-1">
                            Add New Blog
                        </h5>

                        <p class="text-muted small mb-0">
                            Create and publish a new blog post.
                        </p>

                    </div>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-toggle="collapse"
                        data-bs-target="#addBlogForm">
                    </button>

                </div>

            </div>


            <div class="card-body">

                <form>

                    <div class="row g-3">

                        <!-- Blog Title -->
                        <div class="col-12 col-md-8">

                            <label class="form-label fw-semibold">
                                Blog Title
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                placeholder="Enter blog title">

                        </div>


                        <!-- Category -->
                        <div class="col-12 col-md-4">

                            <label class="form-label fw-semibold">
                                Category
                            </label>

                            <select class="form-select">

                                <option selected>
                                    Select Category
                                </option>

                                <option>Operations</option>
                                <option>Technology</option>
                                <option>News</option>
                                <option>Company</option>

                            </select>

                        </div>


                        <!-- Short Description -->
                        <div class="col-12">

                            <label class="form-label fw-semibold">
                                Short Description
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                placeholder="Enter a short description">

                        </div>


                        <!-- Content -->
                        <div class="col-12 col-lg-8">

                            <label class="form-label fw-semibold">
                                Blog Content
                            </label>

                            <textarea
                                class="form-control"
                                rows="8"
                                placeholder="Write your blog content here..."></textarea>

                        </div>


                        <!-- Image -->
                        <div class="col-12 col-lg-4">

                            <label class="form-label fw-semibold">
                                Featured Image
                            </label>

                            <div class="border rounded p-4 text-center">

                                <i class="bi bi-cloud-arrow-up
                                          display-6
                                          text-primary">
                                </i>

                                <p class="fw-semibold mb-1 mt-2">
                                    Upload Featured Image
                                </p>

                                <p class="text-muted small">
                                    JPG, PNG or WEBP
                                </p>

                                <input
                                    type="file"
                                    class="form-control"
                                    accept="image/*">

                            </div>

                        </div>


                        <!-- Status -->
                        <div class="col-12 col-md-4">

                            <label class="form-label fw-semibold">
                                Status
                            </label>

                            <select class="form-select">

                                <option>
                                    Draft
                                </option>

                                <option>
                                    Published
                                </option>

                            </select>

                        </div>


                        <!-- Author -->
                        <div class="col-12 col-md-4">

                            <label class="form-label fw-semibold">
                                Author
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                placeholder="Author name">

                        </div>


                        <!-- Publish Date -->
                        <div class="col-12 col-md-4">

                            <label class="form-label fw-semibold">
                                Publish Date
                            </label>

                            <input
                                type="date"
                                class="form-control">

                        </div>


                        <!-- Buttons -->
                        <div class="col-12 pt-2">

                            <button
                                type="submit"
                                class="btn btn-primary me-2">

                                <i class="bi bi-check-lg me-1"></i>
                                Save Blog

                            </button>

                            <button
                                type="reset"
                                class="btn btn-light border">

                                Clear

                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>


    <!-- =====================================
        BLOG MANAGEMENT + ACTIVITY
    ====================================== -->

    <div class="row g-4">


        <!-- ==================================
            MANAGE BLOGS
        =================================== -->

        <div class="col-12 col-xl-9">

            <div class="card border-0 shadow-sm h-100">

                <!-- Header -->
                <div class="card-header bg-white py-3">

                    <div class="row align-items-center g-3">

                        <div class="col-12 col-lg">

                            <h5 class="fw-bold mb-1">
                                Manage Blogs
                            </h5>

                            <p class="text-muted small mb-0">
                                View, edit and manage your blog posts.
                            </p>

                        </div>

                        <div class="col-12 col-lg-4">

                            <div class="input-group">

                                <span class="input-group-text bg-white">
                                    <i class="bi bi-search"></i>
                                </span>

                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Search blogs...">

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Table -->
                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">

                        <thead class="table-light">

                            <tr>

                                <th>
                                    Blog
                                </th>

                                <th>
                                    Category
                                </th>

                                <th>
                                    Author
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Views
                                </th>

                                <th class="text-nowrap">
                                    Actions
                                </th>

                            </tr>

                        </thead>


                        <tbody>


                            <!-- BLOG 1 -->

                            <tr>

                                <td>

                                    <div class="d-flex align-items-center">

                                        <img
                                            src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=100"
                                            class="rounded"
                                            width="50"
                                            height="50"
                                            alt="Blog">

                                        <div class="ms-3">

                                            <div class="fw-semibold">
                                                Modern Operations Management
                                            </div>

                                            <small class="text-muted">
                                                Jun 12, 2025
                                            </small>

                                        </div>

                                    </div>

                                </td>


                                <td>
                                    <span class="badge bg-light text-dark">
                                        Operations
                                    </span>
                                </td>


                                <td>
                                    Admin
                                </td>


                                <td>

                                    <span class="badge bg-success">
                                        Published
                                    </span>

                                </td>


                                <td>
                                    2,340
                                </td>


                                <td class="text-nowrap">

                                    <button
                                        class="btn btn-sm btn-outline-primary"
                                        title="View">

                                        <i class="bi bi-eye"></i>

                                    </button>

                                    <button
                                        class="btn btn-sm btn-outline-warning"
                                        title="Edit">

                                        <i class="bi bi-pencil"></i>

                                    </button>

                                    <button
                                        class="btn btn-sm btn-outline-danger"
                                        title="Delete">

                                        <i class="bi bi-trash"></i>

                                    </button>

                                </td>

                            </tr>


                            <!-- BLOG 2 -->

                            <tr>

                                <td>

                                    <div class="d-flex align-items-center">

                                        <img
                                            src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=100"
                                            class="rounded"
                                            width="50"
                                            height="50"
                                            alt="Blog">

                                        <div class="ms-3">

                                            <div class="fw-semibold">
                                                Building Better Teams
                                            </div>

                                            <small class="text-muted">
                                                Jun 10, 2025
                                            </small>

                                        </div>

                                    </div>

                                </td>


                                <td>
                                    <span class="badge bg-light text-dark">
                                        Company
                                    </span>
                                </td>


                                <td>
                                    Admin
                                </td>


                                <td>

                                    <span class="badge bg-success">
                                        Published
                                    </span>

                                </td>


                                <td>
                                    1,892
                                </td>


                                <td class="text-nowrap">

                                    <button
                                        class="btn btn-sm btn-outline-primary">

                                        <i class="bi bi-eye"></i>

                                    </button>

                                    <button
                                        class="btn btn-sm btn-outline-warning">

                                        <i class="bi bi-pencil"></i>

                                    </button>

                                    <button
                                        class="btn btn-sm btn-outline-danger">

                                        <i class="bi bi-trash"></i>

                                    </button>

                                </td>

                            </tr>


                            <!-- BLOG 3 -->

                            <tr>

                                <td>

                                    <div class="d-flex align-items-center">

                                        <img
                                            src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=100"
                                            class="rounded"
                                            width="50"
                                            height="50"
                                            alt="Blog">

                                        <div class="ms-3">

                                            <div class="fw-semibold">
                                                Improving Daily Productivity
                                            </div>

                                            <small class="text-muted">
                                                Jun 08, 2025
                                            </small>

                                        </div>

                                    </div>

                                </td>


                                <td>
                                    <span class="badge bg-light text-dark">
                                        Technology
                                    </span>
                                </td>


                                <td>
                                    Admin
                                </td>


                                <td>

                                    <span class="badge bg-warning text-dark">
                                        Draft
                                    </span>

                                </td>


                                <td>
                                    0
                                </td>


                                <td class="text-nowrap">

                                    <button
                                        class="btn btn-sm btn-outline-primary">

                                        <i class="bi bi-eye"></i>

                                    </button>

                                    <button
                                        class="btn btn-sm btn-outline-warning">

                                        <i class="bi bi-pencil"></i>

                                    </button>

                                    <button
                                        class="btn btn-sm btn-outline-danger">

                                        <i class="bi bi-trash"></i>

                                    </button>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                <!-- Footer -->

                <div class="card-footer bg-white">

                    <div class="row align-items-center g-3">

                        <div class="col-12 col-md">

                            <small class="text-muted">
                                Showing 1 to 3 of 128 blogs
                            </small>

                        </div>


                        <div class="col-12 col-md-auto">

                            <nav>

                                <ul class="pagination pagination-sm mb-0">

                                    <li class="page-item disabled">

                                        <a class="page-link">
                                            Previous
                                        </a>

                                    </li>

                                    <li class="page-item active">

                                        <a class="page-link">
                                            1
                                        </a>

                                    </li>

                                    <li class="page-item">

                                        <a class="page-link">
                                            2
                                        </a>

                                    </li>

                                    <li class="page-item">

                                        <a class="page-link">
                                            3
                                        </a>

                                    </li>

                                    <li class="page-item">

                                        <a class="page-link">
                                            Next
                                        </a>

                                    </li>

                                </ul>

                            </nav>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- ==================================
            RIGHT SIDEBAR
        =================================== -->

        <div class="col-12 col-xl-3">


            <!-- Recent Activity -->

            <div class="card border-0 shadow-sm">

                <div class="card-header bg-white py-3">

                    <h5 class="fw-bold mb-1">
                        Recent Activity
                    </h5>

                    <small class="text-muted">
                        Latest updates
                    </small>

                </div>


                <div class="card-body">


                    <!-- Activity 1 -->

                    <div class="d-flex align-items-start mb-4">

                        <div class="bg-primary bg-opacity-10
                                    text-primary
                                    rounded
                                    p-2">

                            <i class="bi bi-plus-lg"></i>

                        </div>

                        <div class="ms-3">

                            <div class="fw-semibold small">
                                New blog created
                            </div>

                            <small class="text-muted">
                                15 minutes ago
                            </small>

                        </div>

                    </div>


                    <!-- Activity 2 -->

                    <div class="d-flex align-items-start mb-4">

                        <div class="bg-success bg-opacity-10
                                    text-success
                                    rounded
                                    p-2">

                            <i class="bi bi-check-lg"></i>

                        </div>

                        <div class="ms-3">

                            <div class="fw-semibold small">
                                Blog published
                            </div>

                            <small class="text-muted">
                                1 hour ago
                            </small>

                        </div>

                    </div>


                    <!-- Activity 3 -->

                    <div class="d-flex align-items-start mb-4">

                        <div class="bg-warning bg-opacity-10
                                    text-warning
                                    rounded
                                    p-2">

                            <i class="bi bi-pencil"></i>

                        </div>

                        <div class="ms-3">

                            <div class="fw-semibold small">
                                Blog updated
                            </div>

                            <small class="text-muted">
                                3 hours ago
                            </small>

                        </div>

                    </div>


                    <!-- Activity 4 -->

                    <div class="d-flex align-items-start">

                        <div class="bg-info bg-opacity-10
                                    text-info
                                    rounded
                                    p-2">

                            <i class="bi bi-person"></i>

                        </div>

                        <div class="ms-3">

                            <div class="fw-semibold small">
                                Profile updated
                            </div>

                            <small class="text-muted">
                                Yesterday
                            </small>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Quick Actions -->

            <div class="card border-0 shadow-sm mt-4">

                <div class="card-header bg-white py-3">

                    <h5 class="fw-bold mb-0">
                        Quick Actions
                    </h5>

                </div>


                <div class="card-body">

                    <div class="d-grid gap-2">

                        <button class="btn btn-light border text-start">

                            <i class="bi bi-plus-circle
                                      text-primary
                                      me-2">
                            </i>

                            Create Blog

                        </button>


                        <button class="btn btn-light border text-start">

                            <i class="bi bi-folder2-open
                                      text-primary
                                      me-2">
                            </i>

                            Manage Categories

                        </button>


                        <button class="btn btn-light border text-start">

                            <i class="bi bi-bar-chart
                                      text-primary
                                      me-2">
                            </i>

                            View Analytics

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection