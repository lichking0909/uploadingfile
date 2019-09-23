<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
	//Linking to index page
	public function index()
	{
		return view('index');
	}
	
    //Linking to uploading page
	public function uploading()
	{
		return view('uploading');
	}
	
	//Linking to file uploads page
	public function fileuploads()
	{
		return view('fileuploads');
	}
	
	//Linking to video viewer page
	public function videoviewer()
	{
		return view('videoviewer');
	}
}
