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
            $table->bigIncrements('id');
            $table->integer('cat_id');
            $table->integer('brand_id');
            $table->string('name')->unique();
            $table->string('slug')->nullable();
            $table->double('price');
            $table->double('discount_price')->nullable();
            $table->text('description')->nullable();
            $table->longText('long_description')->nullable();
            $table->string('image')->nullable();
            $table->double('stock');
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
