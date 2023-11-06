@extends('layouts.app')
@section('main')
<div class="col-lg-12 d-flex align-items-stretch">
  <div class="card w-100">
    <div class="card-body p-4">
    <form action="/dashboard/bookings" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <p>Tuliskan Nama Peminjam</p>
            <input type="text" class="form-control @error('name')
                is-invalid
            @enderror" 
                id="exampleFormControlInput1" name="name" value="{{ old('name') }}">
            @error('name')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Profesi Peminjam</label>
            <p>Tuliskan Profesi Peminjam Buku (Guru, Siswa, Dll)</p>
            <input type="text"
                class="form-control @error('profesi')
                is-invalid
                @enderror" 
                    id="exampleFormControlInput1" name="profesi" value="{{ old('profesi') }}">
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
                    id="exampleFormControlInput1" name="title" value="{{ old('title') }}">
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
                    id="exampleFormControlInput1" name="publisher" value="{{ old('publisher') }}">
                @error('publisher')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
            <p>Tuliskan Jumlah Buku Yang di Pinjam</p>
            <input type="number" 
                class="form-control @error('jumlah')
                is-invalid
                @enderror" 
                    id="exampleFormControlInput1" name="jumlah" value="{{ old('jumlah') }}">
                @error('jumlah')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
        </div>
        {{-- <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Halaman</label>
            <p>Tuliskan Berapa Halaman Buku</p>
            <input type="text" 
                class="form-control @error('halaman')
                is-invalid
                @enderror" 
                    id="exampleFormControlInput1" name="halaman" value="{{ old('halaman') }}">
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
                    id="exampleFormControlInput1" name="stock" value="{{ old('stock') }}">
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
                id="exampleFormControlTextarea1" rows="10" name="description">{{ old('description') }}</textarea>
                @error('description')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Foto</label>
            <p>Masukan Foto Sampul Depan Buku</p>
            <input class="form-control" type="file" id="formFileMultiple" name="image">
        </div> --}}
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="margin-right: 1%">Batalkan</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection