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
        Schema::create('collection_taxonomies', function (Blueprint $table) {
            $table->string('collection_handle')->comment('');
            $table->foreign('collection_handle')
                ->references('handle')
                ->on('collections')
                ->cascadeOnDelete();
            $table->string('taxonomy_handle')->comment('');
            $table->foreign('taxonomy_handle')
                ->references('handle')
                ->on('taxonomies')
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collection_taxonomies');
    }
};
