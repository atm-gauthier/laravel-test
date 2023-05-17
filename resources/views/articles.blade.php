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

		@foreach($posts as $id=>$txt)
			<h3><a href="/posts/{{ $id }}">{{ $txt }}</a></h3>
		@endforeach

@endsection