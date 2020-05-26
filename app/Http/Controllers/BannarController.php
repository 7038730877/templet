<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bannar;
use Image;


class BannarController extends Controller
{
    public function bannar()
    {
    	$set=bannar::first();
    	return view("Admin.bannar",compact("set"));
    }
    public function updatebannar(Request $request)
	   
	    {
            
            $slider=  bannar::find($request->id);             
           $this->validate($request,array(
            'photo' => 'mimes:png,jpg,jpeg|max:1048' ,
          
        ));
        
         if($request->hasFile('photo'))
        
         {
            
            @unlink($slider->photo);
            $photo = $request->file('photo');
            $imageName = $photo->getClientOriginalName();
            $directory = 'public/img/';
            $imgUrl1 = $directory.$imageName;
            Image::make($photo)->save($imgUrl1);
            $slider->photo = $imgUrl1;
          
         }
             $slider->save();
            return  redirect('bannar');
   
    }
         

  
}