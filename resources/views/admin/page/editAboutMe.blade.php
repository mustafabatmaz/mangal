@extends('layouts.admin')

@section('title', 'Hakkımda Duzenle')

@section('content')

<form method="post" action="/kanepe/aboutme">
	{!! csrf_field() !!}
	<input type="text" name="id" hidden="" value="{{$aboutMe->id}}">
	İcerik<textarea rows="10" cols="10" id="content" name="content" class="materialize-textarea">{{$aboutMe->content}}</textarea>
	<button class="btn waves-effect waves-light" type="submit" name="action">Kaydet
		<i class="material-icons right">send</i>
	</button>
	<script>var simplemde = new SimpleMDE({ element: document.getElementById("content") });</script>
</form>
@endsection
