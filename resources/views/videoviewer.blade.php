@extends('layouts.master')


@section('navbar-right')

	<a href="{{ url('/uploading') }}">Upload</a>
	<a href="{{ url('/file') }}">File Uploads</a>
	<a href="{{ url('/videos') }}" class="active">Videos</a>

@stop

@section('content')

	View uploaded videos
	
@stop
