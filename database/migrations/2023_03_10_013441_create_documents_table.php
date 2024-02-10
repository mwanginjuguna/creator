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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('slug');
            $table->text('summary')->nullable();
            $table->text('analysis')->nullable();
            $table->text('review')->nullable();
            $table->string('author')->nullable();
            $table->year('year_published')->nullable();
            $table->string('publisher')->nullable();
            $table->boolean('is_public')->default(false);
            $table->foreignId('post_id')->nullable()->constrained()->nullOnDelete();
            $table->softDeletes('deleted_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
