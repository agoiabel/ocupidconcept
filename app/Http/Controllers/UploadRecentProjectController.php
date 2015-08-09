<?php namespace App\Http\Controllers;

use App\Project;
use App\Http\Requests;
use App\Http\Requests\UploadRecentProject;
use App\Http\Controllers\Controller;
use Request;

class UploadRecentProjectController extends Controller {


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
		$projects = Project::all();
		return view('recentprojects.index', compact('projects'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('recentprojects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UploadRecentProject $request)
	{
		$title = Request::input('title');
		$category = Request::input('category');

		$project = new Project;
		$project = Project::create(['title'=>$title, 'category'=>$category]);

		if(Request::hasFile('image'))
		{
			$file = Request::file('image');
			$filename = ( time() * rand(1,10) ). '.' . $file->getClientOriginalExtension();
			$file = $file->move(public_path(). '/uploadedFiles', $filename);
			$project->image = '/uploadedFiles/'.$filename;
			$project->save();
		}
		flash('Project Was Created Successfully');
		return redirect('UploadRecentProject');
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$project = Project::findOrFail($id);
		$project->delete();
		flash('Your Project Was Deleted Successfully');
		return redirect()->back();
	}

}
