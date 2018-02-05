<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserProfileController extends Controller
{
    public function index()
    {

    	$users = User::all();
    	
    	return view('profiles/profile', compact('users'));
    }

    public function update()
    {
    	return view('profiles/update');
    }
}
