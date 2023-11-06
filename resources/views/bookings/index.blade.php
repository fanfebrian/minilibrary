@extends('layouts.app')
@section('main')

@if (session()->has('success'))
  <div class="row">
    <div class="col-lg-12">
      <div class="alert alert-success" role="alert">
          {{ session('success') }}
      </div>
    </div>
  </div>
@endif
@if (session()->has('successDelete'))
  <div class="row">
    <div class="col-lg-12">
      <div class="alert alert-danger" role="alert">
          {{ session('successDelete') }}
      </div>
    </div>
  </div>
@endif
@if (session()->has('successEdit'))
  <div class="row">
    <div class="col-lg-12">
      <div class="alert alert-warning" role="alert">
          {{ session('successEdit') }}
      </div>
    </div>
  </div>
@endif
<div class="row">
  <div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Daftar Peminjam Buku</h5>
        <div class="table-responsive">
          <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
              <tr>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">No</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Nama</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Profesi</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Judul</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Penerbit</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Kelola</h6>
                </th>
                {{-- <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Penerbit</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Terbit</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Halaman</h6>
                </th> --}}
              </tr>
            </thead>
            <tbody>
              @foreach ($bookings as $booking)
              <tr>
                <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6></td>
                <td class="border-bottom-0">
                  <h6 class="fw-semibold mb-1">{{ $booking->name }}</h6>                         
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">{{ $booking->profesi }}</h6>                         
                </td>
                <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">{{ $booking->title }}</p>
                </td>
                <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">{{ $booking->publisher }}</p>
                </td>
                <td class="border-bottom-0">
                  <p class="mb-0 fw-normal">{{ $booking->jumlah }}</p>
                </td>
                {{-- <td class="border-bottom-0">
                  <a href="">
                    <button type="button" class="btn btn-primary m" style="margin-right: 5px;">Detail</button>
                  </a>
                  <a href="">
                    <button type="button" class="btn btn-warning m" style="margin-right: 5px;">Ubah</button>
                  </a>
                  <button type="button" class="btn btn-danger" style="margin-right: 5px;">Hapus</button>
                </td> --}}
                <td class="border-bottom-0">
                  {{-- detail --}}
                  <a href="/dashboard/bookings/{{ $booking->id }}" class="btn btn-info m-1">Detail
                    <i class="ti ti-arrow-right"></i>
                  </a>
                  {{-- update --}}
                  <a href="/dashboard/bookings/{{ $booking->id }}/edit" class="btn btn-warning m-1">update
                    <i class="ti ti-pencil"></i>
                  </a>
                  <form action="/dashboard/bookings/{{ $booking->id }}" method="post" 
                    class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">
                        Delete <i class="ti ti-circle-x"></i>
                    </button>
                </form>
                </td>
              </tr>
              @endforeach           
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
