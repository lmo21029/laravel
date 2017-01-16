<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();

            $table->integer('role_id')->default(1)->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');
            
            $table->timestamps();

        });

          Schema::create('password_reminders', function(Blueprint $table)
          { 
            $table->string('email');  
            $table->string('token');
            $table->timestamp('create_at');
          });
          }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    Schema::dropIfExists('password_reminders');
    Schema::dropIfExists('users');
    Schema::dropIfExists('roles');
    }
}
