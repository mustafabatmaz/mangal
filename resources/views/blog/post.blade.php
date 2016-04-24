@extends('layouts.app')

@section('title', '{{$post->title}}')

@section('header')
<div class="row ">
	<div class="col m12">
		<span class="right grey-text text-lighten-3" style="padding: 20px">
			<a href="/" class="grey-text text-lighten-4 ">
				<span class="genericon genericon-home" style="font-size:2.5em"></span>
			</a>
			<a href="mailto:mustafabatmazz@gmail.com" class="grey-text text-lighten-4">
				<span class="genericon genericon-mail" style="font-size : 2.5em"></span>
			</a>
			<a href="https://twitter.com/MustafaBatmaz" class="grey-text text-lighten-4">
				<span class="genericon genericon-twitter" style="font-size : 2.5em"></span>
			</a>
			<a href="https://github.com/mustafabatmaz" class="grey-text text-lighten-4">
				<span class="genericon genericon-github" style="font-size : 2.5em"></span>
			</a>
		</span>
	</div>
</div>
<div class="row">
	<div class="col s12">
		<h4 class="center-align grey-text text-lighten-3" style="padding: 50px 0px">{{$post->title}}</h4>
	</div>
</div>
@endsection

@section('content')
<div class="row">
	<div class="col s12 m8 offset-m2 flow-text">
		{{$post->content}}
	</div>
</div>
@include('common.disqus')
@endsection
