@extends('layouts.app')

@section('content')

	<h1>
		<STRONG>Fiche article</STRONG>
	</h1>
	<br><br>
	<h2>
		<STRONG>Post {{$post->id.' : '.$post->title}}</STRONG>
	</h2>
	<form method="POST" action="{{ route('posts.update') }}">
		
		@csrf <!-- Permet d'ajouter un token obligatoire pour les formulaires web avec laravel -->
		<input type="hidden" name="id" value="{{ $post->id }}">
		<input type="text" name="title" class="border-gray-600 border-2" value="{{ $post->title }}">
		<textarea name="content" cols="30" rows="10">{{ $post->content }}</textarea>
		<button type="SUBMIT" class="bg-green-500">Modifier</button>

	</form>
	<br><br>
	<h3><STRONG><a href="{{ route('welcome') }}">Retour</STRONG></h3>

	<form method="POST" action="{{ route('posts.delete',$post->id) }}">
		@method('delete')
		@csrf
		<button type="submit" class="btn btn-danger btn-sm"><STRONG>Delete</STRONG></button>
	</form>

@endsection