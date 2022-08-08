<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDryersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dryers', function (Blueprint $table) {
            $table->id();
            $table->string('humidity');
            $table->text('remarks1')->nullable();
            $table->string('body_dryer');
            $table->text('remarks2')->nullable();
            $table->string('indikator_filter_in');
            $table->text('remarks3')->nullable();
            $table->string('indikator_filter_out');
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
        Schema::dropIfExists('dryers');
    }
}
