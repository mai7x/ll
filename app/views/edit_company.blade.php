@extends('layouts.master')
@section('title','Edit Companies')
@section('h1_title','Edit Companies')
@section('content')

<div class="col-md-12">
<h2>Editing Company <span class='muted'>#{{ $company->company_name }}</span></h2>

@foreach ($errors->all() as $error)
{{ $error }} |
@endforeach

<!-- ここから新しいForm -->
{{ Form::open(); }}

	<div class="form-group">
	<label for="company_name" class="control-label">会社名</label>
	<input value="{{ Input::old('company_name', $company->company_name) }}" class="col-md-8 form-control" name="company_name" type="text" id="company_name">
	</div>

	<div class="form-group">
	<label for="company_name" class="control-label">会社情報</label> <textarea class="col-md-4 form-control" name="company_information" cols="50" rows="10" id="company_information">{{ (Input::old('company_information',$company->company_information)) }}</textarea>

	</div>

	<label class='control-label'>&nbsp;</label>
	<input class="btn btn-primary" type="submit" value="Save">

{{ Form::close(); }}
<!-- ここまで新しいForm -->

</div>



@endsection
