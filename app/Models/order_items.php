<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class order_items extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'unit_price', 'product_id', 'quantity'];

    public function order(): BelongsTo
    {
        return $this->belongsTo(orders::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(products::class);
    }
}
