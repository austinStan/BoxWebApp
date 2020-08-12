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
            $table->string('name')->nullable();
            $table->string('brand')->nullable();
            $table->string('slug');
            $table->string('location')->nullable();
            $table->string('description');
            $table->string('image')->nullable();
            $table->string('size')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('dimensions')->nullable();
            $table->integer('price');
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
