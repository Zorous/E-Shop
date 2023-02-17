<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('familles', function (Blueprint $table) {
            $table->id();
            $table->string("famille", 100);
            $table->tinyInteger("active");
            $table->string("photo_famille",255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('familles');
    }
};
