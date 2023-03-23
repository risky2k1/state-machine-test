<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStateHistory extends Model
{
    use HasFactory;

    protected $fillable=[
        'order_id',
        'from_state',
        'to_state',
    ];
}
