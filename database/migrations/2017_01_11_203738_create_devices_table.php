<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
   
    public function up()
    {
           Schema::create('app_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('devices_limit');
            $table->string('enable')->default(1);
            $table->string('email')->unique();

            $table->string('f1')->nullable();
            $table->string('f2')->nullable();
            $table->string('f3')->nullable();
            $table->string('f4')->nullable();
            $table->string('f5')->nullable();

            $table->timestamps();

        });

            Schema::create('devices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imei');
            $table->string('enable')->default(1);

            $table->string('f1')->nullable();
            $table->string('f2')->nullable();
            $table->string('f3')->nullable();
            $table->string('f4')->nullable();
            $table->string('f5')->nullable();

            $table->integer('app_users_id')->unsigned();
            $table->foreign('app_users_id')->references('id')->on('app_users');
            
            $table->timestamps();

        });
    }

    


    public function down()
    {
            Schema::dropIfExists('devices');
            Schema::dropIfExists('app_users');
    }
}
