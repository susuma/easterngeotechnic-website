<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['owner', 'editor'])->default('editor');
            $table->boolean('is_active')->default(true);
            $table->text('two_factor_secret')->nullable();
            $table->timestamp('two_factor_confirmed_at')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->string('last_login_ip_hash', 64)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 254);
            $table->string('phone', 40)->nullable();
            $table->string('service', 150)->nullable();
            $table->text('message');
            $table->enum('source', ['home', 'contact']);
            $table->enum('status', ['new', 'read', 'contacted', 'closed'])->default('new')->index();
            $table->text('admin_notes')->nullable();
            $table->timestamp('read_at')->nullable();
            $table->timestamp('contacted_at')->nullable();
            $table->timestamp('closed_at')->nullable();
            $table->timestamps();
        });

        Schema::create('visitor_sessions', function (Blueprint $table) {
            $table->id();
            $table->uuid('visitor_id')->unique();
            $table->string('ip_hash', 64)->index();
            $table->string('device', 30)->nullable();
            $table->string('browser', 50)->nullable();
            $table->string('referrer_host')->nullable();
            $table->timestamp('first_seen_at')->index();
            $table->timestamp('last_seen_at')->index();
            $table->timestamps();
        });

        Schema::create('page_views', function (Blueprint $table) {
            $table->id();
            $table->uuid('visitor_id')->index();
            $table->string('path')->index();
            $table->string('route_name')->nullable()->index();
            $table->timestamp('viewed_at')->index();
            $table->timestamps();
        });

        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->string('group')->default('general')->index();
            $table->timestamps();
        });

        Schema::create('admin_activity_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->nullable()->constrained('admins')->nullOnDelete();
            $table->string('event')->index();
            $table->string('description');
            $table->nullableMorphs('subject');
            $table->json('properties')->nullable();
            $table->string('ip_hash', 64)->nullable();
            $table->timestamp('created_at')->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin_activity_logs');
        Schema::dropIfExists('site_settings');
        Schema::dropIfExists('page_views');
        Schema::dropIfExists('visitor_sessions');
        Schema::dropIfExists('inquiries');
        Schema::dropIfExists('admins');
    }
};
