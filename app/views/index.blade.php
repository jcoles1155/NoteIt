@extends('_master')

@section('title')
	Welcome to NoteIt!
@stop

@section('head')
	<h1> Welcome to NoteIt! </h1>

@stop

@section('content')

	{{ Form::open(array('url' => '/book', 'method' => 'GET')) }}

		{{ Form::label('query','Search') }}

		{{ Form::text('query'); }}

		{{ Form::submit('Search'); }}

	{{ Form::close() }}

@stop