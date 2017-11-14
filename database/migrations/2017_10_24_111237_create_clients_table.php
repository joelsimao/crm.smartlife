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
            $table->date('visit_date');
            $table->unsignedInteger('agency_id');
            $table->foreign('agency_id')->references('id')->on('agencies')->onDelete('cascade');


            $table->string('first_holder_name');
            $table->date('first_holder_date_of_birth')->nullable();
            $table->integer('first_holder_age');
            $table->unsignedInteger('first_holder_job_id');
            $table->foreign('first_holder_job_id')->references('id')->on('jobs')->onDelete('cascade');

            $table->string('second_holder_name')->nullable();
            $table->date('second_holder_date_of_birth')->nullable();
            $table->integer('second_holder_age')->nullable();
            $table->unsignedInteger('second_holder_job_id')->nullable();
            $table->foreign('second_holder_job_id')->references('id')->on('jobs')->onDelete('cascade');

            $table->integer('nif')->nullable();
            $table->integer('phone_number')->unique()->nullable();
            $table->integer('mobile_phone_number')->unique();
            $table->string('address')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('city')->nullable();
            $table->string('email')->unique()->nullable();
            $table->unsignedInteger('marital_status_id');
            $table->foreign('marital_status_id')->references('id')->on('marital_statuses')->onDelete('cascade');
            $table->string('spouse_name')->nullable();

            $table->string('voucher');
            $table->string('entry_hour');
            $table->string('leave_hour');
            $table->string('h_tour');
            $table->unsignedInteger('operator_id');
            $table->foreign('operator_id')->references('id')->on('operators')->onDelete('cascade');
            $table->unsignedInteger('supervisor_id');
            $table->foreign('supervisor_id')->references('id')->on('supervisors')->onDelete('cascade');
            $table->unsignedInteger('seller_id');
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');
            $table->unsignedInteger('manager_id');
            $table->foreign('manager_id')->references('id')->on('managers')->onDelete('cascade');
            $table->string('to')->nullable();
            $table->text('obs')->nullable();
            $table->string('close')->nullable();
            $table->unsignedInteger('n_close_justification_id');
            $table->foreign('n_close_justification_id')->references('id')->on('justifications')->onDelete('cascade');

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
