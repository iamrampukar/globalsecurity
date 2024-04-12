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
        Schema::create('preparations', function (Blueprint $table) {
            $table->id();
            $table->integer('group_id');
            $table->string('title');
            $table->text('short_description')->nullable();
            $table->text('full_description')->nullable();
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
        Schema::dropIfExists('preparations');
    }
};
