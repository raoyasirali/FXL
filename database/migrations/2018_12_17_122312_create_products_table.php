<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('p_Name');
            $table->longText('p_Desc');
            $table->string('p_Img_Name');
            $table->double('p_Price');
            $table->unsignedInteger('b_id');
            $table->unsignedInteger('c_id');
            $table->foreign('c_id')->references('cat_id')->on('categories');
            $table->foreign('b_id')->references('id')->on('businesses');
            $table->integer('p_Status')->default('0');
            $table->string('p_Percent')->default('NULL');
            $table->double('p_Percent_Price')->default('0');
            $table->double('p_PrePrice')->default('0');
            $table->string('p_date')->default('NULL');
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
        Schema::dropIfExists('products');
    }
}
