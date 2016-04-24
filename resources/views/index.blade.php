@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col s12 m10 offset-m1 flow-text">
		{!! $aboutMe->content !!}
	</div>
</div>
<div class="row">
	<div class="col s12 m10 offset-m1 ">
		<ul class="collection  with-header">
			<li class="collection-header"><h5>Son Yazılarım</h5></li>
			@foreach($posts as $post)
		 	<li class="collection-item"><a href="/blog/{{$post->slug}}">{{$post->title}}</a></li>
			@endforeach
		</ul>
	</div>
</div>
@endsection
