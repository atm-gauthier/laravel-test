@extends('layouts.app')

@section('content')

	<h2>
		{{$post}}
	</h2>
	<h3><a href="{{ route('welcome') }}">Retour</h3>

@endsection