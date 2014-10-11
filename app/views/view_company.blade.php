@extends('layouts.master')
@section('title','会社情報')
@section('h1_title','Company Index')
@section('content')

	
<div class="col-md-12">
<h2>Viewing Company <span class='muted'>#{{ $company->id }}</span></h2>
<p>
<strong>会社名:</strong>
{{ $company->company_name; }}</p>

<p>
<strong>会社情報:</strong>
{{ $company->company_information; }}</p>

<h2> 所属社員 </h2>
<!-- 所属する社員の表示 -->
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

<!-- ここから各人の情報 -->
@foreach($cards as $card) 
	<tr>
<td>{{ $card->person->lastname }} {{ $card->person->firstname }} </td>
<td>{{ $card->department; }} </td>
<td>{{ $card->position }} </td>
<td> {{ $card->email; }} </td>
<td> {{ $card->tel; }} </td>
<td> <a class="btn btn-small" href="http://153.121.56.186/cards/public/cards/edit/1"><i class="icon-wrench"></i> Editここ要修正</a></td>
</tr>
@endforeach

<!-- ここまで各人の情報 -->

</table>

	</div>
@endsection

