<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('mission_sections', function (Blueprint $table) {
            $table->id();
            $table->text('mission');
            $table->text('vision');
            $table->text('team');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mission_sections');
    }
};

