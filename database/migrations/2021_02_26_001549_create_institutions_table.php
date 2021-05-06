<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->id();
            $table->string('state', 20);
            $table->string('municipality', 50);
            $table->string('parish', 50);
            $table->string('campus_code', 10);
            $table->string('statistical_code', 6);
            $table->string('circuit_code', 10);
            $table->string('campus_name', 150)->index();
            $table->string('level', 50);
            $table->string('dependence', 50);
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
        Schema::dropIfExists('institutions');
    }
}
