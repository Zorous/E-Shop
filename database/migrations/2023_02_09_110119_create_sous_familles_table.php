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
        Schema::create('sous_familles', function (Blueprint $table) {
            $table->id();
            $table->string("sous_famille", 255);
            $table->tinyInteger("active");
            $table->string("photo",100);
            $table->foreignId('famille_id')->references('id')->on('familles');
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
        Schema::dropIfExists('sous_familles');
    }
};
