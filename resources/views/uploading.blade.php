@extends('layouts.master')


@section('navbar-right')

	<a href="{{ url('/uploading') }}" class="active">Upload</a>
	<a href="{{ url('/file') }}">File Uploads</a>
	<a href="{{ url('/videos') }}">Videos</a>

@stop

@section('content')

	Upload a file
	
@stop
