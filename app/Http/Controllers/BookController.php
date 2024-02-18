<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Barryvdh\DomPDF\Facade\Pdf;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('books.index', [
            'title' => 'Books',
            'books' => Book::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create', [
            'title' => 'Tambah Buku'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        // $data = $request->validate([
        //     'title' => ['required', 'min:3'],
        //     'author' => ['required', 'min:1'],
        //     'publisher' => ['required', 'min:1'],
        // ]);
        $data = $request->validate([
            'title' => ['required', 'max:50', 'min:3',],
            'genre' => ['required', 'min:3',],
            'author' => ['required', 'min:5'],
            'publisher' => ['required', 'min:5'],
            'publication' => ['required', 'min:4'],
            'halaman' => ['required', 'min:2'],
            'stock' => ['required', 'min:1'],
            'description' => ['required', 'min:50'],
            'image' => ['image', 'file', 'nullable']
        ]);
        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('book-image');
        }
        // $request->file('image')->store('book-images');
        // return ddd($request->file('image'));
        Book::create($data);
        return redirect('/dashboard/books')->with('success', 'Buku Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', [
            'book' => $book,
            'title' => $book->title
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', [
            'book' => $book,
            'title' => 'Edit Buku'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:50', 'min:3'],
            'genre' => ['required', 'min:3'],
            'author' => ['required', 'min:5'],
            'publisher' => ['required', 'min:5'],
            'publication' => ['required', 'min:4'],
            'halaman' => ['required', 'min:2'],
            'stock' => ['required', 'min:1'],
            'description' => ['required', 'min:50'],
            'image' => ['image', 'file']
        ]);

        if (request()->hasFile('image') || request()->hasFile('image') != '') {
            $imagePath = public_path('storage/' . $book->image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
            $image = request()->file('image')->store('book-image');
            $validatedData['image'] = $image;
        }
        $book = Book::where('id', $book->id)->update($validatedData);
        return redirect('/dashboard/books')->with('successEdit', "Buku $request->title Berhasil Diperbarui");
    }

    // public function update(UpdateBookRequest $request, Book $book)
    // {
    //     $validatedData = $request->validate([
    //         'title' => ['required', 'max:50', 'min:3'],
    //         'genre' => ['required', 'min:3'],
    //         'author' => ['required', 'min:5'],
    //         'publisher' => ['required', 'min:5'],
    //         'publication' => ['required', 'min:4'],
    //         'halaman' => ['required', 'min:2'],
    //         'stock' => ['required', 'min:1'],
    //         'description' => ['required', 'min:50']
    //     ]);

    //     if ($request->file('image')) {
    //         $validatedData['image'] = $request->file('image')->store('book-image');
    //     }
    //     $book = Book::where('id', $book->id)->update($validatedData);
    //     return redirect('/dashboard/books/')->with('successEdit', "Buku $request->title berhasil diperbarui!");
    // }

    public function destroy(Book $book)
    {
        if (!empty($book->image)) {
            $imagePath = public_path('storage/' . $book->image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
        }

        Book::destroy($book->id);
        return redirect('/dashboard/books')->with('successDelete', 'Buku Berhasil Di Hapus');
    }

    /**
     * Generate PDF from the database.
     */
    public function generatePdf()
    {
        $books = Book::all();

        // Pass the data to the view and render it as PDF
        $pdf = PDF::loadView('books.pdf', ['books' => $books]);

        // Set the headers for the response
        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename=books.pdf',
        ];

        // Optionally, you can save the PDF to a file
        // $pdf->save(storage_path('app/public/books.pdf'));

        // Return the PDF as a response with headers for download
        return response($pdf->output(), 200, $headers);
    }
}