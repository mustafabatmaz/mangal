@extends('layouts.admin')

@section('title', 'Yazılar')

@section('content')
<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
	<a class="btn-floating btn-large red" href='/kanepe/posts/new'>
		<i class="large material-icons">mode_edit</i>
	</a>
</div>

	<table>
		<thead>
		 <tr>
			 <th>Yazılar</th>
			 <th></th>
			 <th></th>
		 </tr>
	   </thead>

	   <tbody>
		@foreach($posts as $post)
			<tr>
				<td><a href="/blog/{{$post->slug}}">{{$post->title}}</a></td>
				<td><a href='/kanepe/posts/edit/{{$post->id}}'>Duzenle</a></td>
				<td><a href='/kanepe/posts/delete/{{$post->id}}'>Sil</a></td>
			</tr>
		@endforeach
	</tbody>
	</table>
	{!! $paginator->render() !!}
@endsection
