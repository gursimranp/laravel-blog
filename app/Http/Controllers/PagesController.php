<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
	public function index() {
		$posts = Post::orderBy('id', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function about() {
		return view('pages.about');
	}

	public function contact() {
		return view('pages.contact');
	}
}
