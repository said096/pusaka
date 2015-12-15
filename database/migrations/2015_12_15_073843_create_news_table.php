<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function(Blueprint $table){
            $table->increments('id_news');
            $table->integer('id_newsCategories');
            $table->string('tags')->nullable();
            $table->string('title', 100)->unique();
            $table->longText('description');
            $table->string('image', 100)->unique();
            $table->enum('softDelete', ['0', '1'])->default('0');
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
        Schema::drop('news');
    }
}
