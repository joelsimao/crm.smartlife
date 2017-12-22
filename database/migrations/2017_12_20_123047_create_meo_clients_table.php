<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeoClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meo_clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('nif')->unique();
            $table->string('address')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('city');
            $table->integer('phone')->nullable();
            $table->integer('mobile_phone')->nullable();
            $table->string('manager_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meo_clients');
    }
}
