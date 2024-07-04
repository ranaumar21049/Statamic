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
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            
            $table->string('site')->comment('');
            $table->bigInteger('origin_id')->unique()->nullable()->comment('');
            $table->tinyInteger('published')->default('1')->comment('');
            $table->tinyInteger('isSEOEnabled')->default('1')->comment('');
            $table->string('status')->comment('');
            $table->string('title')->nullable()->comment('');
            $table->string('slug')->nullable()->comment('');
            $table->string('uri')->unique()->nullable()->comment('');
            $table->string('date')->nullable()->comment('');
            $table->integer('order')->unique()->nullable()->comment('');
            $table->string('collection')->comment(''); 
            $table->foreign('collection')
                ->references('handle')
                ->on('collections')
                ->cascadeOnDelete();
            $table->longText('data')->comment('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entries');
    }
};
