<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\category;

class AddcategoryController extends Controller
{
    public function addcategory()
    {
    	$users=category::all();
    	return view("Admin.addcategory",compact("users"));
    }
    public function categorycreate()
    {
    	return view("Admin.categoryadd");
    }
    public function categoryadd(Request $request)
    {
    	$users = new category();
    	$users->name = $request->name;
    	$users->save();
    	return redirect("addcategory");
    }
    public function updatecategory(Request $request,$id)
    {
    	$users = category::find($id);
    	$users->name = $request->name;
    	$users->save();
    	return redirect("addcategory");

    }
    public function categoryedit($id)
    {
    	$users=category::where('id','=',$id)->first();
    	return view("Admin.categoryedit",compact("users"));
    }
    public function deletecategory($id)
    {
    	$users=category::find($id)->delete();
         return redirect("addcategory");
    }
}
