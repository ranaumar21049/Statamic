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
        Schema::create('taxonomy_terms', function (Blueprint $table) {
            $table->id();
            $table->string('site')->unique()->comment('');
            $table->string('title')->comment('');
            $table->string('slug')->unique()->comment('');
            $table->string('uri')->unique()->nullable()->comment('');
            $table->string('taxonomy')->comment();
            $table->foreign('taxonomy')
                ->references('handle')
                ->on('taxonomies')
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
        Schema::dropIfExists('taxonomy_terms');
    }
};
