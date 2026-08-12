@extends('layouts.app')

@section('title', 'Edit Product')

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

    .product-form-wrapper {
        min-height: calc(100vh - 80px);

        display: flex;

        align-items: center;

        padding: 40px 15px;
    }

    .product-form-container {
        max-width: 1100px;

        width: 100%;

        margin: auto;
    }

    .product-form-card {
        border: 0;

        border-radius: 28px;

        overflow: hidden;

        background: rgba(255, 255, 255, 0.97);

        box-shadow:
            0 25px 70px
            rgba(15, 23, 42, 0.13);
    }


    /* =========================
       LEFT INFORMATION SECTION
    ========================= */

    .product-info {
        min-height: 760px;

        padding: 50px 40px;

        color: white;

        background:
            linear-gradient(
                145deg,
                #0f766e,
                #0891b2 50%,
                #2563eb
            );

        position: relative;

        overflow: hidden;

        display: flex;

        flex-direction: column;

        justify-content: center;

        align-items: center;

        text-align: center;
    }

    .product-info::before {
        content: "";

        position: absolute;

        width: 310px;

        height: 310px;

        border-radius: 50%;

        background:
            rgba(255, 255, 255, 0.08);

        top: -130px;

        left: -130px;
    }

    .product-info::after {
        content: "";

        position: absolute;

        width: 370px;

        height: 370px;

        border-radius: 50%;

        background:
            rgba(255, 255, 255, 0.06);

        right: -180px;

        bottom: -180px;
    }


    /* PRODUCT ICON */

    .product-icon {
        width: 125px;

        height: 125px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 32px;

        font-size: 58px;

        background:
            rgba(255, 255, 255, 0.13);

        border:
            1px solid
            rgba(255, 255, 255, 0.20);

        backdrop-filter: blur(10px);

        box-shadow:
            0 20px 45px
            rgba(0, 0, 0, 0.14);

        position: relative;

        z-index: 2;

        animation:
            floating 4s ease-in-out infinite;
    }


    .product-info h1 {
        margin-top: 30px;

        font-size: 36px;

        font-weight: 800;

        position: relative;

        z-index: 2;
    }

    .product-info p {
        max-width: 400px;

        font-size: 15px;

        line-height: 1.7;

        opacity: 0.9;

        position: relative;

        z-index: 2;
    }


    /* CURRENT PRODUCT */

    .current-product {
        margin-top: 22px;

        padding: 10px 20px;

        border-radius: 50px;

        background:
            rgba(255, 255, 255, 0.12);

        border:
            1px solid
            rgba(255, 255, 255, 0.18);

        backdrop-filter: blur(10px);

        font-size: 13px;

        position: relative;

        z-index: 2;
    }


    /* =========================
       RIGHT FORM
    ========================= */

    .product-form {
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


    /* FORM CONTROLS */

    .form-label {
        color: #374151;

        font-weight: 600;

        margin-bottom: 8px;
    }

    .form-control,
    .form-select {
        min-height: 52px;

        border:
            1px solid
            #e5e7eb;

        border-radius: 13px;

        background: #f9fafb;

        transition: all 0.3s ease;
    }

    .form-control {
        padding: 12px 16px;
    }

    .form-select {
        padding-left: 16px;
    }

    textarea.form-control {
        min-height: 130px;

        resize: vertical;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #0891b2;

        background: #ffffff;

        box-shadow:
            0 0 0 4px
            rgba(8, 145, 178, 0.10);
    }


    /* =========================
       CURRENT IMAGE
    ========================= */

    .current-image-box {
        padding: 18px;

        border:
            1px solid
            #e5e7eb;

        border-radius: 16px;

        background:
            linear-gradient(
                135deg,
                #f8fafc,
                #f1f5f9
            );

        display: flex;

        align-items: center;

        gap: 18px;
    }

    .current-image {
        width: 110px;

        height: 110px;

        object-fit: cover;

        border-radius: 15px;

        border:
            3px solid
            white;

        box-shadow:
            0 8px 25px
            rgba(15, 23, 42, 0.15);

        transition:
            transform 0.3s ease;
    }

    .current-image:hover {
        transform: scale(1.05);
    }

    .image-details {
        color: #64748b;

        font-size: 13px;
    }

    .image-details strong {
        display: block;

        color: #334155;

        font-size: 14px;

        margin-bottom: 5px;
    }


    /* NO IMAGE */

    .no-image-box {
        width: 110px;

        height: 110px;

        border-radius: 15px;

        background:
            #e2e8f0;

        color: #94a3b8;

        display: flex;

        align-items: center;

        justify-content: center;

        flex-direction: column;

        flex-shrink: 0;
    }

    .no-image-box i {
        font-size: 30px;

        margin-bottom: 5px;
    }


    /* CHANGE IMAGE */

    .image-upload-box {
        padding: 18px;

        border:
            2px dashed
            #bae6fd;

        border-radius: 15px;

        background: #f8fafc;

        transition: all 0.3s ease;
    }

    .image-upload-box:hover {
        border-color: #0891b2;

        background: #f0fdfa;
    }

    .image-upload-box .form-control {
        background: white;
    }

    .upload-hint {
        display: block;

        margin-top: 8px;

        color: #94a3b8;

        font-size: 12px;
    }


    /* =========================
       BUTTONS
    ========================= */

    .form-actions {
        display: flex;

        gap: 10px;

        margin-top: 28px;
    }

    .update-btn {
        border: 0;

        border-radius: 12px;

        padding: 12px 22px;

        font-weight: 700;

        background:
            linear-gradient(
                135deg,
                #0f766e,
                #2563eb
            );

        box-shadow:
            0 10px 22px
            rgba(37, 99, 235, 0.20);

        transition: all 0.3s ease;
    }

    .update-btn:hover {
        transform: translateY(-3px);

        box-shadow:
            0 15px 30px
            rgba(37, 99, 235, 0.30);
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

        .product-info {
            min-height: 500px;

            padding: 40px 30px;
        }

        .product-icon {
            width: 100px;

            height: 100px;

            font-size: 46px;
        }

        .product-info h1 {
            font-size: 31px;
        }

        .product-form {
            padding: 40px 30px;
        }
    }


    /* MOBILE */

    @media (max-width: 767px) {

        .product-form-wrapper {
            padding: 20px 12px;
        }

        .product-form-card {
            border-radius: 20px;
        }

        .product-info {
            min-height: auto;

            padding: 40px 25px;
        }

        .product-icon {
            width: 85px;

            height: 85px;

            font-size: 40px;
        }

        .product-info h1 {
            font-size: 27px;

            margin-top: 22px;
        }

        .product-info p {
            font-size: 14px;
        }

        .product-form {
            padding: 35px 22px;
        }

        .form-header h2 {
            font-size: 27px;
        }

        .current-image-box {
            align-items: flex-start;

            flex-direction: column;
        }

        .form-actions {
            flex-direction: column;
        }

        .update-btn,
        .back-btn {
            width: 100%;
        }
    }


    @media (max-width: 400px) {

        .product-form {
            padding: 30px 18px;
        }

        .product-info {
            padding: 35px 20px;
        }
    }
</style>


<div class="product-form-wrapper">

    <div class="product-form-container">

        <div class="product-form-card">

            <div class="row g-0">


                {{-- LEFT INFORMATION SECTION --}}

                <div
                    class="col-lg-5 product-info"
                    data-aos="fade-right"
                    data-aos-duration="1000">


                    <div
                        class="product-icon"
                        data-aos="zoom-in"
                        data-aos-delay="300">

                        <i class="bi bi-pencil-square"></i>

                    </div>


                    <h1
                        data-aos="fade-up"
                        data-aos-delay="450">

                        Edit Product

                    </h1>


                    <p
                        data-aos="fade-up"
                        data-aos-delay="550">

                        Update your product information,
                        pricing, stock, category or image
                        whenever you need.

                    </p>


                    <div
                        class="current-product"
                        data-aos="fade-up"
                        data-aos-delay="650">

                        <i class="bi bi-box-seam me-2"></i>

                        {{ $product->name }}

                    </div>

                </div>


                {{-- RIGHT FORM SECTION --}}

                <div
                    class="col-lg-7 product-form"
                    data-aos="fade-left"
                    data-aos-duration="1000">


                    <div
                        class="form-header"
                        data-aos="fade-down"
                        data-aos-delay="200">

                        <h2>
                            Product Details
                        </h2>

                        <p>
                            Update the information below.
                        </p>

                    </div>


                    <form
                        action="{{ route(
                            'products.update',
                            $product->id
                        ) }}"
                        method="POST"
                        enctype="multipart/form-data">

                        @csrf

                        @method('PUT')


                        {{-- CATEGORY --}}

                        <div
                            class="mb-4"
                            data-aos="fade-up"
                            data-aos-delay="300">

                            <label class="form-label">

                                <i class="bi bi-grid me-1"></i>

                                Category

                            </label>


                            <select
                                name="category_id"
                                class="form-select">

                                @foreach($categories as $category)

                                    <option
                                        value="{{ $category->id }}"
                                        {{ $product->category_id == $category->id
                                            ? 'selected'
                                            : '' }}>

                                        {{ $category->name }}

                                    </option>

                                @endforeach

                            </select>

                        </div>


                        {{-- PRODUCT NAME --}}

                        <div
                            class="mb-4"
                            data-aos="fade-up"
                            data-aos-delay="350">

                            <label class="form-label">

                                <i class="bi bi-tag me-1"></i>

                                Product Name

                            </label>


                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                value="{{ $product->name }}"
                                placeholder="Enter product name">

                        </div>


                        {{-- DESCRIPTION --}}

                        <div
                            class="mb-4"
                            data-aos="fade-up"
                            data-aos-delay="400">

                            <label class="form-label">

                                <i class="bi bi-card-text me-1"></i>

                                Description

                            </label>


                            <textarea
                                name="description"
                                class="form-control"
                                rows="4"
                                placeholder="Enter product description">{{ $product->description }}</textarea>

                        </div>


                        {{-- PRICE + QUANTITY --}}

                        <div class="row">


                            {{-- PRICE --}}

                            <div
                                class="col-md-6"
                                data-aos="fade-up"
                                data-aos-delay="450">

                                <div class="mb-4">

                                    <label class="form-label">

                                        <i class="bi bi-currency-rupee me-1"></i>

                                        Price

                                    </label>


                                    <div class="input-icon-wrapper">

                                        <span class="input-prefix">
                                            ₹
                                        </span>

                                        <input
                                            type="number"
                                            step="0.01"
                                            name="price"
                                            class="form-control input-with-prefix"
                                            value="{{ $product->price }}">

                                    </div>

                                </div>

                            </div>


                            {{-- QUANTITY --}}

                            <div
                                class="col-md-6"
                                data-aos="fade-up"
                                data-aos-delay="500">

                                <div class="mb-4">

                                    <label class="form-label">

                                        <i class="bi bi-boxes me-1"></i>

                                        Quantity

                                    </label>


                                    <input
                                        type="number"
                                        name="quantity"
                                        class="form-control"
                                        value="{{ $product->quantity }}">

                                </div>

                            </div>

                        </div>


                        {{-- CURRENT IMAGE --}}

                        <div
                            class="mb-4"
                            data-aos="fade-up"
                            data-aos-delay="550">

                            <label class="form-label">

                                <i class="bi bi-image me-1"></i>

                                Current Image

                            </label>


                            <div class="current-image-box">


                                @if($product->image)

                                    <img
                                        src="{{ asset(
                                            'uploads/products/' .
                                            $product->image
                                        ) }}"
                                        class="current-image"
                                        alt="{{ $product->name }}">


                                    <div class="image-details">

                                        <strong>
                                            Current Product Image
                                        </strong>

                                        Your existing product
                                        image is displayed here.

                                    </div>


                                @else

                                    <div class="no-image-box">

                                        <i class="bi bi-image"></i>

                                        <small>
                                            No image
                                        </small>

                                    </div>


                                    <div class="image-details">

                                        <strong>
                                            No Current Image
                                        </strong>

                                        You can upload a new image below.

                                    </div>

                                @endif

                            </div>

                        </div>


                        {{-- CHANGE IMAGE --}}

                        <div
                            class="mb-3"
                            data-aos="fade-up"
                            data-aos-delay="600">

                            <label class="form-label">

                                <i class="bi bi-cloud-arrow-up me-1"></i>

                                Change Image

                            </label>


                            <div class="image-upload-box">

                                <input
                                    type="file"
                                    name="image"
                                    class="form-control">


                                <span class="upload-hint">

                                    <i class="bi bi-info-circle me-1"></i>

                                    Select a new image only if you
                                    want to replace the current one.

                                </span>

                            </div>

                        </div>


                        {{-- BUTTONS --}}

                        <div
                            class="form-actions"
                            data-aos="fade-up"
                            data-aos-delay="650">


                            <button
                                type="submit"
                                class="btn btn-success update-btn">

                                <i class="bi bi-check2-circle me-2"></i>

                                Update Product

                            </button>


                            <a
                                href="{{ route('products.index') }}"
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