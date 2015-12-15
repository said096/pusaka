<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function(Blueprint $table){
            $table->increments('id_members');
            $table->enum('status', ['member', 'client'])->default('client');
            $table->string('name', 50);
            $table->string('username', 50)->unique();
            $table->string('email', 50)->unique();
            $table->string('jobs', 100);
            $table->string('agency', 100);
            $table->string('placeBirth', 50);
            $table->string('dateBirth', 8);
            $table->string('district', 100);
            $table->string('city', 100);
            $table->string('province', 100);
            $table->string('password');
            $table->rememberToken()->nullable();
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
        Schema::drop('members');
    }
}
