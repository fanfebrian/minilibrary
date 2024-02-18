<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        "title",
        "genre",
        "author",
        "publisher",
        "publication",
        "halaman",
        "stock",
        "description",
        "image"
    ];

    public function scopeSearch($query, $keyword)
    {
        if ($keyword) {
            return $query->where('title', 'like', "%$keyword%")
                ->orWhere('description', 'like', "%$keyword%")
                ->orWhere('author', 'like', "%$keyword%")
                ->orWhere('publisher', 'like', "%$keyword%")
                ->orWhere('genre', 'like', "%$keyword%");
        }
        return $query;
    }

    use HasFactory;
}
