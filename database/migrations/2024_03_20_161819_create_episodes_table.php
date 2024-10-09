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
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('serie_id'); 
            $table->string('title'); 
            $table->integer('number'); 
            $table->integer('season'); 
            $table->text('sinopsis')->nullable(); 
            $table->string('file')->nullable(); 
            $table->timestamps();
            $table->foreign('serie_id')->references('id')->on('media')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('episodes', function (Blueprint $table) {
            $table->dropForeign(['idSerie']);
        });

        Schema::dropIfExists('episodes');
    }
};
