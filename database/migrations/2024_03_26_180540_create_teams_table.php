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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email')->nullable();
            $table->string('contact')->nullable();
            $table->string('designation')->nullable();
            $table->text('quote')->nullable();
            $table->tinyInteger('visible_status')->default(1);
            $table->tinyInteger('delete_flag')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
