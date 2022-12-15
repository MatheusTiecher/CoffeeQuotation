<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'observation',
        'price_default',
        'quantity_per_box',
        'yield_per_box',
        'hash_image',
    ];

    public function quotationItems()
    {
        return $this->hasMany(QuotationItem::class);
    }
}
