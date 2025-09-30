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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('short_description')->nullable();
            $table->string('slug')->unique();
            $table->string('project_url')->nullable();
            $table->string('github_url')->nullable();
            $table->string('demo_video_url')->nullable();
            $table->string('featured_image')->nullable();
            $table->json('gallery_images')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('status')->default('draft');
            $table->boolean('is_featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->json('technologies')->nullable();
            $table->json('features')->nullable();
            $table->text('challenges')->nullable();
            $table->text('lesson_learned')->nullable();
            $table->date('started_at')->nullable();
            $table->date('completed_at')->nullable();
            $table->boolean('is_ongoing')->default(false);
            $table->string('meta_description')->nullable();
            $table->json('meta_keywords')->nullable();
            $table->integer('view_count')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->index('status');
            $table->index('is_featured');
            $table->index('sort_order');
            $table->index(['status', 'is_featured']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
