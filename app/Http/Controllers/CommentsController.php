<?php namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests;
use App\Http\Requests\CommentRequest;
use App\Http\Controllers\Controller;
use Request;

class CommentsController extends Controller {


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CommentRequest $request)
	{
		$article_id = Request::input('article_id');
		$name = Request::input('name');
		$commentBody = Request::input('commentBody');

		$comment = new Comment;
		$comment->article_id = $article_id;
		$comment->name = $name;
		$comment->commentBody = $commentBody;
		$comment->save();

		flash('Your Comment Has Been Posted');
		return redirect()->back();
	}

}
