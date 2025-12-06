<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderServiceFee extends Model
{
    /** @use HasFactory<\Database\Factories\OrderServiceFeeFactory> */
    use HasFactory;

    protected $fillable = [
        'order_id',
        'service_fee_id',
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function serviceFee() {
        return $this->belongsTo(ServiceFee::class);
    }
}
