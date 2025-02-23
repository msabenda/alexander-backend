<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('about_sections', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description');
        $table->text('quote');
        $table->string('author');
        $table->string('image_path')->nullable(); // Allow null values

        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_sections');
    }
};
