<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name', 'location','country','phone'
    ];

    public function stations()
    {
        return $this->hasMany(Station::class);
    }

}
