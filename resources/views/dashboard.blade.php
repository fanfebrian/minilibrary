@extends('layouts.app')
@section('main')
      @if (auth()->user()->role === 'member')

      {{-- carousel --}}
        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('images/carousel/carousel1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('images/carousel/carousel2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('images/carousel/carousel3.jpg') }}" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        {{-- end carousel --}}

        {{-- Search Bar --}}
        <div class="container-fluid">
          <div class="card shadow" style="border-radius: 50px; background-color: #134054">
            <div class="card-body">

              {{-- <form method="get">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="mb-4">
                                <input type="text" class="form-control" name="search_keyword"
                                    placeholder="Cari buku atau pengarang ..."
                                    value="{{ request()->get('search_keyword') }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <button class="btn btn-primary" type="submit">Cari <i class="ti ti-search"></i></button>
                        </div>
                    </div>
                </form> --}}

              <form method="get">
                <div class="d-flex" role="search">
                  <input class="form-control me-2" type="text" placeholder="Search" name="search_keyword" placeholder="Cari buku atau pengarang ..." aria-label="Search" style="height: 50px; background-color: white;  border-radius: 10px;" value="{{ request()->get('search_keyword') }}">
                  <button class="btn" type="submit" style="background-color: #3681C6; color: white; width: 20%; height: 50px; border-radius: 10px;">Search <i class="ti ti-search"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
        {{-- End Search Bar --}}

        {{-- card Book --}}
        {{-- style="color: #3681C6; --}}
        <div class="container-fluid">
            <div class="text-center mb-5" style="border-bottom: 3px solid #3681C6">
              <h1 class="mb-3"><strong>Koleksi Buku Terbaru</strong></h1>
            </div>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse ($books_limit as $book)
            <div class="col">
              <div class="collection">
                <div class="card h-80 shadow mx-3">
                  <a href="/dashboard/books/{{ $book->id }}">
                    <img src="{{ asset('storage/' . $book->image) }}" class="card-img-top" alt="...">
                  </a>
                  {{-- <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div> --}}
                  <div class="card-footer">
                    <small class="text-body-secondary">{{ $book->created_at->diffForHumans() }}</small>
                  </div>
                </div>
              </div>
            </div>

            @empty
            <h3>Buku Tidak Ada Tod</h3>
            @endforelse
          </div>
        </div>
        {{-- card Book End --}}

      @else
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Hallo</h5>
            <h3 class="card-title fw-semibold mb-4">Selamat Datang {{ auth()->user()->role }} di Website Minilibrary</h3>
          </div>
        </div>
      </div>
      @endif
    {{-- </div>
  </div>
</div> --}}
@endsection
