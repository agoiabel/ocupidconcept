<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ProcessContactRequest;
use App\Http\Controllers\Controller;
use Request;

class ProcessContactController extends Controller {

	public function store(ProcessContactRequest $request)
	{
		$data = [
			'name' => Request::input('name'),
			'email' => Request::input('email'),
			'subject'=> Request::input('subject'),
			'body' => Request::input('body'),
		];

		\Mail::queue('emails.contact', $data, function($message) use ($data){
			$message->from($data['email'])
					->to('oluwatobio943@gmail.com')
					->subject($data['subject']);
		});

		flash('your message was sent sucessfully');
		return redirect()->back();
	}

}
