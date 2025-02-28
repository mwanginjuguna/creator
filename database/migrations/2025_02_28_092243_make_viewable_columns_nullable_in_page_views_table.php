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
        Schema::table('page_views', function (Blueprint $table) {
            // Make both viewable_id and viewable_type nullable
            $table->unsignedBigInteger('viewable_id')->nullable()->change();
            $table->string('viewable_type')->nullable()->change();
        });

        Schema::table('interactions', function (Blueprint $table) {
            // Make both viewable_id and viewable_type nullable
            $table->unsignedBigInteger('url')->nullable()->after('user_agent');
            $table->unsignedBigInteger('interactable_id')->nullable()->change();
            $table->string('interactable_type')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('page_views', function (Blueprint $table) {
            $table->unsignedBigInteger('viewable_id')->nullable(false)->change();
            $table->string('viewable_type')->nullable(false)->change();
        });

        Schema::table('page_views', function (Blueprint $table) {
            $table->dropColumn('url');
            $table->unsignedBigInteger('interactable_id')->nullable(false)->change();
            $table->string('interactable_type')->nullable(false)->change();
        });
    }
};
