<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function admin(){
        return view('admin.index');
    }

    public function create(){
        return view('admin.profile.create');
    }

    public function store(Request $request){

        $this->validate($request,[
            'fname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'bio' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,bmp|max:102400'
        ]);

        $image = $request->file('image');

        $newImageName = time() . '-' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $newImageName);

        
        $profile = new Profile;
        $profile->name = $request->fname;
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->bio = $request->bio;
        $profile->image = $newImageName;

        $profile->save();
        return redirect('/admin')->with('success', 'Profile added successfully');

    }

    public function edit(Profile $profile, $id){
        return view('admin.profile.edit', ['profile' => $profile->findOrFail($id)]);
    }

    public function update(Profile $profile,Request $request, $id){

        $newImageName = time() . '-' . $request->image->getClientOriginalName();

        $request->image->move(public_path('images'), $newImageName);

        $validated = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'bio' => $request->bio,
            'image' => $newImageName
        ];

        $profile = $profile->where('id', $id);
        $profile->update($validated);
        return redirect('/admin')->with('success', 'Updated successfully');
        
    }

    public function destroy(Profile $profile, $id){
        $profile = $profile->where('id',$id);
        $profile->delete();
        return redirect('/admin')->with('status', 'Profile deleted successfully');
    }
}
