<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('b_Name');
            $table->string('b_Address');
            $table->string('b_Fname');
            $table->string('b_Lname');
            $table->string('b_Phone');
            $table->string('b_Email');
            $table->unsignedInteger('c_id');
            $table->foreign('c_id')->references('cat_id')->on('categories');
            $table->string('b_Pwd');
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
        Schema::dropIfExists('businesses');
    }
}
