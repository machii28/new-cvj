@extends('layout')


@section('title', 'Home')

@section('content')
    <h1>Welcome to {{ $foo }}!</h1>

    <ul>
    	@foreach($tasks as $task)
    		<li>{{ $task }}</li>
    	@endforeach
    </ul>
@endsection