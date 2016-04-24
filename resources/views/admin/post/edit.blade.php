@extends('layouts.admin')
@section('title', 'Yazı Düzenle')

@section('content')

<form method="post" action="/kanepe/posts/new">
	{!! csrf_field() !!}
	<input type="text" name="id" hidden="" value="{{$postum->id}}">
	Slug<input type='text' name='slug' value="{{$postum->slug}}">
	Baslik<input type='text' name='title' value="{{$postum->title}}">
	İcerik<textarea rows="10" cols="10" name="content" class="materialize-textarea">{{$postum->content}}</textarea>
	<button class="btn waves-effect waves-light" type="submit" name="action">Kaydet
    <i class="material-icons right">send</i>
  </button>
</form>
@endsection
