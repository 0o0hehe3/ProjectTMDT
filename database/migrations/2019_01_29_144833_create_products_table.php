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
            $table->string('name');
            $table->integer('type_id');
            $table->integer('manufacturer_id');
            $table->string('url_image');
            $table->integer('amount')->default(0);
            $table->integer('price')->default(0);
            $table->float('promotion')->default(0);
            $table->integer('promotion_price')->default(0);
            $table->string('description');
            $table->integer('likes_count')->default(0);
            $table->integer('views_count')->default(0);
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
