@extends('clickecomm.admin.layout')
@section('title-here')
Dashboard
@endsection
@section('dashboard')
<div class="app-wrapper">
<div class="app-content pt-3 p-md-3 p-lg-4">
<div class="container-xl">
<!-- set flash messages  -->
@if(Session('success'))       
<div class='p-3 bg-success font-bold  mt-3 rounded-xl w-50'>
<span class="p-3 text-white">
{{ session('success') }}
</span>
</div> 
@endif
<div class="row g-3 mb-4 align-items-center justify-content-between">

<div class="col-auto">
<h1 class="app-page-title mb-0">Add Products</h1>
</div>
</div>
<div class="row">
<div class="col-12 col-lg-8 col-xl-7">
<div class="app-card shadow-sm p-4">
<form  method="POST">
@csrf
<!-- Category Name -->
<div class="mb-3">
<label for="category_name" class="form-label">
Select Category
</label>
<select
class="form-control @error('categoryname') is-invalid @enderror"
id="categoryname"
name="categoryname"
value="{{ old('categoryname') }}"
placeholder="Enter category name">  
<option value="">-select category-</option>
@foreach($category as $row)

<option value="{{ $row->id }}">{{$row->categoryname}}</option>
@endforeach
</select>

@error('categoryname')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>



<div class="mb-3">
<label for="photo" class="form-label">
Upload Photo
</label>
<input
type="file"
class="form-control @error('photo') is-invalid @enderror"
id="photo"
name="photo"
value="{{ old('photo') }}"
placeholder="Enter photo name"
>
@error('photo')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>


<div class="mb-3">
<label for="category_name" class="form-label">
Product Name
</label>
<input
type="text"
class="form-control @error('pname') is-invalid @enderror"
id="pname"
name="pname"
value="{{ old('pname') }}"
placeholder="Enter Pname"

>
@error('pname')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>



<div class="mb-3">
<label for="oldprice" class="form-label">
Old price
</label>
<input
type="text"
class="form-control @error('oldprice') is-invalid @enderror"
id="oldprice"
name="oldprice"
value="{{ old('oldprice') }}"
placeholder="Enter Old Price"

>
@error('oldprice')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>


<div class="mb-3">
<label for="newprice" class="form-label">
New price
</label>
<input
type="text"
class="form-control @error('newprice') is-invalid @enderror"
id="newprice"
name="newprice"
value="{{ old('newprice') }}"
placeholder="Enter Old Price"

>
@error('newprice')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>


<div class="mb-3">
<label for="qty" class="form-label">
Old price
</label>
<input
type="number"
class="form-control @error('qty') is-invalid @enderror"
id="qty"
name="qty"
value="{{ old('qty') }}"
placeholder="Enter Qty"

>
@error('qty')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>

<!-- Description -->
<div class="mb-3">
<label for="descriptions" class="form-label">
Description
</label>
<textarea
class="form-control @error('descriptions') is-invalid @enderror"
id="descriptions"
name="descriptions"
rows="5"
placeholder="Enter category description"
>{{ old('descriptions') }}</textarea>

@error('descriptions')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>


<!-- Add Button -->
<div class="mt-4">
<button type="submit" class="btn btn-primary">
<i class="fas fa-plus me-1"></i>
Add Products
</button>
</div>
</form>

</div>
</div>
</div>

</div>
</div>


</div>
@endsection
