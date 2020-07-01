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
            $table->uuid('ref')->primary();
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email');
            $table->string('phone', 15);
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->decimal('amount')->default(0);
            $table->string('currency',3);
            $table->decimal('rate');
            $table->unsignedSmallInteger('method_payment');
            $table->unsignedSmallInteger('status')->default(0); // 0 = Pending, 1 = Paid, 9 = Expirada.
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
