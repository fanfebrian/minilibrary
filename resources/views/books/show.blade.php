{{-- @extends('layouts.app')
@section('main')
<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
      <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-50" style="margin-right: 2%;">
          <div class="card-body">
            <div class="">
              <div class="mb-3 mb-sm-0">
                <img src="{{ asset('images/products/nkcthi.jpg') }}" class="img-fluid" style="width: 100%" alt="...">
                <div class="row my-3">
                    <div class='col-lg-4'>
                        <strong class="m-1">Pengarang</strong>
                    </div>
                    <div class='col-lg-8'>
                        <strong class="m-1">: {{ $book->author }}</strong>
                    </div>
                </div>
                <div class="row my-3">
                    <div class='col-lg-4'>
                        <strong class="m-1">Penerbit</strong>
                    </div>
                    <div class='col-lg-8'>
                        <strong class="m-1">: {{ $book->publisher }}</strong>
                    </div>
                </div>
                <div class="row my-3">
                    <div class='col-lg-4'>
                        <strong class="m-1">Terbit</strong>
                    </div>
                    <div class='col-lg-8'>
                        <strong class="m-1">: {{ $book->publication }}</strong>
                        {{-- difForHumans --}}
                    {{-- </div>
                </div>
                <div class="row my-3">
                    <div class='col-lg-4'>
                        <strong class="m-1">Halaman</strong>
                    </div>
                    <div class='col-lg-8'>
                        <strong class="m-1">: {{ $book->halaman }}</strong>
                    </div>
                </div>
                <div class="row my-3">
                    <div class='col-lg-4'>
                        <strong class="m-1">stock</strong>
                    </div>
                    <div class='col-lg-8'>
                        <strong class="m-1">: {{ $book->stock }}</strong>
                    </div>
                </div>
            </div>
            </div>
          </div>
        </div>
        <div class="card w-100">
            <div class="card-body">
              <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                <div class="mb-3 mb-sm-0">
                  <h5 class="card-title fw-semibold">Sales Overview</h5>
                  <p>{{ $book->description }}</p>
                </div>
              </div>
            </div>
          </div>
      </div>

      </div>
    </div>
  </div
@endsection --}}

@extends('layouts.app')
@section('main')
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-12 my-3">
            <h2><a href="/dashboard/books"><i class="ti ti-arrow-left"></i></a> Detail Buku</h2>
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
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title fw-semibold m-3">Cover Buku</h5>
                </div>
                <div class="img text-center">
                    <img src="{{ asset('storage/' . $book->image) }}" class="img-fluid mb-3 mt-3" alt="..." style="width: 90%;" height="440">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title fw-semibold m-1">Informasi Lanjutan</h5>
                </div>
                <div class="card-body p-3">
                    <div class="row my-3">
                        <div class="col-lg-6">
                            <strong class="m-1">Penulis</strong>
                        </div>
                        <div class="col-lg-6">
                            <p class="m-1">{{ $book->author }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6">
                            <strong class="m-1">Diupload pada</strong>
                        </div>
                        <div class="col-lg-6">
                            <p class="m-1">{{ $book->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6 col-sm-12">
                            <strong class="m-1">Genre</strong>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <p class="m-1">{{ $book->genre }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6 col-sm-12">
                            <strong class="m-1">Penerbit</strong>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <p class="m-1">{{ $book->publisher }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card w-100">
                <div class="card-header">
                    <h5 class="card-title fw-semibold m-3">{{ $book->title }}</h5>
                </div>
                <div class="card-body p-3">
                    {!! $book->description !!}
                </div>
            </div>
        </div>
    </div>
@endsection