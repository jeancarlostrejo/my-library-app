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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('synopsis');
            $table->string('cover_image')->nullable();
            $table->integer('pages')->unisgned();
            $table->date('started_reading_at')->nullable();
            $table->string('reading_status')->default('pending'); 
            $table->integer('pages_read')->unsigned()->default(0);
            $table->year('published_year')->nullable();
            $table->foreignId('author_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
