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
        Schema::create('bls', function (Blueprint $table) {
            $table->id();
            $table->date('date')->default(date('Y-m-d'));
            $table->time('heure')->default(date('H:i:s'));
            $table->boolean('isregle')->default(0);
            $table->foreignId('user_id')->constrained();
            $table->foreignId('etat_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bls');
    }
};
