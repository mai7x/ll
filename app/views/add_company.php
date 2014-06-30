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
		<div class="col-md-12">
			<h1>Add Companies</h1>
			<hr>


		</div>
<!-- ここから新しいForm -->
<?php echo Form::open(); ?>
<div class="form-group">
<?php 
echo Form::label('company_name', '会社名', array(
	'class' => 'control-label',
	));
echo Form::text('company_name', '', array(
	'class' => 'col-md-8 form-control',
	));
 ?>
</div>
<div class="form-group">
<?php 
echo Form::label('company_information', '会社情報', array(
	'class' => 'control-label',
	));
echo Form::textarea('company_information', '', array(
	'class' => 'col-md-4 form-control',
));
 ?>
</div>

<div class="form-group">
	<label class='control-label'>&nbsp;</label>
<?php echo Form::submit('Save', array(
	'class' => 'btn btn-primary',
	)); ?>
	</div>

<?php echo Form::close(); ?>
<!-- ここまで新しいForm -->



</body>
</html>
