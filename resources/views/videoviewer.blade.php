@extends('layouts.master')


@section('navbar-right')

	<a href="{{ url('/uploading') }}">Upload</a>
	<a href="{{ url('/file') }}">File Uploads</a>
	<a href="{{ url('/videos') }}" class="active">Videos</a>

@stop

@section('content')

	View uploaded videos
	
@stop

@section('videoView')
<video width="320" height="240" controls>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
Your browser does not support the video tag.
</video>

@stop
