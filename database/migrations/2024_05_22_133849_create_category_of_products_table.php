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
        Schema::create('category_of_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id');
            $table->json('category_id');
            $table->text('title_uz')->nullable();
            $table->text('title_ru')->nullable();
            $table->text('title_en')->nullable();
            $table->text('short_content_uz')->nullable();
            $table->text('short_content_ru')->nullable();
            $table->text('short_content_en')->nullable();
            $table->text('name_uz')->nullable();
            $table->text('name_ru')->nullable();
            $table->text('name_en')->nullable();
            $table->text('type')->nullable();
            $table->text('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_of_products');
    }
};
