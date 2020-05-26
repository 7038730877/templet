<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table ='contacts';
    protected $fillable =[
    	'Contact_Heading','Contact_Address','Contact_Email','Contact_Phone','Meta_title3','Meta_keyword3','Meta_Description3','Contact_Map'];

}
