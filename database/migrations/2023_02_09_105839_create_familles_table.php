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
            $table->tinyInteger("active")->default(1);
            $table->string("photo_famille",100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('familles');
    }
};
