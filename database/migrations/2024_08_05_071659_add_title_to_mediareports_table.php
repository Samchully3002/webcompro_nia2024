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
        Schema::table('mediareports', function (Blueprint $table) {
            //
            $table->string('title_id')->nullable();
            $table->string('title_kr')->nullable();
            $table->string('news_lang')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mediareports', function (Blueprint $table) {
            //
            $table->string('title_id');
            $table->string('title_kr');
            $table->string('news_lang');
        });
    }
};
