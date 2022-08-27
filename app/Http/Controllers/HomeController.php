<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }

    public function projects(Project $project){
        return view('admin.projects', [ 'projects' => $project::all() ] );
    }

    public function create(){
        return view('admin.create');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'title' => 'required',
            'link' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:5048'
        ]);

        $newImageName = time() . '-' . $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $newImageName);

        if ($validated){
            $project = new Project;
            $project->title = $request->title;
            $project->link = $request->link;
            $project->image = $newImageName;

            $project->save();
            return redirect('/home/projects')->with('status', 'Project added successfully');
        }

    }


}
