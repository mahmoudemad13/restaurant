<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemOptionValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_item_option_values', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_item_id');
            $table->foreign('order_item_id')->references('id')
                ->on('order_items')->onDelete('cascade');
            $table->unsignedBigInteger('product_option_value_id');
            $table->foreign('product_option_value_id')->references('id')
                ->on('product_option_values')->onDelete('cascade');
            $table->double('price',8,2)->nullable();
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
        Schema::dropIfExists('order_item_option_values');
    }
}
