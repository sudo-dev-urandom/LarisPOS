<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Transaction extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'invoice_number',
        'cashier_id',
        'inventory_id',
        'total_price',
        'tax',
        'total_price_tax',
        'payment_method',
        'is_paid',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
            $model->invoice_number = 'LRPS' . random_int(100000, 999999);
        });
    }

    public function cashier()
    {
        return $this->belongsTo(User::class, 'cashier_id');
    }

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }
}
