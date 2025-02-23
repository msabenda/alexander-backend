<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/YYYY_MM_DD_create_picture_sections_table.php

public function up()
{
    Schema::create('picture_sections', function (Blueprint $table) {
        $table->id();
        $table->string('image')->nullable(); // to store the image URL
        $table->string('title')->nullable(); // to store the title for each picture
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('picture_sections');
    }
};
