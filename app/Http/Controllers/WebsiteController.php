<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;
use App\Setting;
use App\bannar;
use App\contact;
use App\Blog;
use App\serve;

class WebsiteController extends Controller
{
    public function index()
    {       
            $users=serve::all();
           $data=Setting::all();
           $slider=slider::all();
    	return view("website.index",compact("slider","data","users"));
    }

    public function service()
    {
           $users=serve::all();
           $data=Setting::all();
        	$bannar=bannar::all();
           
    	return view("website.service",compact("data","bannar","users"));
    }
    public function blog1()
    { 
           $users=Blog::all();
           $data=Setting::all();
           $bannar=bannar::all();

    	return view("website.blog1",compact("bannar","data","users"));
    }
    public function contact()
    {       $contact=contact::all();
           $data=Setting::all();
           $bannar=bannar::all();
    	return view("website.contact",compact("bannar","data","contact"));
    }
}
