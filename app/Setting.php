<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
     protected $fillable =  [
        'Footer_About', 'Footer_Address', 'Footer_Copyright','Email_Address','Map_Iframe','Contact_No','Office_No','Update_images','Favicon','Meta_title','Meta_keyword','Meta_Description'
    ];

    public $timpstasmp=false;
}
