@extends('clickecomm.admin.layout')
@section('title-here')
Manage products
@endsection
@section('dashboard')
<div class="app-wrapper">
<div class="app-content pt-3 p-md-3 p-lg-4">
<div class="container-xl">
<div class="row g-3 mb-4 align-items-center justify-content-between">
<div class="col-auto">
<h1 class="app-page-title mb-0">Manage All Products <span class="badge badge-danger bg-danger rounded rounded-pill btn-sm">{{ count($products) }}</span></h1>
</div>
<div class="col-auto">
<div class="page-utilities">
<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
<div class="col-auto">
<form class="table-search-form row gx-1 align-items-center">
<div class="col-auto">
<input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
</div>
<div class="col-auto">
<button type="submit" class="btn app-btn-secondary">Search</button>
</div>
</form>
</div><!--//col-->
<div class="col-auto">
<select class="form-select w-auto" >
<option selected value="option-1">All</option>
<option value="option-2">This week</option>
<option value="option-3">This month</option>
<option value="option-4">Last 3 months</option>
</select>
</div>
<div class="col-auto">						    
<a class="btn app-btn-secondary" href="#">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
<path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg>
Download CSV
</a>
</div>
</div><!--//row-->
</div><!--//table-utilities-->
</div><!--//col-auto-->
</div><!--//row-->


<div class="tab-content" id="orders-table-tab-content">
<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
<div class="app-card app-card-orders-table shadow-sm mb-5">
<div class="app-card-body">
<!-- pass a flash delete message -->
@if(Session('del'))
<div class="alert alert-success">
	<span class='text-dark'>{{session('del')}}</span>
</div>
@endif

<div class="table-responsive p-5">
   @if(Session('success'))       
      <div class='p-3 bg-success font-bold  mt-3 rounded-xl w-50'>
        <span class="p-3 text-white">
          {{ session('success') }}
        </span>
      </div> 
      @endif	
<table class="table app-table-hover mb-0 text-left">
<thead>
<tr>
<th class="cell">CategoryName</th>
<th class="cell">ProductName</th>
<th class="cell">Photo</th>
<th class="cell">OldPrice</th>
<th class="cell">OfferPrice</th>
<th class="cell">Qty</th>
<th class="cell">Descriptions</th>
<th class="cell">Action</th>
</tr>
</thead>
<tbody>
@foreach($products as $row)
<tr>
<td class="cell">{{$row->categoryname}}</td>
<td class="cell">{{$row->pname}}</td>
<td class="cell"><img src="{{asset('uploads/products/'.$row->photo)}}" style="width:85px; height:85px" /></td>
<td class="cell">{{$row->oldprice}}</td>
<td class="cell">{{$row->newprice}}</td>
<td class="cell">{{$row->qty}}</td>
<td class="cell">{{$row->descriptions}}</td>

<td class="cell"><a class="btn btn-sm btn-danger text-white" href='{{URL("/admin-login/manageproducts/".$row->id)}}' onclick="return confirm('Are you sure to delete data ?')">Delete</a> 
| 
<a class="btn btn-sm btn-info bg-info text-white" href='{{URL("/admin-login/editproducts/".$row->id)}}' onclick="return confirm('Are you sure to edit data ?')">edit</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div><!--//table-responsive-->
</div><!--//app-card-body-->		
</div><!--//app-card-->

</div><!--//table-responsive-->
</div><!--//app-card-body-->		
</div><!--//app-card-->
</div><!--//tab-pane-->
</div><!--//tab-content-->

</div><!--//container-fluid-->
</div><!--//app-content-->

</div><!--//app-wrapper-->    					
@endsection
