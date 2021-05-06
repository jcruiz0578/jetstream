<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main', function (Blueprint $table) {
            $table->id();
            $table->string('school_period', 25);
            $table->string('dea_code', 25);
            $table->string('admin_code', 25);
            $table->string('statistical_code', 25)->nullable();
            $table->string('cenae_code', 25)->nullable();
            $table->string('principal_name', 80);
            $table->integer('id_principal');
            $table->date('date_mi')->nullable();
            $table->date('adjustment_date')->nullable();
            $table->date('eponymous')->nullable();
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
        Schema::dropIfExists('main');
    }
}
