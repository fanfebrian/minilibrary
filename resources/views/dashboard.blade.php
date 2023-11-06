@extends('layouts.app')
@section('main')
<div class="col-lg-12 d-flex align-items-stretch">
  <div class="card w-100">
    <div class="card-body p-4">
      <h5 class="card-title fw-semibold mb-4">Hallo</h5>
      <h3 class="card-title fw-semibold mb-4">Selamat Datang {{ auth()->user()->name }} di Website Minilibrary</h3>
    </div>
  </div>
</div>
@endsection