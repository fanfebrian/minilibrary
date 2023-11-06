<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bookings.index', [
            'name' => 'Bookings',
            'bookings' => Booking::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bookings.create', [
            'name' => 'Tambah Data Peminjaman'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingRequest $request)
    {
        // $data = $request->validate([
        //     'title' => ['required', 'min:3'],
        //     'author' => ['required', 'min:1'],
        //     'publisher' => ['required', 'min:1'],
        // ]);
        $data = $request->validate([
            'name' => ['required', 'max:50', 'min:3'],
            'profesi' => ['required', 'min:3'],
            'title' => ['required', 'max:50', 'min:3'],
            'publisher' => ['required', 'min:5'],
            'jumlah' => ['required']
        ]);
        // $request->file('image')->store('book-images');
        // return ddd($request->file('image'));
        Booking::create($data);
        return redirect('/dashboard/bookings')->with('success', 'Data Peminjaman Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        return view('bookings.show', [
            'booking' => $booking,
            'title' => $booking->name
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        return view('bookings.edit', [
            'booking' => $booking,
            'title' => 'Edit Data Peminjaman'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:50', 'min:3'],
            'profesi' => ['required', 'min:3'],
            'title' => ['required', 'max:50', 'min:3'],
            'publisher' => ['required', 'min:5'],
            'jumlah' => ['required']
        ]);

        // if (request()->hasFile('image') && request('image') != '') {
        //     $imagePath = public_path('storage/' . $book->image);
        //     if (File::exists($imagePath)) {
        //         unlink($imagePath);
        //     }
        //     $image = request()->file('image')->store('book-image');
        //     $validatedData['image'] = $image;

        $booking = Booking::where('id', $booking->id)->update($validatedData);
        return redirect('/dashboard/bookings')->with('successEdit', "Data $request->name Berhasil Diperbarui");
    }

    public function destroy(Booking $booking)
    {
        // if (!empty($book->image)) {
        //     $imagePath = public_path('storage/' . $booking->image);
        //     if (File::exists($imagePath)) {
        //         unlink($imagePath);
        //     }
        // }

        Booking::destroy($booking->id);
        return redirect('/dashboard/bookings')->with('successDelete', 'Data Peminjaman Berhasil Di Hapus');
    }

}