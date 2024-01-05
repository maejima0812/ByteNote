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
        Schema::create('comments', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('posts_id')->nullable(); 
        $table->string('name');
        $table->text('body');
        $table->timestamps();

        // 外部キー制約
        $table->foreign('posts_id')->references('id')->on('posts');
        
    });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
   
 
    }
};
