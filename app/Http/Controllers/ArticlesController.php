<?php namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use Request;

class ArticlesController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', ['except'=>'show']);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = \Auth::user()->articles;
		return view('article.index', compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$tags = Tag::lists('name', 'id');
		return view('article.create', compact('tags'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ArticleRequest $request)
	{
		$title = Request::input('title');
		$briefDescription = Request::input('briefDescription');
		$body = Request::input('body');
		$tagIds = Request::input('tags');
		$user_id = \Auth::user()->id;

		$article = new Article;
		$article = Article::create(['title'=>$title,'briefDescription'=>$briefDescription,'body'=>$body]);
		$article->user_id = $user_id;

		$article->tags()->sync($tagIds);

		if(Request::hasFile('image'))
		{
			$file = Request::file('image');
			$filename = ( time() * rand(1,10) ). '.' . $file->getClientOriginalExtension();
			$file = $file->move(public_path(). '/uploadedFiles', $filename);
			$article->image = '/uploadedFiles/'.$filename;
			$article->save();
		}

		flash('Your Article Was Created Successfully');
		return redirect('/articles');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$article = Article::with('comments')->findOrFail($id);
		return view('article.show', compact('article'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tags = Tag::lists('name', 'id');
		$article = Article::findOrFail($id);
		return view('article.edit', compact('article', 'tags'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ArticleRequest $request)
	{
		$article = Article::findOrFail($id);
		$article->update(Request::except('image'));
		if(Request::hasFile('image'))
		{
			$file = Request::file('image');
			$filename = ( time() * rand(1,10) ). '.' . $file->getClientOriginalExtension();
			$file = $file->move(public_path(). '/uploadedFiles', $filename);
			$article->image = '/uploadedFiles/'.$filename;
			$article->save();
		}
		flash('Your Article Was Updated Successfully');
		return redirect('/articles');	
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$article = Article::findOrFail($id);
		$article->delete();

		flash('Your Article Was Deleted Successfully');
		return redirect()->back();
	}

}
