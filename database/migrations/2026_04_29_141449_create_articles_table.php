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
            Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->text('content');
            $table->string('brand')->nullable();
            $table->text('symptoms')->nullable();
            $table->string('difficulty')->nullable();
            $table->text('tools_needed')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('uploaded_at')->nullable();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
