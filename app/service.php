<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $table ='services';
    protected $fillable =['Service_Heading','Meta_Title1','Meta_Keyword1','Meta_Description1'];
    public $timpstasmp=false;
}
