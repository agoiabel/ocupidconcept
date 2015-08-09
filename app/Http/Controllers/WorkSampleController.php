<?php namespace App\Http\Controllers;

use App\Sample;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class WorkSampleController extends Controller {


	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$samples = Sample::all();
		return view('workSamples.index', compact('samples'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = Category::lists('name', 'id');
		return view('workSamples.create', compact('categories'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$title = Request::input('title');
		$briefDescription = Request::input('briefDescription');
		$categoriesId = Request::input('categories');

		$sample = new Sample;
		$sample = Sample::create(['title'=>$title, 'briefDescription'=>$briefDescription]);

		$sample->categories()->sync($categoriesId);

		if(Request::hasFile('image'))
		{
			$file = Request::file('image');
			$filename = ( time() * rand(1,10) ). '.' . $file->getClientOriginalExtension();
			$file = $file->move(public_path(). '/uploadedFiles', $filename);
			$sample->image = '/uploadedFiles/'.$filename;
			$sample->save();
		}
		flash('The Work Sample Was Created Successfully');
		return redirect('/WorkSample');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$sample = Sample::findOrFail($id);
		$sample->delete();
		flash('Your Work Sample Was Deleted Successfully');
		return redirect()->back();
	}

}
