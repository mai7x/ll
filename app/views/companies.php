<!DOCTYPE html>
<html>

<?php $title = "会社一覧"; ?>
<?php include('template.php'); ?>
<body>
	<div class="container">
		<div class="col-md-12">
			<h1>Companies</h1>
			<hr>


		</div>

	
		<div class="col-md-12">
<h2>Listing <span class='muted'>Companies</span></h2>
<br>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Company name</th>
			<th>Company information</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>

<?php foreach ($companies as $company): ?>
<tr>
	<td><?php echo $company->company_name ?></td>
	<td><?php echo $company->company_information ?></td>
	<td>
	<div class="btn-toolbar"> <div class="btn-group">
	<a class="btn btn-small" href="companies/view/<?php echo $company->id; ?> "><i class="icon-eye-open"></i> View</a >
	<a class="btn btn-small" href="http://153.121.56.186/cards/public/companies/edit/1"><i class="icon-wrench"></i> Edit</a>
	<a class="btn btn-small btn-danger" onclick="return confirm('Are you sure?')" href="companies/delete/<?php echo $company->id; ?>">
<i class="icon-trash icon-white"></i> Delete</a>					</div>
</div>

	</td>
</tr>
<?php endforeach; ?>
	</tbody>
</table>

<p> 
<a class="btn btn-success" href="companies/add">Add new Company</a>
<a class="btn btn-success" href="person/add">Add new Person</a>
 </p>
		</div>
	</div>
</body>
</html>

