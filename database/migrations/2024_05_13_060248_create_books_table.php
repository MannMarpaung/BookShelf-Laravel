<?php

use App\Models\Category;
use App\Models\Place;
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
            $table->foreignidFor(Place::class)->references('id')->on('places')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignidFor(Category::class)->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title');
            $table->string('author');
            $table->string('edition');
            $table->string('publishing');
            $table->string('isbn')->unique();
            $table->string('image');
            $table->string('pdf');
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
