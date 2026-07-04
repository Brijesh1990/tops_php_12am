<div class="app-wrapper">
<div class="app-content pt-3 p-md-3 p-lg-4">
<div class="container-xl">

<div class="row g-3 mb-4 align-items-center justify-content-between">
<div class="col-auto">
<h1 class="app-page-title mb-0">Add Product</h1>
</div>
</div>

<div class="app-card app-card-settings shadow-sm p-4">

<form enctype="multipart/form-data" method="POST">

<div class="mb-3">
<label class="form-label">Select Category    <span class="text-danger">*</span></label>
<select class="form-select" name="catname" required>
<option value="">Select Category</option>
<?php
foreach($shwcat as $row)
{
?>
<option value="<?php echo $row["catid"];?>"><?php echo $row["catname"];?></option>
<?php
}
?>
</select>
</div>


<div class="mb-3">
<label class="form-label">Product Name</label>
<input type="text"
class="form-control"
name="productname"
placeholder="Enter Product Name">
</div>

<div class="mb-3">
<label class="form-label">Old Price</label>
<input type="number"
class="form-control"
name="oldprice"
placeholder="Enter Old Price">
</div>

<div class="mb-3">
<label class="form-label">Offer Price</label>
<input type="number"
class="form-control"
name="offerprice"
placeholder="Enter Offer Price">
</div>

<div class="mb-3">
<label class="form-label">Qty</label>
<input type="number"
class="form-control"
name="qty"
placeholder="Enter Quantity">
</div>


<div class="mb-3">
<label class="form-label">Product Description</label>
<textarea class="form-control"
name="productdesc"
rows="4"
placeholder="Enter Product Description"></textarea>
</div>

<div class="mb-3">
<label class="form-label">Status</label>
<select class="form-select" name="status">
<option value="active">Active</option>
<option value="inactive">Inactive</option>
</select>
</div>

<div class="mb-3">
<label class="form-label">Product Image</label>
<input type="file"
class="form-control"
name="productimg">
</div>

<div class="mt-4">
<button type="submit" name="add_prod" class="btn btn-success">
<i class="bi bi-check-circle"></i> Save Products
</button>
<a href="#" class="btn btn-secondary">
Cancel
</a>
</div>

</form>

</div>

</div>
</div>
</div>