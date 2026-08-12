@extends('layouts.app')

@section('title', $product->name)

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

    .product-details-wrapper {
        padding: 40px 15px 60px;
    }

    .product-details-container {
        max-width: 1100px;

        width: 100%;

        margin: auto;
    }


    /* =========================
       MAIN CARD
    ========================= */

    .product-details-card {
        border: 0;

        border-radius: 28px;

        overflow: hidden;

        background: rgba(255, 255, 255, 0.97);

        box-shadow:
            0 25px 70px
            rgba(15, 23, 42, 0.12);
    }


    /* =========================
       IMAGE SECTION
    ========================= */

    .product-image-section {
        min-height: 600px;

        padding: 35px;

        background:
            linear-gradient(
                145deg,
                #f8fafc,
                #eef2ff
            );

        display: flex;

        align-items: center;

        justify-content: center;

        position: relative;

        overflow: hidden;
    }

    .product-image-section::before {
        content: "";

        position: absolute;

        width: 300px;

        height: 300px;

        border-radius: 50%;

        background:
            rgba(99, 102, 241, 0.08);

        top: -130px;

        left: -130px;
    }

    .product-image-section::after {
        content: "";

        position: absolute;

        width: 300px;

        height: 300px;

        border-radius: 50%;

        background:
            rgba(6, 182, 212, 0.07);

        bottom: -150px;

        right: -120px;
    }


    .product-image-box {
        width: 100%;

        max-width: 500px;

        height: 500px;

        border-radius: 24px;

        overflow: hidden;

        background: white;

        box-shadow:
            0 20px 50px
            rgba(15, 23, 42, 0.14);

        position: relative;

        z-index: 2;
    }

    .product-main-image {
        width: 100%;

        height: 100%;

        object-fit: cover;

        transition:
            transform 0.6s ease;
    }

    .product-image-box:hover
    .product-main-image {
        transform: scale(1.05);
    }


    /* NO IMAGE */

    .no-image {
        width: 100%;

        height: 100%;

        display: flex;

        align-items: center;

        justify-content: center;

        flex-direction: column;

        color: #94a3b8;

        background:
            linear-gradient(
                135deg,
                #f8fafc,
                #e2e8f0
            );
    }

    .no-image i {
        font-size: 70px;

        margin-bottom: 15px;
    }

    .no-image span {
        font-weight: 600;

        font-size: 15px;
    }


    /* =========================
       DETAILS SECTION
    ========================= */

    .product-details-content {
        padding: 55px 50px;

        display: flex;

        flex-direction: column;

        justify-content: center;
    }


    .product-category {
        display: inline-flex;

        align-items: center;

        width: fit-content;

        padding: 7px 13px;

        border-radius: 50px;

        background: #eef2ff;

        color: #4f46e5;

        font-size: 12px;

        font-weight: 700;

        margin-bottom: 17px;
    }


    .product-title {
        font-size: 42px;

        line-height: 1.15;

        font-weight: 800;

        color: #111827;

        margin-bottom: 18px;
    }


    .product-description {
        color: #64748b;

        font-size: 15px;

        line-height: 1.8;

        margin-bottom: 28px;
    }


    /* =========================
       PRICE
    ========================= */

    .price-box {
        display: flex;

        align-items: center;

        gap: 10px;

        margin-bottom: 22px;
    }

    .product-price {
        color: #059669;

        font-size: 34px;

        font-weight: 800;
    }

    .price-label {
        color: #94a3b8;

        font-size: 12px;

        font-weight: 600;
    }


    /* =========================
       STOCK
    ========================= */

    .stock-card {
        display: flex;

        align-items: center;

        justify-content: space-between;

        padding: 16px 18px;

        border-radius: 15px;

        background: #f8fafc;

        border: 1px solid #eef2f7;

        margin-bottom: 25px;
    }

    .stock-left {
        display: flex;

        align-items: center;

        gap: 12px;
    }

    .stock-icon {
        width: 43px;

        height: 43px;

        border-radius: 12px;

        display: flex;

        align-items: center;

        justify-content: center;

        background: #dcfce7;

        color: #16a34a;

        font-size: 19px;
    }

    .stock-text strong {
        display: block;

        color: #334155;

        font-size: 14px;
    }

    .stock-text span {
        color: #94a3b8;

        font-size: 12px;
    }

    .stock-number {
        color: #111827;

        font-size: 20px;

        font-weight: 800;
    }


    /* =========================
       CART BUTTON
    ========================= */

    .cart-btn {
        width: 100%;

        min-height: 55px;

        border: 0;

        border-radius: 14px;

        background:
            linear-gradient(
                135deg,
                #059669,
                #10b981
            );

        color: white;

        font-size: 16px;

        font-weight: 700;

        box-shadow:
            0 12px 25px
            rgba(5, 150, 105, 0.22);

        transition: all 0.3s ease;
    }

    .cart-btn:hover {
        color: white;

        transform: translateY(-4px);

        box-shadow:
            0 18px 32px
            rgba(5, 150, 105, 0.30);
    }


    /* OUT OF STOCK */

    .out-stock-btn {
        width: 100%;

        min-height: 55px;

        border: 0;

        border-radius: 14px;

        font-weight: 700;

        background:
            #fee2e2;

        color: #dc2626;

        cursor: not-allowed;
    }


    /* =========================
       BACK LINK
    ========================= */

    .back-link {
        display: inline-flex;

        align-items: center;

        gap: 7px;

        margin-top: 18px;

        color: #64748b;

        text-decoration: none;

        font-size: 13px;

        font-weight: 600;

        transition: all 0.25s ease;
    }

    .back-link:hover {
        color: #4f46e5;

        transform: translateX(-3px);
    }


    /* =========================
       FLOATING IMAGE
    ========================= */

    @keyframes imageFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-8px);
        }
    }

    .product-image-box {
        animation:
            imageFloat 5s ease-in-out infinite;
    }


    /* =========================
       TABLET
    ========================= */

    @media (max-width: 991px) {

        .product-image-section {
            min-height: 500px;

            padding: 30px;
        }

        .product-image-box {
            height: 430px;
        }

        .product-details-content {
            padding: 45px 35px;
        }

        .product-title {
            font-size: 36px;
        }
    }


    /* =========================
       MOBILE
    ========================= */

    @media (max-width: 767px) {

        .product-details-wrapper {
            padding: 20px 12px 40px;
        }

        .product-details-card {
            border-radius: 20px;
        }

        .product-image-section {
            min-height: auto;

            padding: 20px;
        }

        .product-image-box {
            height: 350px;

            border-radius: 18px;
        }

        .product-details-content {
            padding: 35px 22px;
        }

        .product-title {
            font-size: 30px;
        }

        .product-price {
            font-size: 29px;
        }

        .stock-card {
            padding: 14px;
        }
    }


    @media (max-width: 400px) {

        .product-image-box {
            height: 290px;
        }

        .product-details-content {
            padding: 30px 18px;
        }

        .product-title {
            font-size: 27px;
        }
    }
</style>


<div class="product-details-wrapper">

    <div class="product-details-container">

        <div class="product-details-card">

            <div class="row g-0">


                {{-- =========================
                     PRODUCT IMAGE
                ========================= --}}

                <div
                    class="col-lg-6 product-image-section"
                    data-aos="fade-right"
                    data-aos-duration="1000">


                    <div
                        class="product-image-box"
                        data-aos="zoom-in"
                        data-aos-delay="250">


                        @if($product->image)

                            <img
                                src="{{ asset(
                                    'uploads/products/' .
                                    $product->image
                                ) }}"
                                class="product-main-image"
                                alt="{{ $product->name }}">

                        @else

                            <div class="no-image">

                                <i class="bi bi-image"></i>

                                <span>
                                    No Image Available
                                </span>

                            </div>

                        @endif


                    </div>

                </div>


                {{-- =========================
                     PRODUCT DETAILS
                ========================= --}}

                <div
                    class="col-lg-6 product-details-content"
                    data-aos="fade-left"
                    data-aos-duration="1000">


                    {{-- CATEGORY --}}

                    <div
                        class="product-category"
                        data-aos="fade-down"
                        data-aos-delay="250">

                        <i class="bi bi-grid-3x3-gap me-2"></i>

                        {{ $product->category->name }}

                    </div>


                    {{-- PRODUCT NAME --}}

                    <h1
                        class="product-title"
                        data-aos="fade-up"
                        data-aos-delay="350">

                        {{ $product->name }}

                    </h1>


                    {{-- DESCRIPTION --}}

                    <p
                        class="product-description"
                        data-aos="fade-up"
                        data-aos-delay="450">

                        {{ $product->description }}

                    </p>


                    {{-- PRICE --}}

                    <div
                        class="price-box"
                        data-aos="fade-up"
                        data-aos-delay="500">

                        <div class="product-price">

                            ₹{{ number_format(
                                $product->price,
                                2
                            ) }}

                        </div>

                        <span class="price-label">

                            Product Price

                        </span>

                    </div>


                    {{-- STOCK --}}

                    <div
                        class="stock-card"
                        data-aos="fade-up"
                        data-aos-delay="550">


                        <div class="stock-left">

                            <div class="stock-icon">

                                <i class="bi bi-box-seam"></i>

                            </div>


                            <div class="stock-text">

                                <strong>
                                    Available Stock
                                </strong>

                                <span>
                                    Current inventory
                                </span>

                            </div>

                        </div>


                        <div class="stock-number">

                            {{ $product->quantity }}

                        </div>

                    </div>


                    {{-- CART --}}

                    @if($product->quantity > 0)

                        <form
                            action="{{ route(
                                'cart.add',
                                $product->id
                            ) }}"
                            method="POST"
                            data-aos="fade-up"
                            data-aos-delay="600">

                            @csrf

                            <button
                                type="submit"
                                class="btn cart-btn">

                                <i class="bi bi-cart-plus me-2"></i>

                                Add To Cart

                            </button>

                        </form>

                    @else

                        <button
                            class="btn out-stock-btn"
                            disabled
                            data-aos="fade-up"
                            data-aos-delay="600">

                            <i class="bi bi-x-circle me-2"></i>

                            Out Of Stock

                        </button>

                    @endif


                    {{-- BACK --}}

                    <a
                        href="{{ route('products.index') }}"
                        class="back-link"
                        data-aos="fade-up"
                        data-aos-delay="700">

                        <i class="bi bi-arrow-left"></i>

                        Back To Products

                    </a>

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