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
    use HasFactory;
}
