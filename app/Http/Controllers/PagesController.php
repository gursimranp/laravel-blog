<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Mail;
use Session;

class PagesController extends Controller
{
	public function getIndex() {
		$posts = Post::orderBy('id', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout() {
		return view('pages.about');
	}

	public function getContact() {
		return view('pages.contact');
	}

	public function postContact(Request $request) {
		$this->validate($request, [
			'email' => 'required|email',
			'subject' => 'required|min:2|max:255',
			'bodyMessage' => 'required|min:2'
		]);

		$data = array(
			'email' => $request->email,
			'subject' => $request->subject,
			'bodyMessage' => $request->bodyMessage
		);

		Mail::send('emails.contact', $data, function($message) use ($data) {
			$message->from($data['email']);
			$message->to('gursimranp@gmail.com');
			$message->subject($data['subject']);
		});

		Session::flash('success', 'Your email was sent.');
		return redirect()->route('homePage');
	}
}
