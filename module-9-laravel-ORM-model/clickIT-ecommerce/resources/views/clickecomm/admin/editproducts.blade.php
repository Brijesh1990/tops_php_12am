@extends('clickecomm.admin.layout')

@section('title-here')
Update Products
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
<h1 class="app-page-title mb-0">Edit Products</h1>
</div>
</div>

<div class="row">
<div class="col-12 col-lg-8 col-xl-7">
<div class="app-card shadow-sm p-4">

<form  method="POST" enctype="multipart/form-data">
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
<label for="pname" class="form-label">
Edit Pname
</label>
<input type="text"
class="form-control @error('pname') is-invalid @enderror"
id="pname"
name="pname"
rows="5"
placeholder="Enter Pname" value="{{$eddata->pname}}"
>

@error('pname')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>


<div class="mb-3">
<label for="photo" class="form-label">
<img src="{{asset('uploads/products/'.$eddata->photo)}}" style="width:85px; height:85px" />
</label>
<input type="file"
class="form-control @error('photo') is-invalid @enderror"
id="photo"
name="photo"
rows="5"
placeholder="Enter photo" value="{{$eddata->photo}}"
>

@error('photo')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>




<div class="mb-3">
<label for="pname" class="form-label">
Edit Old price
</label>
<input type="text"
class="form-control @error('oldprice') is-invalid @enderror"
id="oldprice"
name="oldprice"
rows="5"
placeholder="Enter Old Price" value="{{$eddata->oldprice}}"
>

@error('oldprice')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>




<div class="mb-3">
<label for="newpricee" class="form-label">
Edit New price
</label>
<input type="text"
class="form-control @error('newprice') is-invalid @enderror"
id="newprice"
name="newprice"
rows="5"
placeholder="Enter new Price" value="{{$eddata->newprice}}"
>

@error('newprice')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>


<div class="mb-3">
<label for="qty" class="form-label">
Edit Qty
</label>
<input type="text"
class="form-control @error('qty') is-invalid @enderror"
id="qty"
name="qty"
rows="5"
placeholder="Enter qty" value="{{$eddata->qty}}"
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
Edit Description
</label>
<textarea
class="form-control @error('descriptions') is-invalid @enderror"
id="descriptions"
name="descriptions"
rows="5"
placeholder="Enter category description"
>{{ $eddata->descriptions }}</textarea>

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
Update Products
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
