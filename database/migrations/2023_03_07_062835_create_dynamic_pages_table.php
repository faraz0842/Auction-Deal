<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (! Schema::hasTable('dynamic_pages')) {
            Schema::create('dynamic_pages', function (Blueprint $table) {
                $table->id();
                $table->string('title', 100);
                $table->string('short_title', 70)->nullable();
                $table->string('permalink', 150)->nullable();
                $table->longText('content');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dynamic_pages');
    }
};
