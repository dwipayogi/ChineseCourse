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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('instructor_id')->constrained('instructors')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('slug')->unique();
            $table->text('thumbnail');
            $table->decimal('price', 10, 2);
            $table->enum('level', ['beginner', 'intermediate', 'advanced']);
            $table->text('requirements')->nullable();
            $table->text('what_will_learn')->nullable();
            $table->integer('duration')->default(0);
            $table->integer('total_enrolled')->default(0);
            $table->enum('status', ['draft', 'published', 'featured'])->default('draft');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
