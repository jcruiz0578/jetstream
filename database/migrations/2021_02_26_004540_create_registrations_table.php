<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
          $table->string('id', 30)->primary();
          $table->string('school_period', 25);
          $table->bigInteger('students_id');
          $table->foreign('students_id')->references('id')->on('students')->onUpdate('cascade');

          $table->bigInteger('representatives_id');
          $table->foreign('representatives_id')->references('id')->on('representatives')->onUpdate('cascade');

          $table->string('sw_prosecution', 5)->nullable();
          $table->string('condition',50);
          $table->string('repeater', 3)->nullable();
          $table->string('pending_matter', 3);
          $table->string('name_pending_matter', 100)->nullable();
          $table->string('laggard', 3)->nullable();
          $table->string('new_entry', 3);
          $table->string('year_study', 15);
          $table->string('section', 2)->nullable();

          $table->date('date_admission')->nullable();
          $table->string('month_admission', 15)->nullable();
          $table->date('system_date')->nullable();
          $table->string('re_registration',3)->nullable();
          $table->date('re_registration_date')->nullable();
          $table->string('registration_type', 15)->nullable();
          $table->string('status',1)->nullable();
          $table->string('observation', 255)->nullable();
          $table->string('enroller', 255)->nullable();
          $table->integer('n_file')->nullable();


          $table->string('key_campus_name', 150);
          $table->foreign('key_campus_name')->references('campus_name')->on('institutions')->onUpdate('cascade');


          $table->integer('num_reg')->nullable();
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
        Schema::dropIfExists('registrations');
    }
}
