<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Companies</title>
		<link type="text/css" rel="stylesheet" href="http://153.121.56.186/cards/public/assets/css/bootstrap.css?1402204909" />
	<style>
		body { margin: 40px; }
	</style>
</head>
<body>
<a href="http://153.121.56.186/cards/public/cards">Cards</a>  <a href="http://153.121.56.186/cards/public/people">People</a>	<div class="container">
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
<!--　ここからはLaravelに書き換える -->
<?php foreach ($companies as $company): ?>
<?php echo $company->company_name; ?>
<tr>
	<td><?php echo $company->company_name ?></td>
	<td><?php echo $company->company_information ?></td>
	<td>
	<div class="btn-toolbar"> <div class="btn-group">
	<a class="btn btn-small" href="http://153.121.56.186/cards/public/companies/view/1"><i class="icon-eye-open"></i> View</a>						<a class="btn btn-small" href="http://153.121.56.186/cards/public/companies/edit/1"><i class="icon-wrench"></i> Edit</a>						<a class="btn btn-small btn-danger" onclick="return confirm('Are you sure?')" href="http://153.121.56.186/cards/public/companies/delete/1"><i class="icon-trash icon-white"></i> Delete</a>					</div>
</div>

	</td>
</tr>
<?php endforeach; ?>
<tr>


			<td>シスコシステムズ合同会社</td>
			<td></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<a class="btn btn-small" href="http://153.121.56.186/cards/public/companies/view/2"><i class="icon-eye-open"></i> View</a>						<a class="btn btn-small" href="http://153.121.56.186/cards/public/companies/edit/2"><i class="icon-wrench"></i> Edit</a>						<a class="btn btn-small btn-danger" onclick="return confirm('Are you sure?')" href="http://153.121.56.186/cards/public/companies/delete/2"><i class="icon-trash icon-white"></i> Delete</a>					</div>
				</div>

			</td>
		</tr>
		<tr>

			<td>ジェイズコミュニケーション</td>
			<td></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<a class="btn btn-small" href="http://153.121.56.186/cards/public/companies/view/3"><i class="icon-eye-open"></i> View</a>						<a class="btn btn-small" href="http://153.121.56.186/cards/public/companies/edit/3"><i class="icon-wrench"></i> Edit</a>						<a class="btn btn-small btn-danger" onclick="return confirm('Are you sure?')" href="http://153.121.56.186/cards/public/companies/delete/3"><i class="icon-trash icon-white"></i> Delete</a>					</div>
				</div>

			</td>
		</tr>
		<tr>

			<td>NTT東日本</td>
			<td></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<a class="btn btn-small" href="http://153.121.56.186/cards/public/companies/view/4"><i class="icon-eye-open"></i> View</a>						<a class="btn btn-small" href="http://153.121.56.186/cards/public/companies/edit/4"><i class="icon-wrench"></i> Edit</a>						<a class="btn btn-small btn-danger" onclick="return confirm('Are you sure?')" href="http://153.121.56.186/cards/public/companies/delete/4"><i class="icon-trash icon-white"></i> Delete</a>					</div>
				</div>

			</td>
		</tr>
	</tbody>
</table>

<p>
	<a class="btn btn-success" href="http://153.121.56.186/cards/public/companies/create">Add new Company</a>
</p>
		</div>
		<footer>
			<p class="pull-right">Page rendered in 0.0473s using 3.674mb of memory.</p>
			<p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: 1.7.1</small>
			</p>
		</footer>
	</div>
</body>
</html>

