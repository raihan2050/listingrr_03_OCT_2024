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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable()->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('sign', 255)->nullable()->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->double('value')->nullable();
            $table->tinyInteger('is_default')->default(1);
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currencies');
    }
};
