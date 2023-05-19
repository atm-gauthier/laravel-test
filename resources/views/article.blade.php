@extends('layouts.app')

@section('content')

	<h2>
		<STRONG>{{$post->title}}</STRONG>
	</h2>
	<p>
		{{$post->content}}
	</p>
	<h3><a href="{{ route('welcome') }}">Retour</h3>

@endsection