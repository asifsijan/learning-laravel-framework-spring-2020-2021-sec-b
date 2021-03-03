<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class PostController extends Controller
{
	public function index(){
		$postlist=Post::all();

		return view('posts.index')->with('list', $postlist);
	}
	public function create(){
		return view('posts.create');
	}

}
