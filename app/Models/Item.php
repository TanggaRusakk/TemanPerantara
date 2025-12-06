<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /** @use HasFactory<\Database\Factories\ItemFactory> */
    use HasFactory;

    protected $fillable = [
        'vendor_id',
        'item_name',
        'item_description',
        'item_type',
        'item_price',
        'item_status',
        'rental_duration_unit',
        'rental_duration_value',
        'item_stock',
    ];

    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }

    public function itemCategories() {
        return $this->hasMany(ItemCategory::class);
    }

    public function orderItems() {
        return $this->hasMany(OrderItem::class);
    }

    public function ad() {
        return $this->hasMany(Ad::class);
    }

    public function itemGalleries() {
        return $this->hasMany(ItemGallery::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }
}
