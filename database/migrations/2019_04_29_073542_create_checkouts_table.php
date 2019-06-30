<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('oid');
            $table->unsignedInteger('u_id');
            $table->unsignedInteger('p_id');
            $table->unsignedInteger('b_id');
            $table->foreign('u_id')->references('id')->on('users');
            $table->foreign('p_id')->references('id')->on('products');
            $table->foreign('b_id')->references('id')->on('businesses');
            $table->string('address');
            $table->string('c_area');
            $table->string('contact');
            $table->string('bill');
            $table->integer('o_Status');
            $table->integer('online_Payment')->default('0');;
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
        Schema::dropIfExists('checkouts');
    }
}
