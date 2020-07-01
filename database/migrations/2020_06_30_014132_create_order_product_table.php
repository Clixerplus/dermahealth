<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->string('product_ref');
            $table->uuid('order_ref');
            $table->primary(['product_ref','order_ref']);
            $table->unsignedSmallInteger('quantity')->default(0);
            $table->unsignedFloat('price')->default(0);
            $table->unsignedFloat('discount')->default(0);
            $table->unsignedFloat('rate')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product');
    }
}
