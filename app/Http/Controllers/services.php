<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\serve;
use Image;

class services extends Controller
{
    public function services()
    {
    	$users=serve::all();
    	    return view("Admin.services",compact("users"));

    }
    public function servicecreate()
    {
        return view("Admin.serviceadd");
    }
        	   public function updateservices(Request $request,$id)
	              {

             $users = serve::find($id);
         
        

         if($request->hasFile('Photo'))
         {
            $Photo = $request->file('Photo');
            $imageName = $Photo->getClientOriginalName();
            $directory = 'public/img/';
            $imgUrl1 = $directory.$imageName;
            Image::make($Photo)->save($imgUrl1);
           $users->Photo = $imgUrl1;

          }
         


             $users->name = $request->name;

                 $users->save();
                 return redirect('services')->with('info','Service Data successfully Add');
   }
   public function store(Request $request)
   {
   	 $users = new serve();
           
        

         if($request->hasFile('Photo'))
         {
            $Photo = $request->file('Photo');
            $imageName = $Photo->getClientOriginalName();
            $directory = 'public/img/';
            $imgUrl1 = $directory.$imageName;
            Image::make($Photo)->save($imgUrl1);
           $users->Photo = $imgUrl1;

          }
         


             $users->name = $request->name;

                 $users->save();
                 return redirect('services')->with('info','Service Data successfully Add');

   }
   public function deleteservice($id)
   {
    $usere=serve::find($id)->delete();
    return redirect('services')->with('success', 'slider delete Successfully !!');
    }
   public function serviceedit($id)
   {
    
    $users1=serve::where('id',$id)->get();
    return view('Admin.serviceedit' , compact('users1'));
   }
   public function viewservices()
   {
    $users=serve::all();
    return view("Admin.viewservices",compact("users"));
   }
}






