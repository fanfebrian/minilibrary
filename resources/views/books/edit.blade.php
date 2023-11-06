@extends('layouts.app')
@section('main')
<div class="col-lg-12 d-flex align-items-stretch">
  <div class="card w-100">
    <div class="card-body p-4">
    <form action="/dashboard/books/{{ $book->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul</label>
                <p>Tuliskan Judul Buku</p>
                <input type="text" class="form-control @error('title')
                    is-invalid
                @enderror" 
                    id="exampleFormControlInput1" name="title" value="{{ old('title', $book->title) }}">
                @error('title')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jenis</label>
                <p>Tuliskan Jenis Buku</p>
                <input type="text"
                    class="form-control @error('genre')
                    is-invalid
                    @enderror" 
                        id="exampleFormControlInput1" name="genre" value="{{ old('genre', $book->genre) }}">
                    @error('genre')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Pengarang</label>
                <p>Tuliskan Nama Pengarang Buku</p>
                <input type="text" 
                    class="form-control @error('author')
                    is-invalid
                    @enderror" 
                        id="exampleFormControlInput1" name="author" value="{{ old('author', $book->author) }}">
                    @error('author')
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
                        id="exampleFormControlInput1" name="publisher" value="{{ old('publisher', $book->publisher) }}">
                    @error('publisher')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Terbit</label>
                <p>Tuliskan Tanggal dan Tahun Terbit</p>
                <input type="text" 
                    class="form-control @error('publication')
                    is-invalid
                    @enderror" 
                        id="exampleFormControlInput1" name="publication" value="{{ old('publication', $book->publication) }}">
                    @error('publication')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Halaman</label>
                <p>Tuliskan Berapa Halaman Buku</p>
                <input type="text" 
                    class="form-control @error('halaman')
                    is-invalid
                    @enderror" 
                        id="exampleFormControlInput1" name="halaman" value="{{ old('halaman', $book->halaman) }}">
                    @error('halaman')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Stok</label>
                <p>Tuliskan Stok Buku</p>
                <input type="number" 
                    class="form-control @error('stock')
                    is-invalid
                    @enderror" 
                        id="exampleFormControlInput1" name="stock" value="{{ old('stock', $book->stock) }}">
                    @error('stock')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <p>Tuliskan Deskripsi Buku Secara Singkat</p>
                <textarea class="form-control @error('description')
                is-invalid
                @enderror"
                    id="exampleFormControlTextarea1" rows="10" name="description">{{ old('description', $book->description) }}</textarea>
                    @error('description')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Foto</label>
                <p>Masukan Foto Sampul Depan Buku</p>
                <input class="form-control" type="file" id="formFileMultiple" name="image">
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