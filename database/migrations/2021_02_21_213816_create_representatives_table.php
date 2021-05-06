<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representatives', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('lastname',150);
            $table->string('name', 150);
            $table->string('gender',15);
            $table->string('kinship',50);
            $table->string('address', 250)->nullable();
            $table->string('phone',80)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('work', 5)->nullable();
            $table->string('workplace', 150)->nullable();
            $table->string('salary', 50)->nullable();
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
        Schema::dropIfExists('representatives');
    }
}
