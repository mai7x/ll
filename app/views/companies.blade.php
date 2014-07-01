@extends('layouts.master')
@section('title','会社一覧')
@section('content')

	
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

@foreach ($companies as $company)
<tr>
	<td>{{ $company->company_name }}</td>
	<td>{{ $company->company_information }}</td>
	<td>
	<div class="btn-toolbar"> <div class="btn-group">
	<a class="btn btn-small" href="companies/view/{{ $company->id; }} "><i class="icon-eye-open"></i> View</a >
	<a class="btn btn-small" href="http://153.121.56.186/cards/public/companies/edit/1"><i class="icon-wrench"></i> Edit</a>
	<a class="btn btn-small btn-danger" onclick="return confirm('Are you sure?')" href="companies/delete/{{ $company->id; }}">
<i class="icon-trash icon-white"></i> Delete</a>					</div>
</div>

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
