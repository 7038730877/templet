<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;
use Image;

class SliderController extends Controller
{
    public function slider()
	{
	    $users=slider::all();
		return view ("Admin.slider ",compact("users"));
	}
   
       public function slidercreate()
	{
         return view("Admin.slideradd");
	}


	   public function slideradd(Request $request)
	{

             $data = new slider();
             $this->validate($request,array(
            'Photo' => 'mimes:pn g,jpg,jpeg|max:1048' ,
           
        ));
        

         if($request->hasFile('Photo'))
         {
            $Photo = $request->file('Photo');
            $imageName = $Photo->getClientOriginalName();
            $directory = 'public/img/';
            $imgUrl1 = $directory.$imageName;
            Image::make($Photo)->save($imgUrl1);
           $data->Photo = $imgUrl1;

          }
         
                 $data->Headling = $request->Headling; 
                 $data->Button_text = $request->Button_text; 
                 $data->Button_Url = $request->Button_Url;
                 $data->position_Button = $request->position_Button;
                 $data->Photo = $imgUrl1;
                 $data->save();
                 return redirect('slider')->with('info','Slider Data successfully Add');
   }
   public function slideredit($id)
   {
    
    $data=slider::where('id','=',$id)->first();
    return view('Admin.slideredit' , compact('data'));
   }
   public function delete($id)
   {
    $data=slider::find($id)->delete();
    return redirect('slider')->with('success', 'slider delete Successfully !!');
    }

}
