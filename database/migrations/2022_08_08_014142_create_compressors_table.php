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
            $table->string('LCDDisplay');
            $table->text('remarks1')->nullable();
            $table->string('EmergencyButton');
            $table->text('remarks2')->nullable();
            $table->string('LoadingPressure');
            $table->text('remarks3')->nullable();
            $table->string('TemperatureMesin');
            $table->text('remarks4')->nullable();
            $table->string('TemperatureOil');
            $table->text('remarks5')->nullable();
            $table->string('PressureOil');
            $table->text('remarks6')->nullable();
            $table->string('BodyCompressor');
            $table->text('remarks7')->nullable();
            $table->string('TempLPElement');
            $table->text('remarks8')->nullable();
            $table->string('TempHPElement');
            $table->text('remarks9')->nullable();
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
        Schema::dropIfExists('compressors');
    }
}
