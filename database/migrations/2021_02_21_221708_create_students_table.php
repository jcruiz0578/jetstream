<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
          $table->bigInteger('id')->primary();
          $table->string('lastname',150);
          $table->string('name', 150);
          $table->string('gender',15);
          $table->string('laterality', 15);
          $table->date('birthday');
          $table->integer('birth_order');
          $table->string('state_birth', 100);
          $table->string('birthplace', 255);
          $table->string('marital_status', 50)->nullable();
          $table->string('address', 250)->nullable();
          $table->string('phone',80)->nullable();
          $table->string('email', 50)->nullable();
          $table->string('campus_name', 150)->nullable();
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
        Schema::dropIfExists('students');
    }
}
