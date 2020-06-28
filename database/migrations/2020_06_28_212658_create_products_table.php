<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('ref',6);
            $table->primary('ref');
            $table->string('slug',30)->unique();
            $table->string('name',30);
            $table->unsignedFloat('price')->default(0);
            $table->string('currency',3)->default('USD');
            $table->string('image',20)->nullable();
            $table->string('category',100)->nullable();
            $table->text('description');
            $table->unsignedInteger('stock')->default(0);
            $table->unsignedInteger('stock_min')->default(0);
            $table->unsignedInteger('stock_max')->default(0);
            $table->softDeletes();
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
