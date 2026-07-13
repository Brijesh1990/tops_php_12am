<div class="app-wrapper">
<div class="app-content pt-3 p-md-3 p-lg-4">
<div class="container-xl">

<div class="row g-3 mb-4 align-items-center justify-content-between">
<div class="col-auto">
<h1 class="app-page-title mb-0">Update Category Data</h1>
</div>
</div>

<div class="app-card app-card-settings shadow-sm p-4">

<form enctype="multipart/form-data" method="POST">

<div class="mb-3">
<label class="form-label text-success">Edit Category Name <span class="text-danger">*</span></label>
<input type="text"
class="form-control"
name="catname" value="<?php echo $editcategory[0]["catname"];?>"
placeholder="Enter Category Name"
required>
</div>

<div class="mb-3">
<label class="form-label text-success">Edit Category Description</label>
<textarea class="form-control"
name="catdesc"
rows="4"
placeholder="Enter Category Description"><?php echo $editcategory[0]["catdesc"];?></textarea>
</div>

<div class="mb-3">
<label class="form-label text-success">Edit Status</label>
<select class="form-select" name="status">
<option value="active">Active</option>
<option value="inactive">Inactive</option>
</select>
</div>

<div class="mb-3">
<img src="<?php echo $editcategory[0]["catimg"];?>" class="w-25">
<input type="file"
class="form-control"
name="catimg">
</div>

<div class="mt-4">
<button type="submit" name="upd_cat" class="btn btn-success">
<i class="bi bi-check-circle"></i> Update Category
</button>

<a href="category_list.php" class="btn btn-secondary">
Cancel
</a>
</div>

</form>

</div>

</div>
</div>
</div>