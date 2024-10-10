<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    // Set the relationship that payment belongs to user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
 
}
