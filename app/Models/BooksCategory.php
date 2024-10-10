<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BooksCategory extends Model
{
    protected $table = 'book_categories';

    public function books()
    {
        return $this->hasMany(Books::class, 'book_category_id', 'id');
    }
}
