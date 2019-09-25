@extends('layouts.master')


@section('navbar-right')

	<a href="{{ url('/uploading') }}">Upload</a>
	<a href="{{ url('/file') }}" class="active">File Uploads</a>
	<a href="{{ url('/videos') }}">Videos</a>

@stop


@section('content')

	View file uploads
	
@stop
