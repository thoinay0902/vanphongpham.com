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
            $table->id();

            $table->unsignedBigInteger('catetories_id');
             $table->foreign('catetories_id')->references('id')->on('catetories')->onDelete('cascade');
             $table->unsignedBigInteger('order_details_id');
             $table->foreign('order_details_id')->references('id')->on('order_details')->onDelete('cascade');
             $table->unsignedBigInteger('shopping_cards_id');
             $table->foreign('shopping_cards_id')->references('id')->on('shopping_cards')->onDelete('cascade');

            $table->string('product_name')->nullable();
            $table->string('product_quality')->nullable();
            $table->string('product_price')->nullable();
            $table->string('product_image')->nullable();
            $table->string('product_discribe')->nullable();
            $table->string('product_discount')->nullable();
            $table->string('product_unitprice')->nullable();
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
