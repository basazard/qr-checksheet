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
            $table->string('kran_pembuangan');
            $table->text('remarks1')->nullable();
            $table->string('tekanan_tangki1');
            $table->text('remarks2')->nullable();
            $table->string('tekanan_tangki2');
            $table->text('remarks3')->nullable();
            $table->string('tekanan_tangki3');
            $table->text('remarks4')->nullable();
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
