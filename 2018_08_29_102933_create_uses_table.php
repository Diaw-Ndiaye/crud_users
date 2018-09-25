<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->increments('id');
            $table->engine = 'InnoDB';
            $table->string('name');
            $table->timestamps();
        });
        
        Schema::create('categories', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('libelle'); 
            $table->string('resume');
            $table->timestamps();
             
        });
      
         Schema::create('articles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title'); 
            $table->string('body');
            $table->foreign('id_categories')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
            $table->string('image');
            $table->timestamps();
        });
         Schema::create('tags', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('libelle'); 
            $table->timestamps();

        });
          Schema::create('tag_article', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('id_article')->references('id')->on('articles')->onDelete('cascade'); 
            $table->foreign('id_tags')->references('id')->on('tags')->onDelete('cascade');
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
        Schema::dropIfExists('todos');
        Schema::dropIfExists('articles');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('tags');
        
    }
}
