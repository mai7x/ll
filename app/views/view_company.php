<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Company</title>
		<link type="text/css" rel="stylesheet" href="http://153.121.56.186/cards/public/assets/css/bootstrap.css?1402204909" />
	<style>
		body { margin: 40px; }
	</style>
</head>
<body>
		<div class="col-md-12">
			<h1>Company</h1>
			<hr>
		</div>

	
		<div class="col-md-12">
<h2>Viewing <span class='muted'>#<?php echo $company->id ?></span></h2>
<p>
	<strong>Company name:</strong>
	<?php echo $company->company_name; ?></p>
<p>
	<strong>Company information:</strong>
	<?php echo $company->company_information; ?></p>

<h2> 所属社員 </h2>
<!-- 所属する社員の表示 未着手-->
<table class="table table-striped">
	<thead>
		<tr>
			<th>名前</th>
			<th>所属</th>
			<th>役職</th>
			<th>電話 </th>
			<th>Email</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>

<?php foreach($cards as $card): ?>
<!-- ここから各人の情報 -->
	<tr>
<td><?php echo $card->person->lastname. '  '.$card->person->firstname ; ?></td>
<td><?php echo $card->department; ?> </td>
<td><?php echo $card->position ?> </td>
<td> <?php echo $card->email; ?> </td>
<td> <?php echo $card->tel; ?> </td>
<td> <a class="btn btn-small" href="http://153.121.56.186/cards/public/cards/edit/1"><i class="icon-wrench"></i> Edit</a></td>
</tr>
<?php endforeach; ?>

<!-- ここまで各人の情報 -->

</table>

	<a class="btn btn-small" href="../../companies"><i class="icon-eye-open"></i> CompanyIndex</a>
	</div>
</body>
</html>


