<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('store_id');
            $table->foreign('store_id')->references('id')
                ->on('stores')->onDelete('cascade');
            $table->unsignedBigInteger('table_id');
            $table->foreign('table_id')->references('id')
                ->on('tables')->onDelete('cascade');
            $table->tinyInteger('type')->comment("1:internal; 2:take-away; 3:delivery");
            $table->tinyInteger('payment_method')->nullable()->comment("1:Cash; 2:Credit Card;");
            $table->tinyInteger('status')->default(1)->comment(
                "1:draft; 2:pending; 3:preparing; 4:ready to serve; 5:served; 6:finished; 7:canceled"
            );
            $table->double('service_fees', 8, 2)->nullable();
            $table->double('vat', 8, 2)->nullable();
            $table->double('sub_total',8,2)->nullable();
            $table->double('total_price', 8, 2)->nullable();
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
        Schema::dropIfExists('orders');
    }
}
