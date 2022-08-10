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
            $table->string('Humidity');
            $table->text('remarks1')->nullable();
            $table->string('BodyDryer');
            $table->text('remarks2')->nullable();
            $table->string('IndikatorFilterIn');
            $table->text('remarks3')->nullable();
            $table->string('IndikatorFilterOut');
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
        Schema::dropIfExists('dryers');
    }
}
