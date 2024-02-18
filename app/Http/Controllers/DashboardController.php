<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{

    public function indexHome(Request $request)
    {
        if ($request->filled('search_keyword')) {
            $keyword = $request->input('search_keyword');
            $books = Book::search($keyword)->get();
        } else {
            $books = Book::latest()->take(3)->get();
        }
        return view("dashboard", [
            'title' => 'Home',
            'books' => $books,
            'books_limit' => $books
        ]);

    }
    public function indexBuku()
    {
        return view("dashboard", [
            'title' => 'Buku',
            'books_limit' => Book::latest()->take(3)->get()
        ]);
    }

    public function show()
    {
        return "show";
    }
}
