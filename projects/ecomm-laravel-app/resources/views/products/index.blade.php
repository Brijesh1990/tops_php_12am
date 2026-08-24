@extends('layouts.app')

@section('title', 'Products')

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

    .products-wrapper {
        padding: 35px 15px 50px;
    }

    .products-container {
        max-width: 1250px;
        margin: auto;
    }


    /* HEADER */

    .products-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        margin-bottom: 30px;
    }

    .products-title {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .title-icon {
        width: 58px;
        height: 58px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 17px;

        color: white;

        font-size: 25px;

        background:
            linear-gradient(
                135deg,
                #4f46e5,
                #7c3aed
            );

        box-shadow:
            0 10px 25px
            rgba(79, 70, 229, 0.25);
    }

    .products-title h2 {
        margin: 0;

        font-size: 30px;

        font-weight: 800;

        color: #111827;
    }

    .products-title p {
        margin: 3px 0 0;

        color: #6b7280;

        font-size: 14px;
    }


    /* HEADER BUTTONS */

    .header-actions {
        display: flex;
        gap: 10px;
    }

    .category-btn,
    .add-product-btn {
        border: 0;

        border-radius: 11px;

        padding: 11px 18px;

        font-weight: 600;

        transition: all 0.3s ease;
    }

    .category-btn {
        background: #ffffff;

        color: #475569;

        border: 1px solid #e2e8f0;
    }

    .category-btn:hover {
        background: #f1f5f9;

        color: #1e293b;

        transform: translateY(-2px);
    }

    .add-product-btn {
        background:
            linear-gradient(
                135deg,
                #4f46e5,
                #7c3aed
            );

        color: white;

        box-shadow:
            0 10px 22px
            rgba(79, 70, 229, 0.22);
    }

    .add-product-btn:hover {
        color: white;

        transform: translateY(-3px);

        box-shadow:
            0 15px 30px
            rgba(79, 70, 229, 0.30);
    }


    /* PRODUCT CARD */

    .product-card {
        border: 0;

        border-radius: 22px;

        overflow: hidden;

        background: rgba(255, 255, 255, 0.96);

        box-shadow:
            0 15px 45px
            rgba(15, 23, 42, 0.10);

        transition:
            transform 0.35s ease,
            box-shadow 0.35s ease;

        height: 100%;
    }

    .product-card:hover {
        transform: translateY(-8px);

        box-shadow:
            0 25px 55px
            rgba(15, 23, 42, 0.16);
    }


    /* IMAGE */

    .product-image-wrapper {
        height: 250px;

        position: relative;

        overflow: hidden;

        background:
            linear-gradient(
                135deg,
                #f1f5f9,
                #e2e8f0
            );
    }

    .product-image {
        width: 100%;

        height: 100%;

        object-fit: cover;

        transition:
            transform 0.5s ease;
    }

    .product-card:hover .product-image {
        transform: scale(1.07);
    }

    .no-image {
        height: 250px;

        display: flex;

        flex-direction: column;

        align-items: center;

        justify-content: center;

        color: #94a3b8;

        background:
            linear-gradient(
                135deg,
                #f8fafc,
                #e2e8f0
            );
    }

    .no-image i {
        font-size: 45px;

        margin-bottom: 8px;
    }


    /* PRODUCT CONTENT */

    .product-body {
        padding: 22px;
    }

    .product-name {
        font-size: 20px;

        font-weight: 800;

        color: #111827;

        margin-bottom: 10px;
    }

    .category-label {
        color: #64748b;

        font-size: 13px;

        font-weight: 600;
    }

    .category-badge {
        background: #eef2ff;

        color: #4f46e5;

        border-radius: 8px;

        padding: 6px 10px;

        font-size: 12px;

        font-weight: 700;
    }

    .product-description {
        color: #6b7280;

        font-size: 14px;

        line-height: 1.6;

        min-height: 45px;

        margin: 15px 0;
    }


    /* PRICE */

    .product-price {
        color: #059669;

        font-size: 23px;

        font-weight: 800;

        margin-bottom: 10px;
    }


    /* STOCK */

    .stock-info {
        display: flex;

        align-items: center;

        justify-content: space-between;

        padding: 10px 12px;

        border-radius: 10px;

        background: #f8fafc;

        margin-bottom: 5px;

        font-size: 13px;
    }

    .stock-label {
        color: #64748b;

        font-weight: 600;
    }

    .stock-value {
        color: #111827;

        font-weight: 800;
    }


    /* FOOTER */

    .product-footer {
        padding: 15px 20px 20px;

        background: #ffffff;

        border-top: 1px solid #f1f5f9;
    }

    .action-row {
        display: flex;

        flex-wrap: wrap;

        gap: 7px;
    }

    .action-btn {
        border: 0;

        border-radius: 9px;

        padding: 7px 11px;

        font-size: 12px;

        font-weight: 700;

        transition: all 0.25s ease;
    }

    .view-btn {
        background: #ecfeff;

        color: #0891b2;
    }

    .view-btn:hover {
        background: #0891b2;

        color: white;

        transform: translateY(-2px);
    }

    .edit-btn {
        background: #fff7ed;

        color: #ea580c;
    }

    .edit-btn:hover {
        background: #ea580c;

        color: white;

        transform: translateY(-2px);
    }

    .delete-btn {
        background: #fef2f2;

        color: #dc2626;
    }

    .delete-btn:hover {
        background: #dc2626;

        color: white;

        transform: translateY(-2px);
    }


    /* CART BUTTON */

    .cart-form {
        margin-top: 12px;
    }

    .cart-btn {
        border: 0;

        height: 45px;

        border-radius: 11px;

        font-size: 14px;

        font-weight: 700;

        background:
            linear-gradient(
                135deg,
                #059669,
                #10b981
            );

        box-shadow:
            0 8px 18px
            rgba(5, 150, 105, 0.18);

        transition: all 0.3s ease;
    }

    .cart-btn:hover {
        transform: translateY(-3px);

        box-shadow:
            0 12px 25px
            rgba(5, 150, 105, 0.28);
    }


    /* EMPTY STATE */

    .empty-card {
        border: 0;

        border-radius: 22px;

        padding: 70px 20px;

        text-align: center;

        background: rgba(255, 255, 255, 0.96);

        box-shadow:
            0 20px 50px
            rgba(15, 23, 42, 0.08);
    }

    .empty-icon {
        width: 80px;
        height: 80px;

        margin: auto auto 18px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 24px;

        background: #eef2ff;

        color: #6366f1;

        font-size: 35px;
    }

    .empty-card h4 {
        color: #374151;

        font-weight: 800;

        margin-bottom: 7px;
    }

    .empty-card p {
        color: #9ca3af;

        margin: 0;
    }


    /* TABLET */

    @media (max-width: 991px) {

        .products-header {
            align-items: flex-start;
        }

        .products-title h2 {
            font-size: 27px;
        }

        .product-image-wrapper,
        .no-image {
            height: 220px;
        }
    }


    /* MOBILE */

    @media (max-width: 767px) {

        .products-wrapper {
            padding: 25px 12px 40px;
        }

        .products-header {
            flex-direction: column;
        }

        .products-title h2 {
            font-size: 25px;
        }

        .title-icon {
            width: 50px;
            height: 50px;

            font-size: 21px;
        }

        .header-actions {
            width: 100%;

            flex-direction: column;
        }

        .category-btn,
        .add-product-btn {
            width: 100%;
        }

        .product-image-wrapper,
        .no-image {
            height: 240px;
        }

        .product-card {
            border-radius: 18px;
        }
    }
</style>


<div class="products-wrapper">

    <div class="products-container">


        {{-- PAGE HEADER --}}

        <div
            class="products-header"
            data-aos="fade-down"
            data-aos-duration="800">


            <div class="products-title">

                <div class="title-icon">

                    <i class="bi bi-box-seam-fill"></i>

                </div>

                <div>

                    <h2>
                        Products
                    </h2>

                    <p>
                        Browse and manage your products
                    </p>

                </div>

            </div>


            <div class="header-actions">

                <a
                    href="{{ route('categories.index') }}"
                    class="btn category-btn">

                    <i class="bi bi-grid-3x3-gap me-1"></i>

                    Categories

                </a>


                <a
                    href="{{ route('products.create') }}"
                    class="btn add-product-btn">

                    <i class="bi bi-plus-lg me-1"></i>

                    Add Product

                </a>

            </div>

        </div>


        {{-- PRODUCTS --}}

        <div class="row">

            @forelse($products as $product)

                <div
                    class="col-xl-4 col-md-6 mb-4"
                    data-aos="fade-up"
                    data-aos-duration="700">

                    <div class="product-card">


                        {{-- PRODUCT IMAGE --}}

                        @if($product->image)

                            <div class="product-image-wrapper">

                                <img
                                    src="{{ asset(
                                        'uploads/products/' .
                                        $product->image
                                    ) }}"
                                    alt="{{ $product->name }}"
                                    class="product-image">

                            </div>

                        @else

                            <div class="no-image">

                                <i class="bi bi-image"></i>

                                <span>
                                    No Image Available
                                </span>

                            </div>

                        @endif


                        {{-- PRODUCT BODY --}}

                        <div class="product-body">

                            <h5 class="product-name">

                                {{ $product->name }}

                            </h5>


                            <div>

                                <span class="category-label">

                                    Category:

                                </span>

                                <span class="badge category-badge">

                                    {{ $product->category_name }}

                                </span>

                            </div>


                            <!-- <p class="product-description">

                                {{ $product->description }}

                            </p> -->


                            <div class="product-price">

                                ₹{{ number_format(
                                    $product->price,
                                    2
                                ) }}

                            </div>


                            <div class="stock-info">

                                <span class="stock-label">

                                    <i class="bi bi-box-seam me-1"></i>

                                    Stock

                                </span>

                                <span class="stock-value">

                                    {{ $product->quantity }}

                                </span>

                            </div>

                        </div>


                        {{-- PRODUCT ACTIONS --}}

                        <div class="product-footer">


                            <div class="action-row">


                                {{-- VIEW --}}

                                <a
                                    href="{{ route(
                                        'products.show',
                                        $product->id
                                    ) }}"
                                    class="btn action-btn view-btn">

                                    <i class="bi bi-eye me-1"></i>

                                    View

                                </a>


                                {{-- EDIT --}}

                                <a
                                    href="{{ route(
                                        'products.edit',
                                        $product->id
                                    ) }}"
                                    class="btn action-btn edit-btn">

                                    <i class="bi bi-pencil-square me-1"></i>

                                    Edit

                                </a>


                                {{-- DELETE --}}

                                <form
                                    action="{{ route(
                                        'products.destroy',
                                        $product->id
                                    ) }}"
                                    method="POST"
                                    class="d-inline">

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn action-btn delete-btn"
                                        onclick="return confirm(
                                            'Delete product?'
                                        )">

                                        <i class="bi bi-trash3 me-1"></i>

                                        Delete

                                    </button>

                                </form>

                            </div>


                            {{-- ADD TO CART --}}

                            <form
                                action="{{ route(
                                    'cart.add',
                                    $product->id
                                ) }}"
                                method="POST"
                                class="cart-form">

                                @csrf

                                <button
                                    type="submit"
                                    class="btn btn-success cart-btn w-100">

                                    <i class="bi bi-cart-plus me-2"></i>

                                    Add To Cart

                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            @empty

                {{-- EMPTY STATE --}}

                <div
                    class="col-12"
                    data-aos="zoom-in"
                    data-aos-duration="800">

                    <div class="empty-card">

                        <div class="empty-icon">

                            <i class="bi bi-box-seam"></i>

                        </div>

                        <h4>
                            No Products Available
                        </h4>

                        <p>
                            Add your first product to get started.
                        </p>

                    </div>

                </div>

            @endforelse

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

        duration: 700,

        easing: 'ease-out-cubic',

        once: true,

        offset: 70

    });

</script>

@endsection