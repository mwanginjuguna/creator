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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->decimal('price', 10, 2);
            $table->integer('stock')->nullable();
            $table->string('image_url')->nullable();
            $table->json('features')->nullable();
            $table->json('extras')->nullable();
            $table->text('comments')->nullable();
            $table->string('hours')->nullable();
            $table->json('details')->nullable()->comment('Extra information about the product');
            $table->timestamps();
        });

        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });

        Schema::create('call_to_actions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url');
            $table->string('button_text')->nullable();
            $table->text('description')->nullable();
            $table->string('image_url')->nullable();
            $table->unsignedBigInteger('call_to_actionable_id')->nullable();
            $table->string('call_to_actionable_type')->nullable();
            $table->timestamps();
        });

        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->text('description')->nullable();
            $table->timestamp('starts_at');
            $table->timestamp('ends_at')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('type')->default('amount')->comment('percent or amount');
            $table->decimal('amount', 10, 2);
            $table->timestamps();
        });

        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('url')->nullable();
            $table->text('content')->nullable()->comment('markdown');
            $table->boolean('is_active')->default('false');
            $table->timestamp('starts_at');
            $table->timestamp('ends_at')->nullable();
            $table->unsignedBigInteger('discount_id')->nullable();
            $table->foreignId('call_to_action_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->json('details')->nullable()->comment('Extra information about the campaign');
            $table->timestamps();
        });

        Schema::create('campaign_channels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campaign_id');
            $table->string('name')->comment('Examples: Google Ads, Website Page, Blog Series/Articles, Youtube Videos/Series, Courses/Tutorials, etc.');
            $table->string('url');
            $table->unsignedBigInteger('visits')->nullable();
            $table->unsignedBigInteger('impressions')->nullable()->comment('Same as: views - depends on channel.');
            $table->unsignedBigInteger('clicks')->nullable()->comment('Same as: engagements, click-through-rate');
            $table->unsignedBigInteger('prospects')->nullable()->comment('Same as: conversions, conversion-rate');
            $table->unsignedBigInteger('customers')->nullable()->comment('People who bought.');
            $table->timestamps();
        });

        Schema::create('campaign_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campaign_id');
            $table->string('chanel_name')->comment('Examples: Google Ads, Website Page, Blog Series/Articles, Youtube Videos/Series, Courses/Tutorials, etc.');
            $table->string('url');
            $table->unsignedBigInteger('visits')->nullable();
            $table->unsignedBigInteger('impressions')->nullable()->comment('Same as: views - depends on channel.');
            $table->unsignedBigInteger('clicks')->nullable()->comment('Same as: engagements, click-through-rate');
            $table->unsignedBigInteger('prospects')->nullable()->comment('Same as: conversions, conversion-rate');
            $table->timestamps();
        });

        Schema::create('hvcos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('cover_image')->nullable();
            $table->text('url')->nullable();
            $table->text('audience')->nullable();
            $table->text('content_type')->nullable();
            $table->string('headline')->nullable()->comment('Create an Attention-Grabbing Headline HVCO - use numbers, arouse & intrigue');
            $table->text('burning_issue')->nullable()->comment('');
            $table->text('points_touching_burning_issues')->nullable()->comment('');
            $table->text('immediate_solution')->nullable()->comment('');
            $table->longText('content')->nullable();
            $table->unsignedBigInteger('downloads')->nullable();
            $table->foreignId('call_to_action_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('campaign_id')->nullable()->constrained()->nullOnDelete();
            $table->json('details')->nullable()->comment('Extra information about the campaign');
            $table->timestamps();
        });

        Schema::create('optin_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('page_url')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('headline')->nullable()->comment('promise prospect a specific, vivid benefit');
            $table->string('sub_headline')->nullable()->comment("restates your offer and what prospects are specifically getting");
            $table->text('persuasive_bullets')->nullable()->comment('craft bullet copy that teases, tantalises, and tempts prospects — intensifying their curiosity to almost unbearable levels, and then inviting them to satisfy that curiosity for free, simply by opting in.');
            $table->unsignedBigInteger('visits')->nullable();
            $table->unsignedBigInteger('prospects')->nullable();
            $table->foreignId('campaign_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('hvco_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('call_to_action_id')->nullable()->constrained()->nullOnDelete();
            $table->json('details')->nullable()->comment('Extra information about the campaign');
            $table->timestamps();
        });

        Schema::create('landing_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('page_url')->nullable();
            $table->string('cover_image')->nullable();
            $table->longText('content')->nullable()->comment('In markdown.');
            $table->unsignedBigInteger('visits')->nullable();
            $table->unsignedBigInteger('conversions')->nullable()->comment('Number of visitors who paid');
            $table->foreignId('campaign_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('hvco_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('call_to_action_id')->nullable()->constrained()->nullOnDelete();
            $table->json('details')->nullable()->comment('Extra information about the campaign');
            $table->timestamps();
        });

        Schema::create('website_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('page_url')->nullable();
            $table->string('page_type')->nullable();
            $table->text('content')->nullable()->nullable('markdown');
            $table->string('cover_image')->nullable();
            $table->unsignedBigInteger('visits')->nullable();
            $table->unsignedBigInteger('prospects')->nullable();
            $table->json('details')->nullable()->comment('Extra information about the campaign');
            $table->timestamps();
        });

        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('url');
            $table->string('name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('source')->nullable();
            $table->foreignId('campaign_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('hvco_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('optin_page_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('landing_page_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('website_page_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
        });

        Schema::create('sequences', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->unsignedBigInteger('call_to_action_id')->nullable()->constrained()->nullOnDelete();
            $table->unsignedBigInteger('campaign_id')->nullable()->constrained()->nullOnDelete();
            $table->unsignedBigInteger('user_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
        });

        Schema::create('sequence_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->longText('content')->nullable();
            $table->text('item_type')->nullable(); // 1 for HVCO, 2 for Optin Page, 3 for Landing Page, 4 for Website Page, 5 for Email Sequence
            $table->unsignedBigInteger('sequence_id');
            $table->unsignedBigInteger('previous_item_id')->nullable();
            $table->unsignedBigInteger('next_item_id')->nullable();
            $table->unsignedBigInteger('position');
            $table->timestamps();
        });
        // email sequence table
        Schema::create('email_sequences', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email_subject');
            $table->string('content')->nullable();
            $table->unsignedBigInteger('sequence_id')->nullable()->constrained()->nullOnDelete();
            $table->unsignedBigInteger('campaign_id')->nullable()->constrained()->nullOnDelete();
            $table->unsignedBigInteger('lead_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
        });

        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('zip_code')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
        });

        // add new columns to orders table
        Schema::table('orders', function(Blueprint $table) {
            $table->unsignedBigInteger('customer_id')->nullable()->after('features');
            $table->unsignedBigInteger('user_id')->nullable()->after('customer_id');
            $table->unsignedBigInteger('campaign_id')->nullable()->after('user_id');
            $table->string('payment_method')->nullable()->after('campaign_id');
            $table->string('shipping_address')->nullable()->after('payment_method');
            $table->string('billing_address')->nullable()->after('shipping_address');
            $table->string('shipping_method')->nullable()->after('billing_address');
            $table->string('payment_gateway')->nullable()->after('shipping_method');
            $table->string('payment_status')->nullable()->after('payment_gateway');
            $table->decimal('amount_paid')->nullable()->after('payment_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('call_to_actions');
        Schema::dropIfExists('discounts');
        Schema::dropIfExists('campaigns');
        Schema::dropIfExists('campaign_channels');
        Schema::dropIfExists('campaign_products');
        Schema::dropIfExists('hvcos');
        Schema::dropIfExists('optin_pages');
        Schema::dropIfExists('landing_pages');
        Schema::dropIfExists('website_pages');
        Schema::dropIfExists('leads');
        Schema::dropIfExists('sequences');
        Schema::dropIfExists('sequence_items');
        Schema::dropIfExists('email_sequences');
        Schema::dropIfExists('customers');
        Schema::table('orders', function(Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('campaign_id');
            $table->dropColumn('payment_method');
            $table->dropColumn('status');
            $table->dropColumn('shipping_address');
            $table->dropColumn('billing_address');
            $table->dropColumn('shipping_method');
            $table->dropColumn('payment_gateway');
            $table->dropColumn('payment_status');
        });
    }
};
