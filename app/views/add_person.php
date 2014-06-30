<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Person</title>
		<link type="text/css" rel="stylesheet" href="http://153.121.56.186/cards/public/assets/css/bootstrap.css?1402204909" />
	<style>
		body { margin: 40px; }
	</style>
</head>
<body>
		<div class="col-md-12">
			<h1>Add Person</h1>
			<hr>


		</div>
<h2>New <span class='muted'>Person</span></h2>
<br>

<!-- ここから新しいForm -->
<?php echo Form::open(); ?>

<fieldset>
<div class="form-group">
<?php 
echo Form::label('lastname', '姓', array(
	'class' => 'control-label',
	));
echo Form::text('lastname', '', array(
	'class' => 'col-md-4 form-control',
	));
 ?>
</div>

<div class="form-group">
<?php 
echo Form::label('firstname', '名', array(
	'class' => 'control-label',
	));
echo Form::text('firstname', '', array(
	'class' => 'col-md-4 form-control',
	));
 ?>
</div>

<div class="form-group">
<?php 
echo Form::label('lastname_furigana', '姓（ふりがな）', array(
	'class' => 'control-label',
	));
echo Form::text('lastname_furigana', '', array(
	'class' => 'col-md-4 form-control',
	));
 ?>
</div>

<div class="form-group">
<?php 
echo Form::label('firstname_furigana', '名（ふりがな）', array(
	'class' => 'control-label',
	));
echo Form::text('fistname_furigana', '', array(
	'class' => 'col-md-4 form-control',
	));
 ?>
</div>


<div class="form-group">
<?php 
echo Form::label('foreign', '日本人');
echo Form::radio('forign', '0', true) . ' | ';
echo Form::label('foreign', '日本人以外');
echo Form::radio('forign', '1', false);
 ?>
</div>

<div class="form-group">
<?php 
echo Form::label('information', '情報', array(
	'class' => 'control-label',
	));
echo Form::textarea('information', '', array(
	'class' => 'col-md-4 form-control',
));
 ?>
</div>

<h2>会社情報</h2>

<div class="form-group">
<?php 
echo Form::label('company', '会社名', array(
	'class' => 'control-label',
	));
$select_menu_of_companies[0] = "選択してください";
echo Form::select('company_id',  $select_menu_of_companies,'0');
 ?>
</div>

<div class="form-group">
<?php 
echo Form::label('department', '部署名', array(
	'class' => 'control-label',
	));
echo Form::text('department', '', array(
	'class' => 'col-md-4 form-control',
	));
 ?>
</div>

<div class="form-group">
<?php 
echo Form::label('position', '役職', array(
	'class' => 'control-label',
	));
echo Form::text('position', '', array(
	'class' => 'col-md-4 form-control',
	));
 ?>
</div>

<div class="form-group">
<?php 
echo Form::label('postcode', '郵便番号', array(
	'class' => 'control-label',
	));
echo Form::text('postcode', '', array(
	'class' => 'col-md-4 form-control',
	));
 ?>
</div>

<div class="form-group">
<?php 
echo Form::label('address', '住所', array(
	'class' => 'control-label',
	));
echo Form::text('address', '', array(
	'class' => 'col-md-4 form-control',
	));
 ?>
</div>

<div class="form-group">
<?php 
echo Form::label('email', 'E-Mail', array(
	'class' => 'control-label',
	));
echo Form::text('email', '', array(
	'class' => 'col-md-4 form-control',
	));
 ?>
</div>

<div class="form-group">
<?php 
echo Form::label('tel', '電話番号', array(
	'class' => 'control-label',
	));
echo Form::text('tel', '', array(
	'class' => 'col-md-4 form-control',
	));
 ?>
</div>

<div class="form-group">
<?php 
echo Form::label('fax', 'Fax', array(
	'class' => 'control-label',
	));
echo Form::text('fax', '', array(
	'class' => 'col-md-4 form-control',
	));
 ?>
</div>



<!-- ボタン -->
<div class="form-group">
	<label class='control-label'>&nbsp;</label>
<?php echo Form::submit('Save', array(
	'class' => 'btn btn-primary',
	)); ?>
	</div>

<?php echo Form::close(); ?>
<!-- ここまで新しいForm -->

<p><a href="http://153.121.56.186/cards/public/people">Back</a></p>


</body>
</html>
