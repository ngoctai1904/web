<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'books';

    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'price',
        'discount',
        'amount',
        'view',
        'overview',
        'since',
        'author_id',
        'category_id',
    ];

    public function author()
    {
        return $this->hasOne(Author::class, 'id', 'author_id');
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
