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
            $table->integer('type_id');
            $table->string('title');
            $table->text('characteristic_one')->nullable();
            $table->text('characteristic_second')->nullable();
            $table->text('characteristic_third')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('type');
            $table->string('model');
            $table->string('length');
            $table->string('width');
            $table->string('thickness');
            $table->string('slug')->unique();
            $table->boolean('status')->default(true);
            $table->integer('sort_id')->default(1);
            $table->string('seo_title')->nullable(); 
            $table->text('meta_description');
            $table->text('meta_keywords');
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
