<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompressorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compressors', function (Blueprint $table) {
            $table->id();
            $table->string('lcd_display');
            $table->text('remarks1')->nullable();
            $table->string('emergency_button');
            $table->text('remarks2')->nullable();
            $table->string('loading_pressure');
            $table->text('remarks3')->nullable();
            $table->string('temp_mesin');
            $table->text('remarks4')->nullable();
            $table->string('temp_oil');
            $table->text('remarks5')->nullable();
            $table->string('pressure_oil');
            $table->text('remarks6')->nullable();
            $table->string('body_compressor');
            $table->text('remarks7')->nullable();
            $table->string('temp_lp_element');
            $table->text('remarks8')->nullable();
            $table->string('temp_hp_element');
            $table->text('remarks9')->nullable();
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
        Schema::dropIfExists('compressors');
    }
}
