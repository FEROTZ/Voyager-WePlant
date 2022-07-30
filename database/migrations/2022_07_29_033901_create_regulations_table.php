<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regulations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('low_ph', 6, 2);
            $table->float('high_ph', 6, 2);
            $table->float('low_humidity', 6, 2);
            $table->float('high_humidity', 6, 2);
            $table->float('low_temperature', 6, 2);
            $table->float('high_temperature', 6, 2);
            $table->unsignedBigInteger('crop_id')->unique();
            $table->foreign('crop_id')->references('id')->on('crops')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regulations');
    }
};