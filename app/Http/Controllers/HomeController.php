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
      
        $this->validate($request,[
            'title' => 'required',
            'link' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,bmp|max:102400'
        ]);

        $image = $request->file('image');

        $newImageName = time() . '-' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $newImageName);

        
        $project = new Project;
        $project->title = $request->title;
        $project->link = $request->link;
        $project->image = $newImageName;

        $project->save();
        return redirect('/home/projects')->with('success', 'Project added successfully');


    }

    public function edit(Project $project, $id){
        return view('admin.edit', ['project' => $project->findOrFail($id)]);
    }

    public function update(Project $project,Request $request, $id){

        $newImageName = time() . '-' . $request->image->getClientOriginalName();

        $request->image->move(public_path('images'), $newImageName);

        $validated = [
            'title' => $request->title,
            'link' => $request->link,
            'image' => $newImageName
        ];

        $project = $project->where('id', $id);
        $project->update($validated);
        return redirect('/home/projects')->with('success', 'Updates successfully');
        
    }


    public function destroy(Project $project, $id){
        $project = $project->where('id',$id);
        $project->delete();
        return redirect('/home/projects')->with('status', 'Project deleted successfully');
    }

}
