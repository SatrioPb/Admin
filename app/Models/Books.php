<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';

    public function category()
    {
        return $this->belongsTo(BooksCategory::class, 'book_category_id', 'id');
    }
}

