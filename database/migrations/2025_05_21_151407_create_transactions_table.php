<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('invoice_number')->unique();
            $table->foreignId('cashier_id')->constrained('users')->onDelete('cascade');
            $table->foreignUuid('inventory_id')->constrained('inventories')->onDelete('cascade');
            $table->float('total_price');
            $table->float('tax')->default(0);
            $table->float('total_price_tax');
            $table->string('payment_method');
            $table->boolean('is_paid')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
