<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsertblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usertbls', function (Blueprint $table) {
            $table->increments('u_id');
            $table->string('u_Fname');
            $table->string('u_Lname');
            $table->string('u_Email');
            $table->string('u_Phone');
            $table->string('u_Pwd');
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
        Schema::dropIfExists('usertbls');
    }
}
