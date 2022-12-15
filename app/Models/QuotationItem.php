<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'quantity_max',
        'quantity_min',
        'quotation_id',
        'product_id',
    ];

    public function quotation()
    {
        return $this->belongsTo(Quotation::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function userQuotationItems()
    {
        return $this->hasMany(UserQuotationItem::class);
    }
}
