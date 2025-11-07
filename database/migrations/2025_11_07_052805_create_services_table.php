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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique(); // 'slug' column (string), unique constraint
            $table->string('name'); // 'name' column (string)
            $table->text('short_description')->nullable(); // 'short_description' column (text)
            $table->longText('description')->nullable(); // 'description' column (longtext)
            $table->string('avatar')->nullable(); // 'avatar' column (string), nullable
            $table->tinyInteger('is_active')->default(1);
            $table->timestamps(); // Laravel's created_at and updated_at
            $table->softDeletes(); // Optional: If you want soft deletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
