<?php namespace App\Http\Controllers;

use App\Sample;
use App\Project;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	#Pages
	public function index()
	{
		$projects = Project::latest()->limit(7)->get(); 
		return view('pages.index', compact('projects'));
	}

	public function blog()
	{
		$articles = Article::with('tags')->paginate(5);
		return view('pages.blog', compact('articles'));
	}

	public function contact()
	{
		return view('pages.contact');
	}

	public function about()
	{
		return view('pages.about');
	}

	public function sample()
	{
		$samples = Sample::with('categories')->paginate(7);
		return view('pages.sample', compact('samples'));
	}

}
