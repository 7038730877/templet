<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Homes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Title');
            $table->string('Meta_Keyword');
            $table->string('Meta_Description');
            $table->string('Title1');
            $table->string('Sub_Title');
            $table->string('Text');
            $table->string('Vedio');
            $table->string('Video_Background');
            $table->string('Title2');
            $table->string('Sub_Title1');
            $table->string('Show_Home1');
            $table->string('Title3');
            $table->string('Sub_Title2');
            $table->string('item_show');
            $table->string('Show_Home');
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
        Schema::dropIfExists('Homes');
    }
}
