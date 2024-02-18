@extends('layouts.app')
@section('main')
<div class="col-lg-12 d-flex align-items-stretch">
  <div class="card w-100">
    <div class="card-body p-4">
    <form action="/dashboard/bookings/{{ $booking->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
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
                
                <form action="/dashboard/bookings/{{ $booking->id }}" method="post">
                    @csrf
                    @method('put')
                    <select class="form-select @error('status') is-invalid @enderror"
                                    aria-label="Default select example" id="status" name="status"
                                    @if ($booking->status === 'Dikembalikan') disabled @endif>
                                    @if ($booking->status === 'Diajukan' || $booking->status === 'Ditolak')
                                        <option value="{{ 'Dipinjam' }}" @if ($booking->status === 'Dipinjam') selected @endif>
                                            Dipinjam
                                        </option>
                                        <option value="{{ 'Ditolak' }}" @if ($booking->status === 'Ditolak') selected @endif>
                                            Ditolak
                                        </option>
                                    @elseif ($booking->status === 'Dipinjam')
                                        <option value="{{ 'Dikembalikan' }}"
                                            @if ($booking->status === 'Dikembalikan') selected @endif>
                                            Dikembalikan
                                        </option>
                                        
                                        <option value="{{ 'Dikembalikan Terlambat' }}"
                                            @if ($booking->status === 'Dikembalikan Terlambat') selected @endif>
                                            Dikembalikan Terlambat
                                        </option>
                                    @else
                                        <option value="{{ 'Dikembalikan' }}"
                                            @if ($booking->status === 'Dikembalikan') selected @endif>
                                            Dikembalikan
                                        </option>
                                    @endif
                    </select>

                    <div class="mt-3 d-md-flex justify-content-md-end">
                        {{-- <a href="/dashboard/bookings/{{ $booking->id }}" class="btn btn-danger m-1"><i class="ti ti-arrow-left"></i>
                            Belum Dikembalikan
                        </a> --}}
                        {{-- update --}}
                        <button href="/dashboard/bookings/{{ $booking->id }}/edit" class="btn btn-primary m-1">Perbarui Status
                            <i class="ti ti-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- <div class="row">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <p>Tuliskan Nama Peminjam</p>
                <input type="text" class="form-control @error('name')
                    is-invalid
                @enderror" 
                    id="exampleFormControlInput1" name="name" value="{{ old('name', $booking->name) }}">
                @error('name')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Profesi</label>
                <p>Tuliskan Profesi Peminjaman</p>
                <input type="text"
                    class="form-control @error('profesi')
                    is-invalid
                    @enderror" 
                        id="exampleFormControlInput1" name="profesi" value="{{ old('profesi', $booking->profesi) }}">
                    @error('profesi')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul</label>
                <p>Tuliskan Judul Buku</p>
                <input type="text" 
                    class="form-control @error('title')
                    is-invalid
                    @enderror" 
                        id="exampleFormControlInput1" name="title" value="{{ old('title', $booking->title) }}">
                    @error('title')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
                <p>Tuliskan Penerbit Buku</p>
                <input type="text"
                    class="form-control @error('publisher')
                    is-invalid
                    @enderror" 
                        id="exampleFormControlInput1" name="publisher" value="{{ old('publisher', $booking->publisher) }}">
                    @error('publisher')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
                <p>Tuliskan Jumlah Buku</p>
                <input type="number" 
                    class="form-control @error('jumlah')
                    is-invalid
                    @enderror" 
                        id="exampleFormControlInput1" name="jumlah" value="{{ old('jumlah', $booking->jumlah) }}">
                    @error('jumlah')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
            </div> --}}

            
        </div>
      {{-- <div class="mb-3">
        <label for="formFileMultiple" class="form-label">Foto</label>
        <p>Masukan Foto Sampul Depan Buku</p>
        <input class="form-control" type="file" id="formFileMultiple" multiple>
      </div> --}}
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="margin-right: 1%">Batalkan</button>
        <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
      </div> --}}
    </div>
  </div>
</div>
@endsection