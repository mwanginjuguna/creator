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
        Schema::create('taggables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tag_id')->constrained()->cascadeOnDelete();
            $table->morphs('taggable');
            $table->timestamps();

            $table->index(['taggable_id', 'taggable_type']);
        });

        // create a table to track interactions
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('views')->nullable()->after('author');
            $table->unsignedBigInteger('likes')->nullable()->after('views');
            $table->unsignedBigInteger('useful_votes')->nullable()->after('likes');
            $table->index(['views', 'category_id']);
        });

        Schema::table('images', function (Blueprint $table) {
            $table->unsignedBigInteger('views')->nullable()->after('filename');
            $table->string('url')->nullable()->after('views');
            $table->unsignedBigInteger('imageable_id')->nullable()->after('url');
            $table->string('imageable_type')->nullable()->after('imageable_id');
            $table->index(['imageable_id', 'imageable_type']);
        });

        Schema::table('documents', function (Blueprint $table) {
            $table->unsignedBigInteger('views')->nullable()->after('post_id');
            $table->string('url')->nullable()->after('views');
            $table->unsignedBigInteger('downloads')->nullable()->after('url');
            $table->unsignedBigInteger('documentable_id')->nullable()->after('downloads');
            $table->string('documentable_type')->nullable()->after('documentable_id');
            $table->index(['documentable_id', 'documentable_type']);
        });

        Schema::create('page_views', function (Blueprint $table) {
            $table->id();
            $table->morphs('viewable'); // Polymorphic relationship to track views on different models (e.g., posts, categories, tags)
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete(); // Track user if logged in
            $table->string('session_id')->nullable(); // Track session for anonymous users
            $table->string('ip_address')->nullable();
            $table->string('user_agent')->nullable();
            $table->timestamp('viewed_at');
            $table->string('url')->nullable();
            $table->string('viewable_route_name')->nullable();
            $table->unsignedBigInteger('views')->nullable();
            $table->timestamps();

            $table->index(['viewable_id', 'viewable_type', 'viewed_at']); // Index for efficient queries
        });

        Schema::create('interactions', function (Blueprint $table) {
            $table->id();
            $table->morphs('interactable'); // Polymorphic relationship to track interactions on different models
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete(); // User performing the interaction
            $table->string('type'); // Type of interaction (e.g., 'like', 'useful_vote', 'share', 'bookmark')
            $table->string('session_id')->nullable(); // Session ID for anonymous interactions
            $table->string('ip_address')->nullable();
            $table->string('user_agent')->nullable();
            $table->timestamp('interacted_at');

            $table->unique(['interactable_id', 'interactable_type', 'user_id', 'type'], 'unique_interaction'); // Prevent duplicate interactions from the same user
            $table->index(['interactable_id', 'interactable_type', 'type', 'interacted_at']); // Index for querying interactions
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taggables');
        Schema::dropIfExists('page_views');
        Schema::dropIfExists('interactions');
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('views');
            $table->dropColumn('likes');
            $table->dropColumn('useful_votes');
            $table->dropIndex(['views', 'category_id']);
        });
        Schema::table('images', function (Blueprint $table) {
            $table->dropColumn('views');
            $table->dropColumn('url');
            $table->dropColumn('imageable_id');
            $table->dropColumn('imageable_type');
            $table->dropIndex(['imageable_id', 'imageable_type']);
        });
        Schema::table('documents', function (Blueprint $table) {
            $table->dropColumn('views');
            $table->dropColumn('url');
            $table->dropColumn('downloads');
            $table->dropColumn('documentable_id');
            $table->dropColumn('documentable_type');
            $table->dropIndex(['documentable_id', 'documentable_type']);
        });
    }
};
