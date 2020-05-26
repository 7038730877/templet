<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Project extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('settings', function (Blueprint $table) {
            
             $table->bigIncrements('id');
             $table->string('Footer_About');
             $table->string('Footer_Address');
             $table->string('Footer_Copyright');
             $table->string('Email_Address');
             $table->string('Map_Iframe');
             $table->string('Contact_No');
             $table->string('Office_No');
             $table->string('Update_images');
             $table->string('Favicon');
             $table->string('Meta_title');
             $table->string('Meta_keyword');
             $table->string('Meta_Description');
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
