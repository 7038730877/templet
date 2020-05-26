<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pages extends Model
{
    protected $table='pages';
    protected $fillable=['Home','About','FAQ','Service','Testimonial','Contact','Search','Team','Portfolio'];
}
