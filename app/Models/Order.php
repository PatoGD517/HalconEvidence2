<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'customer_name', 'customer_number', 'fiscal_data', 
        'order_date', 'delivery_address', 'notes', 'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function statuses() {
        return $this->hasMany(Status::class);
    }
}

