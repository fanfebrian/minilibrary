<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CollectionController extends Controller
{

    public function index()
    {
        return view("collection", [
            'title' => 'Home',
            'books' => Book::all()
        ]);
    }

    public function indexBuku()
    {
        return view("collection", [
            'title' => 'Buku',
            'books' => Book::latest()->take(3)->get()
        ]);
    }

    public function show()
    {
        return "show";
    }
}
