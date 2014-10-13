@extends('layouts.master')
@section('title','新規登録')
@section('h1_title','新規登録')
@section('content')

<!-- if there are login errors, show them here -->
<p>
{{ Session::get('flash_error')}}

</p>

<!-- ここから新しいForm -->
{{ Form::open(); }}

<div class="form-group">
{{ Form::label('lastname', '姓', array(
	'class' => 'control-label',
	)); }}
{{  Form::text('lastname', '', array(
	'class' => 'col-md-4 form-control',
	)); }} 
{{ $errors->first('lastname') }}
</div>

<div class="form-group">
{{  Form::label('firstname', '名', array(
	'class' => 'control-label',
	)); }}
{{  Form::text('firstname', '', array(
	'class' => 'col-md-4 form-control',
	)); }} 

</div>
<div class="form-group">
{{  Form::label('lastname_furigana', '姓（ふりがな）', array(
	'class' => 'control-label',
	)); }}
{{  Form::text('lastname_furigana', '', array(
	'class' => 'col-md-4 form-control',
	)); }} 
</div>

<div class="form-group">
{{  Form::label('firstname_furigana', '名（ふりがな）', array(
	'class' => 'control-label',
	)); }}
{{  Form::text('firstname_furigana', '', array(
	'class' => 'col-md-4 form-control',
	)); }} 
</div>


<div class="form-group">
{{  Form::label('foreign', '日本人')}}  
{{  Form::radio('foreign', '0', true) . ' | '}}
{{  Form::label('foreign', '日本人以外')}} 
{{ Form::radio('foreign', '1', false); }}
</div>

<div class="form-group">
{{ Form::label('information', '情報', array(
	'class' => 'control-label',
	))}}
{{ Form::textarea('information', '', array(
	'class' => 'col-md-4 form-control',
)) }}
</div>

<h2>会社情報</h2>

<div class="form-group">
{{ Form::label('company', '会社名', array(
	'class' => 'control-label',
	)) }}
{{ Form::select('company_id',  $select_menu_of_companies,'0'); }}
{{ $errors->first('company_id') }}
</div>

<div class="form-group">
{{ Form::label('department', '部署名', array(
	'class' => 'control-label',
	)) }}
{{ Form::text('department', '', array(
	'class' => 'col-md-4 form-control',
	))}}
</div>

<div class="form-group">
{{ Form::label('position', '役職', array(
	'class' => 'control-label',
	))}}
{{ Form::text('position', '', array(
	'class' => 'col-md-4 form-control',
	))}}
</div>

<div class="form-group">
{{  Form::label('postcode', '郵便番号', array(
	'class' => 'control-label',
	)) }}
{{  Form::text('postcode', '', array(
	'class' => 'col-md-4 form-control',
	)) }}
</div>

<div class="form-group">
{{  Form::label('address', '住所', array(
	'class' => 'control-label',
	)) }}
{{  Form::text('address', '', array(
	'class' => 'col-md-4 form-control',
	)) }}
</div>

<div class="form-group">
{{  Form::label('email', 'E-Mail', array(
	'class' => 'control-label',
	)) }}
{{  Form::text('email', '', array(
	'class' => 'col-md-4 form-control',
	)) }}
</div>

<div class="form-group">
{{  Form::label('tel', '電話番号', array(
	'class' => 'control-label',
	)) }}
{{  Form::text('tel', '', array(
	'class' => 'col-md-4 form-control',
	)) }}
</div>

<div class="form-group">
{{  Form::label('fax', 'Fax', array(
	'class' => 'control-label',
	)) }}
{{  Form::text('fax', '', array(
	'class' => 'col-md-4 form-control',
	)) }}
</div>



<!-- ボタン -->
<div class="form-group">
	<label class='control-label'>&nbsp;</label>
{{Form::submit('Save', array(
	'class' => 'btn btn-primary',
	)) }}
</div>

{{ Form::close(); }}
<!-- ここまで新しいForm -->


@endsection

