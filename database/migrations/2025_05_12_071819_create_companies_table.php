<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('email')->unique();
            $table->string('name');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_verified')->default(false);
            $table->string('type')->nullable();
            $table->text('logo')->nullable();
            $table->text('address')->nullable();
            $table->float('subs_price')->default(0);
            $table->string('subs_type')->nullable();
            $table->float('revenue')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
