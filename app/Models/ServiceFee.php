<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceFee extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceFeeFactory> */
    use HasFactory;

    protected $fillable = [
        'fee_amount',
        'fee_description',
    ];

    public function OrderServiceFee() {
        return $this->hasMany(OrderServiceFee::class);
    }
}
