@extends('layouts.master')
@section('title','Add Companies')
@section('h1_title','Add Companies')
@section('content')


<!-- ここから新しいForm -->
{{ Form::open(); }}
<div class="form-group">
{{ Form::label('company_name', '会社名', array(
	'class' => 'control-label',
	)); }}
{{ Form::text('company_name', '', array(
	'class' => 'col-md-8 form-control',
	));
 }}
</div>
<div class="form-group">
{{ Form::label('company_information', '会社情報', array(
	'class' => 'control-label',
	)); }}
{{ Form::textarea('company_information', '', array(
	'class' => 'col-md-4 form-control',
));
 }}
</div>

<div class="form-group">
<label class='control-label'>&nbsp;</label>
<input class="btn btn-primary" type="submit" value="Save">
</div>

{{ Form::close(); }}
<!-- ここまで新しいForm -->




@endsection
