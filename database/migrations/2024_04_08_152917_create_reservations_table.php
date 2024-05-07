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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->integer('restaurant_id');
            $table->integer('numguests');
            $table->Datetime('fromreserve');
            $table->Datetime('toreserve');
=======
            $table->integer('RestaurantID');
            $table->integer('numguests');
>>>>>>> master
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
