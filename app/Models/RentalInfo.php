<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalInfo extends Model
{
    /** @use HasFactory<\Database\Factories\RentalInfoFactory> */
    use HasFactory;

    protected $fillable = [
        'order_id',
        'start_date',
        'end_date',
        'duration_days',
        'late_fee',
        'returned_at',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
