@extends('layouts.master')
@section('title','登録名刺一覧')
@section('h1_title','登録名刺一覧')
@section('content')

	
<div class="col-md-12">
<table class="table table-striped">
	<thead>
		<tr>
			<th>名前</th>
			<th>会社名</th>
			<th>所属</th>
			<th>役職</th>
			<th>電話 </th>
			<th>Email</th>
			<th>アクション</th>
		</tr>
	</thead>
	<tbody>

@foreach ($cards as $card)
<tr>
<td>{{ $card->person->lastname }} {{ $card->person->firstname }} </td>
<td>{{ $card->company->company_name }}  </td>
<td>{{ $card->department }}  </td>
<td>{{ $card->position }}  </td>
<td>{{ $card->tel }}  </td>
<td>{{ $card->email }}  </td>
<td><a class="btn btn-primary" href="cards/edit/{{ $card->id; }} ">Edit</a ></td>

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
