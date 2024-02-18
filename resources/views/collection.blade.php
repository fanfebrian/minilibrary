@extends('layouts.app')
@section('main')


  <div class="container-fluid">
    
    {{-- Search Bar --}}
    {{-- <div class="container-fluid sticky-top">
      <div class="card shadow" style="border-radius: 50px; background-color: #134054">
        <div class="card-body">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="height: 50px; background-color: white;  border-radius: 10px;">
            <button class="btn" type="submit" style="background-color: #3681C6; color: white; width: 20%; height: 50px; border-radius: 10px;">Search</button>
          </form>
        </div>
      </div>
    </div> --}}

    {{-- <div class="card"> --}}
    <div class="card-body">
      <div class="row"> 
        @foreach ($books as $book)
          <div class="col">
            <div class="collection">
              <div class="card h-80 shadow mx-3">
                <a href="/dashboard/books/{{ $book->id }}">
                  <img src="{{ asset('storage/' . $book->image) }}" class="card-img-top" alt="..." style="border-radius: 10px">
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="card-body">
      <div class="row"> 
        @foreach ($books as $book)
          <div class="col">
            <div class="collection">
              <div class="card h-80 shadow mx-3">
                <a href="/dashboard/books/{{ $book->id }}">
                  <img src="{{ asset('storage/' . $book->image) }}" class="card-img-top" alt="..." style="border-radius: 10px">
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="card-body">
      <div class="row"> 
        @foreach ($books as $book)
          <div class="col">
            <div class="collection">
              <div class="card h-80 shadow mx-3">
                <a href="/dashboard/books/{{ $book->id }}">
                  <img src="{{ asset('storage/' . $book->image) }}" class="card-img-top" alt="..." style="border-radius: 10px">
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
