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
        Schema::create('questions', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('big_question_id')->nullable();
            $table->foreign('big_question_id')->references('id')->on('big_questions')->cascadeOnDelete(); # 外部キー制約をつける
            $table->string('local_name');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('questions');
    }
};
