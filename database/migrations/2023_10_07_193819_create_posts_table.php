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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained('users', 'id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title');
            $table->longText('contents');
            $table->foreignId('category_id')->constrained('categories', 'id')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('status', ['draft', 'publish']);
            $table->integer('views', false, true)->default(0);
            $table->integer('likes', false, true)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
