@extends('layouts.app')

@section('title', 'Shopping Cart')

@section('content')

{{-- AOS CSS --}}
<link
    href="https://unpkg.com/aos@2.3.1/dist/aos.css"
    rel="stylesheet">


<style>

    body {
        background:
            linear-gradient(
                135deg,
                #eef2ff 0%,
                #f8fafc 45%,
                #e0f2fe 100%
            );

        min-height: 100vh;
    }


    /* =========================
       CART WRAPPER
    ========================= */

    .cart-wrapper {
        padding: 40px 15px 60px;
    }

    .cart-container {
        max-width: 1150px;

        margin: auto;
    }


    /* =========================
       HEADER
    ========================= */

    .cart-header {
        display: flex;

        align-items: center;

        justify-content: space-between;

        margin-bottom: 25px;
    }

    .cart-title-area {
        display: flex;

        align-items: center;

        gap: 15px;
    }

    .cart-icon {
        width: 55px;

        height: 55px;

        border-radius: 16px;

        display: flex;

        align-items: center;

        justify-content: center;

        background:
            linear-gradient(
                135deg,
                #4f46e5,
                #2563eb
            );

        color: white;

        font-size: 25px;

        box-shadow:
            0 10px 25px
            rgba(37, 99, 235, 0.22);
    }

    .cart-header h2 {
        margin: 0;

        font-size: 30px;

        font-weight: 800;

        color: #111827;
    }

    .cart-header p {
        margin: 3px 0 0;

        color: #64748b;

        font-size: 13px;
    }


    /* =========================
       CART CARD
    ========================= */

    .cart-card {
        border: 0;

        border-radius: 24px;

        overflow: hidden;

        background: rgba(255, 255, 255, 0.97);

        box-shadow:
            0 25px 65px
            rgba(15, 23, 42, 0.10);
    }


    /* =========================
       DESKTOP TABLE
    ========================= */

    .cart-table-wrapper {
        overflow-x: auto;
    }

    .cart-table {
        margin: 0;

        min-width: 800px;

        vertical-align: middle;
    }

    .cart-table thead {
        background:
            linear-gradient(
                135deg,
                #111827,
                #1e293b
            );
    }

    .cart-table thead th {
        color: white;

        border: 0;

        padding: 17px 18px;

        font-size: 12px;

        font-weight: 700;

        text-transform: uppercase;

        letter-spacing: 0.4px;
    }

    .cart-table tbody td {
        padding: 18px;

        border-color: #eef2f7;

        color: #475569;
    }

    .cart-table tbody tr {
        transition:
            background 0.25s ease,
            transform 0.25s ease;
    }

    .cart-table tbody tr:hover {
        background: #f8fafc;
    }


    /* =========================
       PRODUCT IMAGE
    ========================= */

    .cart-product-image {
        width: 75px;

        height: 75px;

        object-fit: cover;

        border-radius: 14px;

        border: 3px solid white;

        box-shadow:
            0 7px 20px
            rgba(15, 23, 42, 0.12);

        transition:
            transform 0.3s ease;
    }

    .cart-product-image:hover {
        transform: scale(1.07);
    }

    .no-cart-image {
        width: 75px;

        height: 75px;

        border-radius: 14px;

        display: flex;

        align-items: center;

        justify-content: center;

        flex-direction: column;

        background: #f1f5f9;

        color: #94a3b8;

        font-size: 11px;
    }

    .no-cart-image i {
        font-size: 23px;

        margin-bottom: 3px;
    }


    /* =========================
       PRODUCT NAME
    ========================= */

    .cart-product-name {
        color: #1e293b;

        font-weight: 700;

        font-size: 15px;
    }


    /* =========================
       PRICE
    ========================= */

    .cart-price {
        color: #475569;

        font-weight: 600;
    }

    .cart-subtotal {
        color: #059669;

        font-size: 15px;

        font-weight: 800;
    }


    /* =========================
       QUANTITY
    ========================= */

    .quantity-badge {
        display: inline-flex;

        align-items: center;

        justify-content: center;

        min-width: 42px;

        height: 36px;

        padding: 0 12px;

        border-radius: 10px;

        background: #eef2ff;

        color: #4f46e5;

        font-size: 14px;

        font-weight: 800;
    }


    /* =========================
       REMOVE BUTTON
    ========================= */

    .remove-btn {
        border: 0;

        border-radius: 10px;

        padding: 8px 14px;

        background: #fee2e2;

        color: #dc2626;

        font-size: 12px;

        font-weight: 700;

        transition: all 0.25s ease;
    }

    .remove-btn:hover {
        background: #dc2626;

        color: white;

        transform: translateY(-2px);

        box-shadow:
            0 7px 15px
            rgba(220, 38, 38, 0.20);
    }


    /* =========================
       CART FOOTER
    ========================= */

    .cart-footer {
        padding: 25px;

        border-top:
            1px solid
            #eef2f7;

        display: flex;

        justify-content: flex-end;

        align-items: center;

        gap: 20px;
    }

    .total-box {
        text-align: right;
    }

    .total-label {
        display: block;

        color: #94a3b8;

        font-size: 12px;

        font-weight: 600;

        text-transform: uppercase;

        letter-spacing: 0.5px;
    }

    .total-price {
        display: block;

        margin-top: 2px;

        color: #059669;

        font-size: 30px;

        font-weight: 800;
    }


    /* =========================
       SHOPPING BUTTON
    ========================= */

    .shopping-btn {
        border: 0;

        border-radius: 12px;

        padding: 13px 21px;

        color: white;

        background:
            linear-gradient(
                135deg,
                #4f46e5,
                #2563eb
            );

        font-weight: 700;

        box-shadow:
            0 10px 22px
            rgba(37, 99, 235, 0.20);

        transition: all 0.3s ease;
    }

    .shopping-btn:hover {
        color: white;

        transform: translateY(-3px);

        box-shadow:
            0 15px 30px
            rgba(37, 99, 235, 0.30);
    }


    /* =========================
       EMPTY CART
    ========================= */

    .empty-cart {
        padding: 70px 25px;

        text-align: center;
    }

    .empty-cart-icon {
        width: 105px;

        height: 105px;

        margin: auto;

        border-radius: 30px;

        display: flex;

        align-items: center;

        justify-content: center;

        background:
            linear-gradient(
                135deg,
                #eef2ff,
                #e0f2fe
            );

        color: #4f46e5;

        font-size: 48px;

        animation:
            floating 4s ease-in-out infinite;
    }

    .empty-cart h3 {
        margin-top: 25px;

        color: #1e293b;

        font-size: 25px;

        font-weight: 800;
    }

    .empty-cart p {
        color: #94a3b8;

        max-width: 400px;

        margin: 8px auto 25px;

        font-size: 14px;
    }


    /* =========================
       EMPTY ALERT REPLACEMENT
    ========================= */

    .empty-cart-btn {
        border: 0;

        border-radius: 12px;

        padding: 12px 25px;

        color: white;

        background:
            linear-gradient(
                135deg,
                #4f46e5,
                #2563eb
            );

        font-weight: 700;

        box-shadow:
            0 10px 22px
            rgba(37, 99, 235, 0.20);

        transition: all 0.3s ease;
    }

    .empty-cart-btn:hover {
        color: white;

        transform: translateY(-3px);

        box-shadow:
            0 15px 30px
            rgba(37, 99, 235, 0.30);
    }


    /* =========================
       ANIMATION
    ========================= */

    @keyframes floating {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }


    /* =========================
       MOBILE
    ========================= */

    @media (max-width: 767px) {

        .cart-wrapper {
            padding: 25px 12px 40px;
        }

        .cart-header {
            align-items: flex-start;

            flex-direction: column;

            gap: 15px;
        }

        .cart-title-area {
            gap: 11px;
        }

        .cart-icon {
            width: 48px;

            height: 48px;

            border-radius: 14px;

            font-size: 21px;
        }

        .cart-header h2 {
            font-size: 25px;
        }

        .cart-card {
            border-radius: 18px;
        }

        .cart-footer {
            padding: 20px;

            flex-direction: column;

            align-items: stretch;

            gap: 15px;
        }

        .total-box {
            text-align: center;
        }

        .shopping-btn {
            width: 100%;
        }

        .total-price {
            font-size: 27px;
        }

        .empty-cart {
            padding: 55px 20px;
        }
    }

</style>


<div class="cart-wrapper">

    <div class="cart-container">


        {{-- =========================
             HEADER
        ========================= --}}

        <div
            class="cart-header"
            data-aos="fade-down"
            data-aos-duration="800">

            <div class="cart-title-area">

                <div class="cart-icon">

                    <i class="bi bi-cart3"></i>

                </div>

                <div>

                    <h2>
                        Shopping Cart
                    </h2>

                    <p>
                        Review your selected products
                    </p>

                </div>

            </div>

        </div>


        @if(count($cart) > 0)


            {{-- =========================
                 CART CARD
            ========================= --}}

            <div
                class="cart-card"
                data-aos="fade-up"
                data-aos-duration="900">


                {{-- =========================
                     TABLE
                ========================= --}}

                <div class="cart-table-wrapper">

                    <table class="table cart-table">

                        <thead>

                            <tr>

                                <th>
                                    Image
                                </th>

                                <th>
                                    Product
                                </th>

                                <th>
                                    Price
                                </th>

                                <th>
                                    Quantity
                                </th>

                                <th>
                                    Subtotal
                                </th>

                                <th>
                                    Action
                                </th>

                            </tr>

                        </thead>


                        <tbody>


                            @foreach($cart as $item)

                                <tr
                                    data-aos="fade-up"
                                    data-aos-duration="600">


                                    {{-- IMAGE --}}

                                    <td>

                                        @if($item['image'])

                                            <img
                                                src="{{ asset(
                                                    'uploads/products/' .
                                                    $item['image']
                                                ) }}"
                                                class="cart-product-image"
                                                alt="{{ $item['name'] }}">

                                        @else

                                            <div class="no-cart-image">

                                                <i class="bi bi-image"></i>

                                                No Image

                                            </div>

                                        @endif

                                    </td>


                                    {{-- PRODUCT --}}

                                    <td>

                                        <span class="cart-product-name">

                                            {{ $item['name'] }}

                                        </span>

                                    </td>


                                    {{-- PRICE --}}

                                    <td>

                                        <span class="cart-price">

                                            ₹{{ number_format(
                                                $item['price'],
                                                2
                                            ) }}

                                        </span>

                                    </td>


                                    {{-- QUANTITY --}}

                                    <td>

                                        <span class="quantity-badge">

                                            {{ $item['quantity'] }}

                                        </span>

                                    </td>


                                    {{-- SUBTOTAL --}}

                                    <td>

                                        <span class="cart-subtotal">

                                            ₹{{ number_format(
                                                $item['price'] *
                                                $item['quantity'],
                                                2
                                            ) }}

                                        </span>

                                    </td>


                                    {{-- REMOVE --}}

                                    <td>

                                        <form
                                            action="{{ route(
                                                'cart.remove',
                                                $item['id']
                                            ) }}"
                                            method="POST">

                                            @csrf

                                            <button
                                                type="submit"
                                                class="btn remove-btn">

                                                <i
                                                    class="bi bi-trash3 me-1">
                                                </i>

                                                Remove

                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @endforeach


                        </tbody>

                    </table>

                </div>


                {{-- =========================
                     CART FOOTER
                ========================= --}}

                <div
                    class="cart-footer"
                    data-aos="fade-up"
                    data-aos-delay="300">


                    <div class="total-box">

                        <span class="total-label">

                            Cart Total

                        </span>

                        <span class="total-price">

                            ₹{{ number_format($total, 2) }}

                        </span>

                    </div>


                    <a
                        href="{{ route('products.index') }}"
                        class="btn shopping-btn">

                        <i class="bi bi-arrow-left me-2"></i>

                        Continue Shopping

                    </a>

                </div>

            </div>


        @else


            {{-- =========================
                 EMPTY CART
            ========================= --}}

            <div
                class="cart-card"
                data-aos="zoom-in"
                data-aos-duration="900">


                <div class="empty-cart">


                    <div class="empty-cart-icon">

                        <i class="bi bi-cart-x"></i>

                    </div>


                    <h3>

                        Your Cart Is Empty

                    </h3>


                    <p>

                        Looks like you haven't added
                        anything to your cart yet.
                        Explore our products and find
                        something you love.

                    </p>


                    <a
                        href="{{ route('products.index') }}"
                        class="btn empty-cart-btn">

                        <i class="bi bi-bag-plus me-2"></i>

                        Start Shopping

                    </a>

                </div>

            </div>

        @endif


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

        offset: 60

    });

</script>

@endsection