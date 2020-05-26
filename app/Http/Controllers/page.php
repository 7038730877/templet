<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homes;
use App\service;
use App\contact;
use App\blg;

class page extends Controller
{
    public function pageshome()

    {
      $data1=blg::first();
    	$data=Homes::first();
      $service=service::first();
      $contact=contact::first();
       return view("Admin.page", compact("data","service","contact","data1"));
    }
    public function updatepage(Request $request)
    {
    	$Homes=Homes::find($request->id);
          $Homes->Title = $request->Title;
          $Homes->Meta_Keyword = $request->Meta_Keyword;

          $Homes->Meta_Description =$request->Meta_Description;
         /* $Homes->Title1 =$request->Title1;
          $Homes->Sub_Title =$request->Sub_Title;
          $Homes->Text =$request->Text;
          $Homes->Video_Background =$request->Video_Background;
          $Homes->Title2 =$request->Title2;
          $Homes->Sub_Title1 =$request->Sub_Title1;
          $Homes->Show_Home =$request->Show_Home;
          $Homes->Title3 =$request->Title3;
          $Homes->Sub_Title2 =$request->Sub_Title2;
          $Homes->item_show =$request->item_show;
          $Homes->Show_Home1 =$request->Show_Home1;
          $Homes->Vedio =$request->Vedio;*/
          $Homes->save();
          return redirect('page')->with('info','Update data SucessFully');





    }


    public function updatepage1(Request $request)
    {

    
        $Homes=Homes::find($request->id);
          $Homes->Title1 =$request->Title1;
          $Homes->Sub_Title =$request->Sub_Title;
          $Homes->Text =$request->Text;
          $Homes->Video_Background =$request->Video_Background;
          $Homes->save();
          return redirect('page')->with('info','Update data SucessFully');
    }



        public function updatepage2(Request $request)
        {
          $Homes=Homes::find($request->id);
           $Homes->Title2 =$request->Title2;
          $Homes->Sub_Title1 =$request->Sub_Title1;
          $Homes->Show_Home =$request->Show_Home;
            $Homes->save();
          return redirect('page')->with('info','Update data SucessFully');


        }
                public function updatepage3(Request $request)
                {
          $Homes=Homes::find($request->id);

          $Homes->Title3 =$request->Title3;
          $Homes->Sub_Title2 =$request->Sub_Title2;
          $Homes->item_show =$request->item_show;
          $Homes->Show_Home1 =$request->Show_Home1;
          $Homes->Vedio =$request->Vedio;
          $Homes->save();
          return redirect('page')->with('info','Update data SucessFully');
}
       


        public function updatepage4(Request $request)
                {
          $service=service::find($request->id);
          $service->Service_Heading =$request->Service_Heading;
          $service->Meta_Title1 =$request->Meta_Title1;
          $service->Meta_Keyword1 =$request->Meta_Keyword1;
          $service->Meta_Description1 =$request->Meta_Description1;
         
          $service->save();
          return redirect('page')->with('info','Update data SucessFully');

}
        public function updatepage5(Request $request)
                {
          $contact=contact::find($request->id);
          $contact->Contact_Heading =$request->Contact_Heading;
          $contact->Contact_Address =$request->Contact_Address;
          $contact->Contact_Email =$request->Contact_Email;
          $contact->Contact_Phone =$request->Contact_Phone;
          $contact->Contact_Map =$request->Contact_Map;
          $contact->Meta_title3 =$request->Meta_title3;
          $contact->Meta_keyword3 =$request->Meta_keyword3;
          $contact->Meta_Description3 =$request->Meta_Description3;

          $contact->save();
          return redirect('page')->with('info','Update data SucessFully');

}
        public function updatepage6(Request $request,$id)
                {
          $data1=blg::find($request->id);
          $data1->Meta_Title4 =$request->Meta_Title4;
          $data1->Meta_Keyword4 =$request->Meta_Keyword4;
          $data1->Meta_Description4 =$request->Meta_Description4;
         
          $data1->save();
          return redirect('page')->with('info','Update data SucessFully');

   }
}