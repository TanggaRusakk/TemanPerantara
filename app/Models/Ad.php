<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    /** @use HasFactory<\Database\Factories\AdFactory> */
    use HasFactory;

    protected $fillable = [
        'item_id',
        'start_date',
        'end_date',
        'price',
        'status'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
