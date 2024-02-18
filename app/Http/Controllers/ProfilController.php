<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\User;

// use App\Http\Requests\StoreUserRequest;
// use App\Http\Requests\UpdateBookRequest;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profil.index', [
            'title' => 'Profil',
        ]);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     return view('books.create', [
    //         'title' => 'Tambah Buku'
    //     ]);
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(StoreBookRequest $request)
    // {
    //     // $data = $request->validate([
    //     //     'title' => ['required', 'min:3'],
    //     //     'author' => ['required', 'min:1'],
    //     //     'publisher' => ['required', 'min:1'],
    //     // ]);
    //     $data = $request->validate([
    //         'title' => ['required', 'max:50', 'min:3',],
    //         'genre' => ['required', 'min:3',],
    //         'author' => ['required', 'min:5'],
    //         'publisher' => ['required', 'min:5'],
    //         'publication' => ['required', 'min:4'],
    //         'halaman' => ['required', 'min:2'],
    //         'stock' => ['required', 'min:1'],
    //         'description' => ['required', 'min:50'],
    //         'image' => ['image', 'file', 'nullable']
    //     ]);
    //     if ($request->file('image')) {
    //         $data['image'] = $request->file('image')->store('book-image');
    //     }
    //     // $request->file('image')->store('book-images');
    //     // return ddd($request->file('image'));
    //     Book::create($data);
    //     return redirect('/dashboard/books')->with('success', 'Buku Berhasil Di Tambahkan');
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Book $book)
    // {
    //     return view('books.show', [
    //         'book' => $book,
    //         'title' => $book->title
    //     ]);
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('profil.edit', [
            'title' => 'Edit Profil'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'max:100'],
            'email' => 'required|email|unique:users,email,' . $request->id,
            'username' => 'required|min:4|unique:users,username,' . $request->id,
            'profilimage' => ['file', 'image']
        ]);
        // if ($request->email != $data['email']) {
        //     $data['email']->validate(['email' => ['required', 'email', 'max:100', 'unique:users']]);
        // }
        if ($request->file('profilimage')) {
            $data['profilimage'] = $request->file('profilimage')->store('profile');
        }

        $user = User::where('id', $request->id)->update($data);

        return redirect()->route('user-profile')->with('successEdit', 'Profile kamu berhasil diperbarui!');
    }

    // public function destroy(Book $book)
    // {
    //     if (!empty($book->image)) {
    //         $imagePath = public_path('storage/' . $book->image);
    //         if (File::exists($imagePath)) {
    //             unlink($imagePath);
    //         }
    //     }

    //     Book::destroy($book->id);
    //     return redirect('/dashboard/books')->with('successDelete', 'Buku Berhasil Di Hapus');
    // }

}