<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTangkisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tangkis', function (Blueprint $table) {
            $table->id();
            $table->string('KranPembuanganAirTangki1');
            $table->text('remarks1')->nullable();
            $table->string('TekananAnginTangki1');
            $table->text('remarks2')->nullable();
            $table->string('TekananAnginTangki2');
            $table->text('remarks3')->nullable();
            $table->string('TekananAnginTangki3');
            $table->text('remarks4')->nullable();
            $table->string('checker');
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
        Schema::dropIfExists('tangkis');
    }
}
