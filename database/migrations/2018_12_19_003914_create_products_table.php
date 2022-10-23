<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('color_id');
            $table->integer('image_id')->nullable();
            $table->string('brand');
            $table->string('model');
            $table->string('cover');
            $table->integer('quantity')->default('1');
            $table->decimal('price');
            $table->text('details')->nullable();
            $table->date('release')->nullable();
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
