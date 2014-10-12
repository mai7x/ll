@extends('layouts.master')
@section('title','会社一覧')
@section('h1_title','登録会社一覧')
@section('content')

	
<div class="col-md-12">
<table class="table table-striped">
	<thead>
		<tr>
			<th>会社名</th>
			<th>会社情報</th>
			<th>アクション&nbsp;</th>
		</tr>
	</thead>
	<tbody>

@foreach ($companies as $company)
<tr>
	<td>{{ $company->company_name }}</td>
	<td>{{ $company->company_information }}</td>
	<td>
	<a class="btn btn-primary" href="companies/view/{{ $company->id; }} "><i class="icon-eye-open"></i> View</a >
	<a class="btn btn-primary" href="companies/edit/{{ $company->id; }} "><i class="icon-eye-open"></i> Edit</a >
	<a class="btn btn-small btn-danger" onclick="return confirm('Are you sure?')" href="companies/delete/{{ $company->id; }}">
<i class="icon-trash icon-white"></i> Delete</a>		

	</td>
</tr>
@endforeach
	</tbody>
</table>

<p> 
<a class="btn btn-success" href="companies/add">Add new Company</a>
<a class="btn btn-success" href="person/add">Add new Person</a>
 </p>
		</div>
	</div>
@endsection
