<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollaboratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborators', function (Blueprint $table) {
            $table->increments('id');
//            $table->integer('code')->default(5000);
//            $table->string('name');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->date('date_of_birth');
            $table->string('address');
            $table->string('zipcode');
            $table->string('city');
            $table->unsignedInteger('district_id');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade')->onUpdate('cascade');
            $table->string('phone_number')->nullable();
            $table->string('mobile_phone_number')->nullable();
//            $table->string('email')->nullable();
            $table->unsignedInteger('marital_status_id');
            $table->foreign('marital_status_id')->references('id')->on('marital_statuses')->onDelete('cascade');
            $table->string('nib')->nullable();
            $table->string('niss')->nullable();
            $table->string('nif')->nullable();
            $table->string('bi')->nullable();
            $table->string('control_digit')->nullable();
            $table->date('emmission_date')->nullable();
            $table->string('archive')->nullable();
            $table->string('gender');
            $table->unsignedInteger('qualification_id')->nullable();
            $table->foreign('qualification_id')->references('id')->on('qualifications')->onDelete('cascade')->onUpdate('cascade');
            $table->string('salary')->nullable();
            $table->date('admission_date');
            $table->unsignedInteger('department_id')->nullable();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->unsignedInteger('workplace_id')->nullable();
            $table->foreign('workplace_id')->references('id')->on('workplaces')->onDelete('cascade');
            $table->unsignedInteger('coordenator_id')->nullable();
            $table->foreign('coordenator_id')->references('id')->on('coordenators')->onDelete('cascade');
            $table->text('obs')->nullable();
            $table->boolean('valid')->default(false);
            $table->boolean('active')->default(false);
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
        Schema::dropIfExists('collaborators');
    }
}
