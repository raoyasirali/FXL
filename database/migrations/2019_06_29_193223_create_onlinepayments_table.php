<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlinepaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onlinepayments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('amount')->default('0');
            $table->string('description')->default('NULL');
            $table->integer('o_id')->default('0');
            $table->unsignedInteger('u_id');
            $table->foreign('u_id')->references('id')->on('users');
            $table->string('stripeToken')->default('NULL');
            $table->integer('b_paid_Status')->default('0');
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
        Schema::dropIfExists('onlinepayments');
    }
}
