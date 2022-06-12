<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name', 'station_id', 'company_id'
    ];

    public function company()
    {
        return $this->belongsTo('Company::class');
    }

    public function station()
    {
        return $this->belongsTo('Station::class');
    }
}
