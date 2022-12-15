<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'observation',
        'key_pix',
        'status',
        'start_date',
        'end_date',
        'user_id',
    ];

    /**
     * Status of the quotation
     * 0 - Active
     * 1 - Finished
     * 2 - Canceled
     */

    public function quotationItems()
    {
        return $this->hasMany(QuotationItem::class);
    }

    public function userQuotations()
    {
        return $this->hasMany(UserQuotation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 0);
    }

    public function scopeFinished($query)
    {
        return $query->where('status', 1);
    }

    public function scopeCanceled($query)
    {
        return $query->where('status', 2);
    }
}
