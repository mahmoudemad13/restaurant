<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sub_domain')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->string('logo')->nullable();
            $table->string('phone')->nullable();
            $table->double('minimum_charge',8,2)->nullable();
            $table->double('service_fees',8,2)->nullable();
            $table->double('vat',8,2)->nullable();
            $table->date('subscription_start_date')->nullable();
            $table->date('subscription_end_date')->nullable();
            $table->unsignedTinyInteger('active')->default(1);
            $table->double('delivery_service')->default(0);
            $table->string('lng')->nullable();
            $table->string('lat')->nullable();
            $table->enum('type', ['cafe', 'restaurant']);
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
        Schema::dropIfExists('stores');
    }
}
