<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashaboardController extends Controller
{
    public function  index()
    {
    	$users=Blog::count();
    	return view("home",compact("users"));
    }
}
