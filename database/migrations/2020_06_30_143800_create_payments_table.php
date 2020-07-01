<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->uuid('ref')->primary();
            $table->uuid('order_ref');
            $table->foreign('order_ref')->references('ref')->on('orders');
            $table->string('bank_name');
            $table->string('transaction_ref');
            $table->dateTime('date');
            $table->decimal('amount');
            $table->string('currency',3);
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
        Schema::dropIfExists('payments');
    }
}
