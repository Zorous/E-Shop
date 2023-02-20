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
            $table->string('designation');
            $table->float('prix');
            $table->float('tva')->default(0.2);
            $table->float('stock_initial');
            $table->float('stock');
            $table->string('photo')->nullable();
            $table->boolean('active')->default(1);
            $table->boolean('isrepture')->default(0);
            $table->foreignId('sous_famille_id')->constrained();
            $table->foreignId('unite_id')->constrained();
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
