<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('tags')->nullable();
            $table->float('price');
            $table->boolean('is_available')->default(1);
            $table->text('description')->nullable();
            $table->integer('stocks')->default(0);
            $table->text('images')->nullable(); // JSON string or comma-separated
            $table->float('discount')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
