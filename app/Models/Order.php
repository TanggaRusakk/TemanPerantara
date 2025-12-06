<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_total_amount',
        'order_status',
        'ordered_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderServiceFees() {
        return $this->hasMany(OrderServiceFee::class);
    }

    public function orderItems() {
        return $this->hasMany(OrderItem::class);
    }

    public function payments()
    {
        return $this->hasOne(Payment::class);
    }

    public function rentalInfos() {
        return $this->hasOne(RentalInfo::class);
    }
}
