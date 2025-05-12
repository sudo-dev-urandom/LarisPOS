<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Company extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id', 'email', 'name', 'is_active', 'is_verified', 'type',
        'logo', 'address', 'subs_price', 'subs_type', 'revenue'
    ];

    protected static function booted()
    {
        static::creating(function ($company) {
            $company->id = (string) Str::uuid();
        });
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
