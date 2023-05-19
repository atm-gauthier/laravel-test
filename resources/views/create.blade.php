@extends('layouts.app')

@section('content')

	<h1>
		<STRONG>Créer un nouveau post</STRONG>
	</h1>
	<form method="POST" action="{{ route('posts.store') }}">
		@csrf <!-- Permet d'ajouter un token obligatoire pour les formulaires web avec laravel -->
		<input type="text" name="title" class="border-gray-600 border-2">
		<textarea name="content" cols="30" rows="10"></textarea>
		<button type="SUBMIT" class="bg-green-500">Créer</button>

	</form>

@endsection