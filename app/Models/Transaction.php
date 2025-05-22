<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'invoice_number',
        'cashier_id',
        'subtotal',
        'tax',
        'total_price',
        'payment_method',
        'table_number',
        'order_number',
        'is_paid',
        'transaction_date',
    ];

    protected $keyType = 'string';
    public $incrementing = false;

    protected $casts = [
        'subtotal' => 'decimal:2',
        'tax' => 'decimal:2',
        'total_price' => 'decimal:2',
        'is_paid' => 'boolean',
        'transaction_date' => 'datetime',
    ];

    public function cashier(): BelongsTo
    {
        return $this->belongsTo(User::class, 'cashier_id');
    }

    public function transactionItems(): HasMany
    {
        return $this->hasMany(TransactionItem::class);
    }

    // Legacy relationship for backward compatibility
    public function inventory(): BelongsTo
    {
        return $this->belongsTo(Inventory::class);
    }
}
