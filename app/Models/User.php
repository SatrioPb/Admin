<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    // Relasi ke Profile
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    public function cities()
    {
        return $this->hasOne(cities::class);
    }
    public function payment()
    {
        return $this->belongsTo(Payment::class, 'user_id');
    }
    public function post()
    {
        return $this->belongsTo(Payment::class, 'author_id');
    }
}
