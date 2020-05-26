<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Contact_Heading');
            $table->string('Contact_Address');
            $table->string('Contact_Email');
            $table->string('Contact_Phone');
            $table->string('Contact_Map');
            $table->string('Meta_title3');
            $table->string('Meta_keyword3');
            $table->string('Meta_Description3');

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
        Schema::dropIfExists('contacts');
    }
}
