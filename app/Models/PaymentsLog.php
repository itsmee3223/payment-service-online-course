<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentsLog extends Model
{
    use HasFactory;
    protected $table = 'payments_log';
    protected $fillable = [
        'status', 'payment_type', 'order_id', 'raw_response'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ]
}
