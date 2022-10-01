<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Project;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function admin(Profile $profile){
        $email = 'eddyenin6@gmail.com';
        $profil = $profile->where('email',$email)->first();
        return view('admin.index', ['profile' => $profil]);
    }

    public function create(){
        return view('admin.profile.create');
    }

    public function store(Request $request, Profile $profile){

        $this->validate($request,[
            'fname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'bio' => 'required',
            'resume' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,bmp|max:102400'
        ]);

        $image = $request->file('image');
        $data = $request->file('resume');

        $newDoc = time() . '-' . $data->getClientOriginalExtension();
        $data->move(public_path('docs'), $newDoc);

        $newImageName = time() . '-' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $newImageName);

        
        $profile = new Profile;
        $profile->name = $request->fname;
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->bio = $request->bio;
        $profile->resume = $newDoc;
        $profile->image = $newImageName;

        $profile->save();
        return redirect('/admin')->with('success', 'Profile added successfully');

    }

    public function edit(Profile $profile, $id){
        
        return view('admin.profile.edit', ['profile' => Profile::find($id)]);
    }

    public function update(Profile $profile,Request $request, $id){

        // $editImageName = time() . '-' . $request->image->getClientOriginalName();

        // $request->image->move(public_path('images'), $editImageName);

        $validated = [
            'name' => $request->fname,
            'email' => $request->email,
            'phone' => $request->phone,
            'bio' => $request->bio
            
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
