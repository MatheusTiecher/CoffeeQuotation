<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuotation extends Model
{
    use HasFactory;

    protected $fillable = [
        'paid',
        'status',
        'user_id',
        'quotation_id',
    ];

    /**
     * Status of the user quotation
     * 0 - pending
     * 1 - paid
     * 2 - canceled
     */

    public function userQuotationItems()
    {
        return $this->hasMany(UserQuotationItem::class);
    }

    public function quotation()
    {
        return $this->belongsTo(Quotation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopePending($query)
    {
        return $query->where('status', 0);
    }

    public function scopePaid($query)
    {
        return $query->where('status', 1);
    }

    public function scopeCanceled($query)
    {
        return $query->where('status', 2);
    }
}
