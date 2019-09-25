@extends('layouts.master')


@section('navbar-right')

	<a href="{{ url('/uploading') }}">Upload</a>
	<a href="{{ url('/file') }}">File Uploads</a>
	<a href="{{ url('/videos') }}">Videos</a>

@stop


@section('content')

	File Uploader - Group PS1907
	
@stop
