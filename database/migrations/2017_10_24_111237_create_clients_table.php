<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('nif');
            $table->unsignedInteger('marital_status_id');
            $table->foreign('marital_status_id')->references('id')->on('marital_statuses')->onDelete('cascade');
            $table->string('spouse_name')->nullable();
            $table->date('date_of_birth');
            $table->integer('age')->nullable();
            $table->string('job');
            $table->string('address')->nullable();
            $table->string('zipcode');
            $table->string('city');
            $table->integer('phone_number')->unique();
            $table->integer('mobile_phone_number')->unique();
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
        Schema::dropIfExists('clients');
    }
}
