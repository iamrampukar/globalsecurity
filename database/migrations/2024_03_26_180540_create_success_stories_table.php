<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('success_stories', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('course');
            $table->string('university')->nullable();
            $table->string('location')->nullable();
            $table->date('year')->nullable();
            $table->tinyInteger('visible_status')->default(1);
            $table->tinyInteger('delete_flag')->default(0);
            $table->integer('media_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('success_stories');
    }
};
