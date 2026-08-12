@extends('layouts.app')

@section('title', 'Add Category')

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

    .category-form-wrapper {
        min-height: calc(100vh - 80px);

        display: flex;

        align-items: center;

        padding: 40px 15px;
    }

    .category-form-container {
        max-width: 1000px;

        width: 100%;

        margin: auto;
    }


    /* MAIN CARD */

    .category-form-card {
        border: 0;

        border-radius: 28px;

        overflow: hidden;

        background: rgba(255, 255, 255, 0.96);

        box-shadow:
            0 25px 70px
            rgba(15, 23, 42, 0.13);
    }


    /* LEFT SIDE */

    .category-info {
        min-height: 570px;

        padding: 50px 40px;

        color: white;

        background:
            linear-gradient(
                145deg,
                #4f46e5,
                #6366f1 50%,
                #7c3aed
            );

        position: relative;

        overflow: hidden;

        display: flex;

        flex-direction: column;

        justify-content: center;

        align-items: center;

        text-align: center;
    }

    .category-info::before {
        content: "";

        position: absolute;

        width: 300px;

        height: 300px;

        border-radius: 50%;

        background:
            rgba(255, 255, 255, 0.08);

        top: -120px;

        left: -120px;
    }

    .category-info::after {
        content: "";

        position: absolute;

        width: 350px;

        height: 350px;

        border-radius: 50%;

        background:
            rgba(255, 255, 255, 0.06);

        bottom: -180px;

        right: -150px;
    }


    /* ICON */

    .category-icon {
        width: 115px;

        height: 115px;

        border-radius: 30px;

        display: flex;

        align-items: center;

        justify-content: center;

        font-size: 55px;

        background:
            rgba(255, 255, 255, 0.13);

        border:
            1px solid
            rgba(255, 255, 255, 0.20);

        backdrop-filter: blur(10px);

        box-shadow:
            0 20px 40px
            rgba(0, 0, 0, 0.12);

        position: relative;

        z-index: 2;

        animation:
            floating 4s ease-in-out infinite;
    }

    .category-info h1 {
        margin-top: 30px;

        font-size: 34px;

        font-weight: 800;

        position: relative;

        z-index: 2;
    }

    .category-info p {
        max-width: 390px;

        font-size: 15px;

        line-height: 1.7;

        opacity: 0.9;

        position: relative;

        z-index: 2;
    }


    /* RIGHT FORM */

    .category-form {
        padding: 50px 45px;
    }

    .form-header h2 {
        font-size: 30px;

        font-weight: 800;

        color: #111827;

        margin-bottom: 8px;
    }

    .form-header p {
        color: #6b7280;

        margin-bottom: 30px;
    }


    /* FORM FIELDS */

    .form-label {
        color: #374151;

        font-weight: 600;

        margin-bottom: 8px;
    }

    .form-control {
        border: 1px solid #e5e7eb;

        border-radius: 13px;

        background: #f9fafb;

        transition: all 0.3s ease;
    }

    input.form-control {
        height: 52px;

        padding: 0 16px;
    }

    textarea.form-control {
        min-height: 130px;

        padding: 14px 16px;

        resize: vertical;
    }

    .form-control:focus {
        border-color: #6366f1;

        background: #ffffff;

        box-shadow:
            0 0 0 4px
            rgba(99, 102, 241, 0.10);
    }


    /* BUTTONS */

    .form-actions {
        display: flex;

        gap: 10px;

        margin-top: 25px;
    }

    .save-btn {
        border: 0;

        border-radius: 12px;

        padding: 12px 22px;

        font-weight: 700;

        background:
            linear-gradient(
                135deg,
                #4f46e5,
                #7c3aed
            );

        box-shadow:
            0 10px 22px
            rgba(79, 70, 229, 0.22);

        transition: all 0.3s ease;
    }

    .save-btn:hover {
        transform: translateY(-3px);

        box-shadow:
            0 15px 30px
            rgba(79, 70, 229, 0.30);
    }

    .back-btn {
        border: 0;

        border-radius: 12px;

        padding: 12px 22px;

        font-weight: 600;

        background: #f1f5f9;

        color: #475569;

        transition: all 0.3s ease;
    }

    .back-btn:hover {
        background: #e2e8f0;

        color: #1e293b;

        transform: translateY(-2px);
    }


    /* FLOATING */

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

        .category-info {
            min-height: 450px;

            padding: 40px 30px;
        }

        .category-icon {
            width: 95px;

            height: 95px;

            font-size: 45px;
        }

        .category-info h1 {
            font-size: 30px;
        }

        .category-form {
            padding: 40px 30px;
        }
    }


    /* MOBILE */

    @media (max-width: 767px) {

        .category-form-wrapper {
            padding: 20px 12px;
        }

        .category-form-card {
            border-radius: 20px;
        }

        .category-info {
            min-height: auto;

            padding: 40px 25px;
        }

        .category-icon {
            width: 85px;

            height: 85px;

            font-size: 40px;
        }

        .category-info h1 {
            font-size: 27px;

            margin-top: 22px;
        }

        .category-info p {
            font-size: 14px;
        }

        .category-form {
            padding: 35px 22px;
        }

        .form-header h2 {
            font-size: 27px;
        }

        .form-actions {
            flex-direction: column;
        }

        .save-btn,
        .back-btn {
            width: 100%;
        }
    }


    @media (max-width: 400px) {

        .category-form {
            padding: 30px 18px;
        }

        .category-info {
            padding: 35px 20px;
        }
    }
</style>


<div class="category-form-wrapper">

    <div class="category-form-container">

        <div class="category-form-card">

            <div class="row g-0">


                {{-- LEFT INFORMATION SECTION --}}

                <div
                    class="col-lg-5 category-info"
                    data-aos="fade-right"
                    data-aos-duration="1000">


                    <div
                        class="category-icon"
                        data-aos="zoom-in"
                        data-aos-delay="300">

                        <i class="bi bi-folder-plus"></i>

                    </div>


                    <h1
                        data-aos="fade-up"
                        data-aos-delay="450">

                        Add Category

                    </h1>


                    <p
                        data-aos="fade-up"
                        data-aos-delay="550">

                        Create a new category to keep your
                        products organized and make your
                        management experience easier.

                    </p>

                </div>


                {{-- RIGHT FORM SECTION --}}

                <div
                    class="col-lg-7 category-form"
                    data-aos="fade-left"
                    data-aos-duration="1000">


                    <div
                        class="form-header"
                        data-aos="fade-down"
                        data-aos-delay="200">

                        <h2>
                            Create Category
                        </h2>

                        <p>
                            Enter the category information below.
                        </p>

                    </div>


                    <form
                        action="{{ route('categories.store') }}"
                        method="POST">

                        @csrf


                        {{-- CATEGORY NAME --}}

                        <div
                            class="mb-4"
                            data-aos="fade-up"
                            data-aos-delay="300">

                            <label class="form-label">

                                Category Name

                            </label>

                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                value="{{ old('name') }}"
                                placeholder="Enter category name">

                        </div>


                        {{-- DESCRIPTION --}}

                        <div
                            class="mb-3"
                            data-aos="fade-up"
                            data-aos-delay="400">

                            <label class="form-label">

                                Description

                            </label>

                            <textarea
                                name="description"
                                class="form-control"
                                rows="4"
                                placeholder="Enter category description">{{ old('description') }}</textarea>

                        </div>


                        {{-- ACTION BUTTONS --}}

                        <div
                            class="form-actions"
                            data-aos="fade-up"
                            data-aos-delay="500">


                            <button
                                type="submit"
                                class="btn btn-primary save-btn">

                                <i class="bi bi-check2-circle me-2"></i>

                                Save Category

                            </button>


                            <a
                                href="{{ route('categories.index') }}"
                                class="btn back-btn">

                                <i class="bi bi-arrow-left me-2"></i>

                                Back

                            </a>

                        </div>

                    </form>

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

        offset: 70

    });

</script>

@endsection