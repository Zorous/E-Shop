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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string("photo",255);
            $table->string("designation", 100);
            $table->float("prixht");
            $table->float("tva");
            $table->float("stock");
            $table->float("stock_initial");
            $table->tinyInteger("active");
            $table->foreignId('sous_famille_id')->references('id')->on('sous_familles');
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
        Schema::dropIfExists('articles');
    }
};
