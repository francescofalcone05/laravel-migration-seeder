<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->char('name', 100);
            $table->char('departure_station', 100);
            $table->char('arrival_station', 100);
            $table->time('departure_time', 4);
            $table->time('arrival_time', 4);
            $table->char('train_code', 8);
            $table->char('cub_number', 8);
            $table->boolean('on_time');
            $table->boolean('canceled');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
