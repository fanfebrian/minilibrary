@extends('layouts.app')
@section('main')
<div class="col-lg-12 d-flex align-items-stretch">
  <div class="card w-100">
    <div class="card-body p-4">
    <form action="/dashboard/bookings/{{ $booking->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
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
            </div>
        </div>
      {{-- <div class="mb-3">
        <label for="formFileMultiple" class="form-label">Foto</label>
        <p>Masukan Foto Sampul Depan Buku</p>
        <input class="form-control" type="file" id="formFileMultiple" multiple>
      </div> --}}
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="margin-right: 1%">Batalkan</button>
        <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection