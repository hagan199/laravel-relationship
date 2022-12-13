<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name', 'station_id', 'detail'
    ];
    
    public function station()
    {
        return $this->belongsTo(Station::class);
    }
}
