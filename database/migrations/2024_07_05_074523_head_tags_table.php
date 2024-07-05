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
        Schema::create('head_tags', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->string('title');
        $table->string('desc');
        $table->string('keyword');
        $table->string('pages');
        $table->string('url');
    });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('head_tags');
    }
};
