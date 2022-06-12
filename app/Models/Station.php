<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    protected $fillable = [
        'station_name', 'user_id','company_id','location'
    ];

    /**
 * Get the user that belong the phone.
 */
    public function getCompanyName()
    {
        return $this->hasone(Company::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
