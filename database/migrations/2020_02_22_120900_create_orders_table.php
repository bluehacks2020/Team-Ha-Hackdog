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
            $table->unsignedBigInteger('buyer_id');
            $table->foreign('buyer_id')->references('id')->on('buyers');
            $table->unsignedBigInteger('logistic_id');
            $table->foreign('logistic_id')->references('id')->on('logistics');
            $table->unsignedBigInteger('shipping_id');
            $table->foreign('shipping_id')->references('id')->on('addresses');
            $table->unsignedBigInteger('billing_id');
            $table->foreign('billing_id')->references('id')->on('addresses');
            $table->double('payment_method');
            $table->double('amount_to_pay');
            $table->string('delivery_status')->default('For Pickup');
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
        Schema::dropIfExists('orders');
    }
}
