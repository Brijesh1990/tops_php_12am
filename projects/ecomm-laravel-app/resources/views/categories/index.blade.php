@extends('layouts.app')

@section('title', 'Categories')

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

    .categories-wrapper {
        padding: 35px 15px;
    }

    .categories-container {
        max-width: 1200px;
        margin: auto;
    }

    /* HEADER */

    .page-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;

        margin-bottom: 25px;
    }

    .page-title {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .title-icon {
        width: 55px;
        height: 55px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 16px;

        color: white;

        font-size: 24px;

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

    .page-title h2 {
        margin: 0;

        font-size: 30px;

        font-weight: 800;

        color: #111827;
    }

    .page-title p {
        margin: 3px 0 0;

        color: #6b7280;

        font-size: 14px;
    }


    /* ADD BUTTON */

    .add-category-btn {
        border: 0;

        border-radius: 12px;

        padding: 12px 20px;

        font-weight: 700;

        background:
            linear-gradient(
                135deg,
                #4f46e5,
                #7c3aed
            );

        box-shadow:
            0 10px 20px
            rgba(79, 70, 229, 0.20);

        transition: all 0.3s ease;
    }

    .add-category-btn:hover {
        transform: translateY(-3px);

        box-shadow:
            0 15px 28px
            rgba(79, 70, 229, 0.30);
    }


    /* TABLE CARD */

    .category-card {
        border: 0;

        border-radius: 22px;

        overflow: hidden;

        background: rgba(255, 255, 255, 0.96);

        box-shadow:
            0 20px 55px
            rgba(15, 23, 42, 0.10);
    }

    .table-responsive {
        overflow-x: auto;
    }

    .category-table {
        margin: 0;

        min-width: 700px;

        vertical-align: middle;
    }

    .category-table thead th {
        background:
            linear-gradient(
                135deg,
                #111827,
                #312e81
            );

        color: white;

        border: 0;

        padding: 17px 18px;

        font-size: 13px;

        font-weight: 700;

        text-transform: uppercase;

        letter-spacing: 0.5px;
    }

    .category-table tbody td {
        padding: 17px 18px;

        border-color: #eef2f7;

        color: #4b5563;
    }

    .category-table tbody tr {
        transition: all 0.25s ease;
    }

    .category-table tbody tr:hover {
        background: #f8faff;

        transform: scale(1.002);
    }


    /* ID BADGE */

    .id-badge {
        display: inline-flex;

        align-items: center;
        justify-content: center;

        min-width: 38px;
        height: 32px;

        padding: 0 10px;

        border-radius: 10px;

        background: #eef2ff;

        color: #4f46e5;

        font-size: 13px;

        font-weight: 700;
    }


    /* CATEGORY NAME */

    .category-name {
        color: #111827;

        font-weight: 700;
    }


    /* DESCRIPTION */

    .category-description {
        max-width: 400px;

        color: #6b7280;

        line-height: 1.5;
    }


    /* ACTION BUTTONS */

    .action-buttons {
        display: flex;

        gap: 7px;

        flex-wrap: wrap;
    }

    .edit-btn,
    .delete-btn {
        border: 0;

        border-radius: 9px;

        padding: 7px 12px;

        font-size: 13px;

        font-weight: 600;

        transition: all 0.25s ease;
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


    /* EMPTY STATE */

    .empty-state {
        padding: 60px 20px !important;

        text-align: center;

        color: #9ca3af;
    }

    .empty-icon {
        width: 70px;
        height: 70px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin: 0 auto 15px;

        border-radius: 20px;

        background: #eef2ff;

        color: #6366f1;

        font-size: 30px;
    }

    .empty-state strong {
        display: block;

        color: #374151;

        font-size: 17px;

        margin-bottom: 5px;
    }


    /* MOBILE */

    @media (max-width: 767px) {

        .categories-wrapper {
            padding: 25px 12px;
        }

        .page-header {
            align-items: flex-start;

            flex-direction: column;
        }

        .page-title h2 {
            font-size: 25px;
        }

        .title-icon {
            width: 48px;
            height: 48px;

            font-size: 20px;
        }

        .add-category-btn {
            width: 100%;
        }

        .category-card {
            border-radius: 17px;
        }

        .category-table {
            min-width: 650px;
        }
    }
</style>


<div class="categories-wrapper">

    <div class="categories-container">


        {{-- PAGE HEADER --}}

        <div
            class="page-header"
            data-aos="fade-down"
            data-aos-duration="800">

            <div class="page-title">

                <div class="title-icon">

                    <i class="bi bi-grid-3x3-gap-fill"></i>

                </div>

                <div>

                    <h2>
                        Categories
                    </h2>

                    <p>
                        Manage your product categories
                    </p>

                </div>

            </div>


            <a
                href="{{ route('categories.create') }}"
                class="btn btn-primary add-category-btn">

                <i class="bi bi-plus-lg me-2"></i>

                Add Category

            </a>

        </div>


        {{-- CATEGORY TABLE --}}

        <div
            class="category-card"
            data-aos="fade-up"
            data-aos-duration="900"
            data-aos-delay="150">

            <div class="table-responsive">

                <table class="table category-table">

                    <thead>

                        <tr>

                            <th>
                                ID
                            </th>

                            <th>
                                Name
                            </th>

                            <th>
                                Description
                            </th>

                            <th width="200">
                                Action
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse($categories as $category)

                            <tr
                                data-aos="fade-up"
                                data-aos-duration="600">

                                <td>

                                    <span class="id-badge">

                                        {{ $category->id }}

                                    </span>

                                </td>


                                <td>

                                    <span class="category-name">

                                        {{ $category->name }}

                                    </span>

                                </td>


                                <td>

                                    <div class="category-description">

                                        {{ $category->description }}

                                    </div>

                                </td>


                                <td>

                                    <div class="action-buttons">


                                        {{-- EDIT --}}

                                        <a
                                            href="{{ route(
                                                'categories.edit',
                                                $category->id
                                            ) }}"
                                            class="btn edit-btn">

                                            <i class="bi bi-pencil-square me-1"></i>

                                            Edit

                                        </a>


                                        {{-- DELETE --}}

                                        <form
                                            action="{{ route(
                                                'categories.destroy',
                                                $category->id
                                            ) }}"
                                            method="POST"
                                            class="d-inline">

                                            @csrf

                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn delete-btn"
                                                onclick="return confirm(
                                                    'Delete category?'
                                                )">

                                                <i class="bi bi-trash3 me-1"></i>

                                                Delete

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="4"
                                    class="empty-state">

                                    <div class="empty-icon">

                                        <i class="bi bi-folder-x"></i>

                                    </div>

                                    <strong>
                                        No categories found
                                    </strong>

                                    <span>
                                        Add your first category to get started.
                                    </span>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

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

        duration: 700,

        easing: 'ease-out-cubic',

        once: true,

        offset: 60

    });

</script>

@endsection