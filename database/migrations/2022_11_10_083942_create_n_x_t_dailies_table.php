<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNXTDailiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('n_x_t_dailies', function (Blueprint $table) {
            $table->id();
            $table->string('tekanan_angin');
            $table->string('kualitas_angin');
            $table->string('fungsi_pokayoke');
            $table->string('fungsi_tombol_emergensi');
            $table->string('lampu_tanda');
            $table->string('fan_bagian_belakang_mesin');
            $table->string('dust_box_belakang');
            $table->string('dust_box_dalam');
            $table->string('feeder_stand');
            $table->string('fungsi_buzzer');
            $table->string('remarks');
            $table->string('image');
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
        Schema::dropIfExists('n_x_t_dailies');
    }
}
