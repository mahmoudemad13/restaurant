<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderAudienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_audience', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')
                ->on('orders')->onDelete('cascade');
            $table->unsignedBigInteger('waiter_id');
            $table->foreign('waiter_id')->references('id')
                ->on('users')->onDelete('cascade');
//            $table->unsignedBigInteger('cashier_id');
//            $table->foreign('cashier_id')->references('id')
//                ->on('cashiers')->onDelete('cascade');
//            $table->unsignedBigInteger('chief_id');
//            $table->foreign('chief_id')->references('id')
//                ->on('chiefs')->onDelete('cascade');
//            $table->unsignedBigInteger('delivery_id');
//            $table->foreign('delivery_id')->references('id')
//                ->on('deliveries')->onDelete('cascade');
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
        Schema::dropIfExists('order_audienece');
    }
}
