
<div class="app-wrapper">

<div class="app-content pt-3 p-md-3 p-lg-4">
<div class="container-xl">

<div class="row g-3 mb-4 align-items-center justify-content-between">
<div class="col-auto">
<h1 class="app-page-title mb-0">Manage contacts details</h1>
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

<div class="tab-content" id="orders-table-tab-content">
<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
<div class="app-card app-card-orders-table shadow-sm mb-5">
<div class="app-card-body">
<div class="table-responsive">
<table class="table app-table-hover mb-0 text-left">
<thead>
<tr>
<th class="cell">FullName</th>
<th class="cell">Email</th>
<th class="cell">Mobile</th>
<th class="cell">Subject</th>
<th class="cell">Message</th>
<th class="cell">Action</th>
</tr>
</thead>
<tbody>
<?php
foreach($managecontact as $row)
{	 
?>	
<tr>
<td class="cell"><?php echo $row["fullname"];?></td>
<td class="cell"><span class="truncate"><?php echo $row["email"];?></span></td>
<td class="cell"><?php echo $row["phone"];?></td>
<td class="cell"><span><?php echo $row["subjectname"];?></span></td>
<td class="cell"><span class="badge bg-success"><?php echo $row["message"];?></span></td>

<td class="cell"><a href="<?php echo $mainurl;?>managecontact?contactid=<?php echo $row["contactid"];?>" class="btn  text-white">❌</a></td>
</tr>
<tr>

<?php 
}
?>
</tbody>
</table>
</div><!--//table-responsive-->

</div><!--//app-card-body-->		
</div><!--//app-card-->
<nav class="app-pagination">
<ul class="pagination justify-content-center">
<li class="page-item disabled">
<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
</li>
<li class="page-item active"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item">
<a class="page-link" href="#">Next</a>
</li>
</ul>
</nav><!--//app-pagination-->

</div><!--//tab-pane-->


</div><!--//table-responsive-->
</div><!--//app-card-body-->		
</div><!--//app-card-->
</div><!--//tab-pane-->
</div><!--//tab-content-->



</div><!--//container-fluid-->
</div><!--//app-content-->
</div><!--//app-wrapper-->    					

