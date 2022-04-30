<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');          
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->longText('images')->nullable();
            $table->string('size');
            $table->string('address');
            $table->string('city');
            $table->string('slug')->unique();
            $table->boolean('status')->default(0);
            $table->integer('sort_id')->default(0);
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
        Schema::dropIfExists('objects');
    }
}
