@extends('layouts.app')

@section('content')

		<h1>
			Liste des articles
		</h1>
		<h2>
			{{$title}}
		</h2>
		<h2>
			{{$title2}}
		</h2>

		<!--@foreach($posts as $id=>$txt)
			<h3><a href="/posts/{{ $id }}">{{ $txt }}</a></h3>
		@endforeach-->

		@if($posts->count() > 0)
		@foreach($posts as $post)
			<h3><h3><a href="{{ route('posts.show', ['id'=>$post->id]) }}">{{ $post->title }}</a></h3></h3>
			<br>
		@endforeach
		@else
			<span>Queneni !</span>
		@endif

@endsection