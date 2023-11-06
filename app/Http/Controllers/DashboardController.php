<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{

    public function indexHome()
    {
        return view("dashboard",[
            'title' => 'Home',
            'books' => Book::all()
        ]);
    }

    public function indexBuku()
    {
        return view("dashboard",[
            'title' => 'Buku',
            'books' => Book::all()
        ]);
    }

    public function show()
    {
        return "show";
    }
}
