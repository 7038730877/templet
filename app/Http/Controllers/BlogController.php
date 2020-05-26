<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Image;



class BlogController extends Controller
{
    public function blog()
    {
    	$users=Blog::all();
    	return view("Admin.blog",compact("users"));
    }
    public function blogcreate()
    {
    	return view("Admin.blogadd");
    }
    public function updateblog(Request $request,$id)
    {
    	$users=Blog::find($id);

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
             $users->discription = $request->discription;
                 $users->save();
                 return redirect('blog')->with('info','Service Data successfully Add');
   }
      public function blogadd(Request $request)
   {
   	 $users = new Blog();
           
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
             $users->discription = $request->discription;

                 $users->save();
                 return redirect('blog')->with('info','blog Data successfully Add');

      }
      public function deleteblog($id)
      {
    $users=Blog::find($id)->delete();
    return redirect('blog')->with('success', 'blog delete Successfully !!');
      }
      public function editblog($id)
      {
      	$users1=Blog::where('id',$id)->get();
    return view('Admin.blogedit' , compact('users1'));
  }
   public function viewblog()
   {
    $users=Blog::all();
    return view("Admin.viewblog",compact("users"));
   }    
}
