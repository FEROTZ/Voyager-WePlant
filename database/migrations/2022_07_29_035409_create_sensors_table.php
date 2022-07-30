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
        Schema::create('sensors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('ph', 6, 2);
            $table->float('humidity', 6, 2);
            $table->float('temperature', 6, 2);
            $table->timestamps();
            $table->unsignedBigInteger('orchard_id')->unique();
            $table->foreign('orchard_id')->references('id')->on('orchards')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sensors');
    }
};
