<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Province
    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function cities (){
        return $this->belongsTo(cities::class, 'city_id');
    }
    public function city()
    {
        return $this->belongsTo(cities::class, 'city_id');
    }

}
