@extends('layouts.admin')

@section('title', 'Sayfalar')

@section('content')
<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
	<a class="btn-floating btn-large red" href='/kanepe/pages/new'>
		<i class="large material-icons">mode_edit</i>
	</a>
</div>

	<table>
		<thead>
		 <tr>
			 <th>Sayfalar</th>
			 <th></th>
			 <th></th>
		 </tr>
	   </thead>

	   <tbody>
		@foreach($pages as $page)
			<tr>
				<td><a href="/{{$page->slug}}">{{$page->title}}</a></td>
				<td><a href='/kanepe/pages/edit/{{$page->id}}'>Duzenle</a></td>
				<td><a href='/kanepe/pages/delete/{{$page->id}}'>Sil</a></td>
			</tr>
		@endforeach
	</tbody>
	</table>
@endsection
