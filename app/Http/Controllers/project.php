<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Image;
class project extends Controller
{
    public function index()
    {
    	return view("Admin.dashaboard");
    }
    public function setting()
    {
    	$set=Setting::first();
    	return view("Admin.setting" ,compact("set"));
    }
    public function updatesetting( Request $request  )
    {
     
    $slider= Setting::find($request->id);

          $slider->Footer_About = $request->Footer_About;
          $slider->Footer_Address = $request->Footer_Address;
          $slider->Footer_Copyright =$request->Footer_Copyright;
          $slider->Email_Address =$request->Email_Address;
          $slider->Map_Iframe =$request->Map_Iframe;
          $slider->Contact_No =$request->Contact_No;
          $slider->Office_No =$request->Office_No;
         
          $slider->save();
          return redirect('setting')->with('info','Update data SucessFully');
   
    }
  
         public function updatesetting1( Request $request  )
    {
     
    $slider= Setting::find($request->id);

           $this->validate($request,array(
            'Update_images' => 'mimes:png,jpg,jpeg|max:1048' ,
          
        ));
        
         if($request->hasFile('Update_images'))
         {
            
            @unlink($slider->Update_images);
            $Update_images = $request->file('Update_images');
            $imageName = $Update_images->getClientOriginalName();
            $directory = 'public/img/';
            $imgUrl1 = $directory.$imageName;
            Image::make($Update_images)->save($imgUrl1);
            $slider->Update_images = $imgUrl1;
            
         }
            
          $slider->save();
          return redirect('setting')->with('info','Update data SucessFully');
   
    }


  
         public function updatesetting5( Request $request  )
    {
     
    $slider= Setting::find($request->id);

           $this->validate($request,array(
            'Favicon' => 'mimes:png,jpg,jpeg|max:1048' ,
          
        ));
        
         if($request->hasFile('Favicon'))
         {
            
            @unlink($slider->Favicon);
            $Favicon = $request->file('Favicon');
            $imageName = $Favicon->getClientOriginalName();
            $directory = 'public/img/';
            $imgUrl1 = $directory.$imageName;
            Image::make($Favicon)->save($imgUrl1);
            $slider->Favicon = $imgUrl1;
            
         }
            
            $slider->save();
      
          $slider->save();
          return redirect('setting')->with('info','Update data SucessFully');
   
    }
      
      public function updatesetting3( Request $request  )
    {
     
    $slider= Setting::find($request->id);

          $slider->Meta_title =$request->Meta_title;
          $slider->Meta_keyword =$request->Meta_keyword;
          $slider->Meta_Description =$request->Meta_Description;

          $slider->save();
          return redirect('setting')->with('info','Update data SucessFully');
   
    }


}
