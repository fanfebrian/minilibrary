@extends('layouts.app')
@section('main')

@if (auth()->user()->role === 'member')
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-12 my-3">
                <h2><a href="/dashboard/bookings"><i class="ti ti-arrow-left"></i></a> Detail Peminjam</h2>
            </div>
        </div>
        <div class="row">
            {{-- @if ($book->image)
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title fw-semibold m-3">Cover Buku</h5>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('storage/' . $book->image) }}" height="440" class="m-2">
                        </div>
                    </div>
                </div>
            @endif --}}
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold m-1">Informasi Peminjam</h5>
                    </div>
                    <div class="card-body p-3">
                        <div class="row my-3">
                            <div class="col-lg-6">
                                <strong class="m-1">Nama</strong>
                            </div>
                            <div class="col-lg-6">
                                <p class="m-1">{{ $booking->user->name }}</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-6">
                                <strong class="m-1">Profesi</strong>
                            </div>
                            <div class="col-lg-6">
                                <p class="m-1">{{ $booking->user->profession }}</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-6 col-sm-12">
                                <strong class="m-1">Judul</strong>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <p class="m-1">{{ $booking->book->title }}</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-6 col-sm-12">
                                <strong class="m-1">Penerbit</strong>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <p class="m-1">{{ $booking->book->publisher }}</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-6">
                                <strong class="m-1">Dipinjam Pada</strong>
                            </div>
                            <div class="col-lg-6">
                                <p class="m-1">{{ $booking->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-6 col-sm-12">
                                <strong class="m-1">Status</strong>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <p class="m-1">{{ $booking->status }}</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-6 col-sm-12">
                                <strong class="m-1">Denda</strong>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <p class="mb-0 fw-normal">
                                    @if ($booking->isDenda === 0)
                                    <p class="mb-0 fw-normal">-</p>
                                    @else
                                    <p class="mb-0 mt-0 fw-normal btn btn-primary" style="background-color: red">Anda Terkena Denda</p>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold m-1">Silahkan Ambil Buku Yang Anda Pinjam Di Perpustakaan</h5>
                    </div>
                    <div class="card-body p-3">
                        <div class="row my-3">
                        
                                <strong>Selamat Membaca Semoga Anda Suka Dengan Bukunya, Jangan Lupa Untuk Selalu Di Jaga, Dan Dikembalikan Sesuai Waktu Yang Sudah Di tentukan</strong>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-12 my-3">
            <h2><a href="/dashboard/bookings"><i class="ti ti-arrow-left"></i></a> Detail Peminjam</h2>
        </div>
    </div>
    <div class="row">
        {{-- @if ($book->image)
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold m-3">Cover Buku</h5>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('storage/' . $book->image) }}" height="440" class="m-2">
                    </div>
                </div>
            </div>
        @endif --}}
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title fw-semibold m-1">Informasi Peminjam</h5>
                </div>
                <div class="card-body p-3">
                    <div class="row my-3">
                        <div class="col-lg-6">
                            <strong class="m-1">Nama</strong>
                        </div>
                        <div class="col-lg-6">
                            <p class="m-1">{{ $booking->user->name }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6">
                            <strong class="m-1">Profesi</strong>
                        </div>
                        <div class="col-lg-6">
                            <p class="m-1">{{ $booking->user->profession }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6 col-sm-12">
                            <strong class="m-1">Judul</strong>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <p class="m-1">{{ $booking->book->title }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6 col-sm-12">
                            <strong class="m-1">Penerbit</strong>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <p class="m-1">{{ $booking->book->publisher }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6">
                            <strong class="m-1">Dipinjam Pada</strong>
                        </div>
                        <div class="col-lg-6">
                            <p class="m-1">{{ $booking->book->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6 col-sm-12">
                            <strong class="m-1">Status</strong>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <p class="m-1">{{ $booking->status }}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- <div>
                <a href="/dashboard/bookings/{{ $booking->id }}" class="btn btn-danger m-1"><i class="ti ti-arrow-left"></i>
                    Belum Dikembalikan
                </a> --}}
                {{-- update --}}
                {{-- <a href="/dashboard/bookings/{{ $booking->id }}/edit" class="btn btn-primary m-1">Sudah Dikemballikan
                    <i class="ti ti-arrow-right"></i>
                </a>
            </div> --}}
        </div>
    </div>
@endif
@endsection