<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Profile $profile){
        $email = 'eddyenin6@gmail.com';
        $profil = $profile->where('email',$email)->first();
        return view('profile.index', ['profile' => $profil]);
    }

    public function create(){
        
    }
}
