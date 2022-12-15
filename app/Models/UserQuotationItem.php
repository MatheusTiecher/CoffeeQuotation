<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuotationItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'user_quotation_id',
        'quotation_item_id',
    ];

    public function userQuotation()
    {
        return $this->belongsTo(UserQuotation::class);
    }

    public function quotationItem()
    {
        return $this->belongsTo(QuotationItem::class);
    }
}
