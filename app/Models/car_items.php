<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car_items extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id', 'quantity', 'product_id',];

}
