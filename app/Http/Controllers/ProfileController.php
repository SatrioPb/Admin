<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {

        $profil = Profile::all();
        $profilcount = Profile::count();

        return view('profile', compact('profil', 'profilcount'));
    }
}
