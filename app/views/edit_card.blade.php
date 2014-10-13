@extends('layouts.master')
@section('title','Edit Companies')
@section('h1_title','Edit Companies')
@section('content')

<div class="col-md-12">
<h2>名刺情報編集</span></h2>

@foreach ($errors->all() as $error)
{{ $error }} |
@endforeach

<!-- ここから新しいForm -->
{{ Form::open(); }}
	<input type="hidden" name="company_id" value="{{$card->company_id }}" >

	<div class="form-group">
	<label for="department" class="control-label">部署名</label>
	<input value="{{ Input::old('department', $card->department) }}" class="col-md-4 form-control" name="department" type="text" id="department">
	</div>

	<div class="form-group">
	<label for="position" class="control-label">役職</label>
	<input value="{{ Input::old('position', $card->position) }}" class="col-md-4 form-control" name="position" type="text" id="position">
	</div>

	<div class="form-group">
	<label for="postcode" class="control-label">郵便番号</label>
	<input value="{{ Input::old('postcode', $card->postcode) }}" class="col-md-4 form-control" name="postcode" type="text" id="postcode">
	</div>

	<div class="form-group">
	<label for="address" class="control-label">役職</label>
	<input value="{{ Input::old('address', $card->address) }}" class="col-md-4 form-control" name="address" type="text" id="address">
	</div>

	<div class="form-group">
	<label for="email" class="control-label">E-Mail</label>
	<input value="{{ Input::old('email', $card->email) }}" class="col-md-4 form-control" name="email" type="text" id="email">
	</div>

	<div class="form-group">
	<label for="tel" class="control-label">電話番号</label>
	<input value="{{ Input::old('tel', $card->tel) }}" class="col-md-4 form-control" name="tel" type="text" id="tel">
	</div>

	<div class="form-group">
	<label for="fax" class="control-label">fax</label>
	<input value="{{ Input::old('fax', $card->fax) }}" class="col-md-4 form-control" name="fax" type="text" id="fax">
	</div>

	<label class='control-label'>&nbsp;</label>
	<input class="btn btn-primary" type="submit" value="Save">

{{ Form::close(); }}
<!-- ここまで新しいForm -->

</div>



@endsection
