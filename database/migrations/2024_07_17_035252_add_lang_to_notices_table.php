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
        Schema::table('notices', function (Blueprint $table) {
            //
            $table->string('title_id')->nullable();
            $table->text('content_id')->nullable();
            $table->string('title_kr')->nullable();
            $table->text('content_kr')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('notices', function (Blueprint $table) {
            //
            $table->string('title_id');
            $table->text('content_id');
            $table->string('title_kr');
            $table->text('content_kr');
        });
    }
};
