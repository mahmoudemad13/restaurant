<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductOptionValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_option_values', function (Blueprint $table) {
            $table->bigIncrements('id');
//            $table->unsignedBigInteger('product_id')->nullable();
//            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
//            $table->unsignedBigInteger('option_id')->nullable();
//            $table->foreign('option_id')->references('id')->on('options')->onDelete('cascade');
            $table->unsignedBigInteger('product_option_id')->nullable();
            $table->foreign('product_option_id')->references('id')->on('product_options')->onDelete('cascade');
            $table->string('value')->nullable();
            $table->double('price',8,2)->nullable();
            $table->text("description")->nullable();
            $table->tinyInteger("available")->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_option_values');
    }
}
