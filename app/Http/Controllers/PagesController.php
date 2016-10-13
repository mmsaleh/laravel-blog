<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Mail;
use Session;

class PagesController extends Controller {

	public function getIndex() {
		$posts = Post::orderBy('created_at', 'desc')->paginate(5);
		// return view('pages.welcome')->withPosts($posts);
		return view('front.index')->withPosts($posts);
	}

	public function getAbout() {
		$first = 'Mayada';
		$last = 'Saleh';

		$fullname = $first . " " . $last;
		$email = 'saleh.mayada@gmail.com';
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		return view('pages.about')->withData($data);
	}

	public function getContact() {
		return view('pages.contact');
	}

	public function postContact(Request $request) {
		$this->validate($request, [
			'email' => 'required|email',
			'subject' => 'min:3',
			'message' => 'min:10']);
		$data = array(
				'email' => $request->email,
				'subject' => $request->subject,
				'bodyMessage' => $request->message
				);

		Mail::send('emails.contact', $data, function($message) use ($data){
			$message->from($data['email']);
			$message->to('saleh.mayada@gmail.com');
			$message->subject($data['subject']);
		});

		Session::flash('success', 'Your email was sent successfully!');
		return redirect()->url('/');
	}

}