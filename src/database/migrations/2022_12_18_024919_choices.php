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
        Schema::create('choices', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('question_id')->nullable();
            $table->foreign('question_id')->references('id')->on('questions')->cascadeOnDelete(); 
            $table->string('name');
            $table->integer('valid');
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
        Schema::dropIfExists('choices');
    }
};
