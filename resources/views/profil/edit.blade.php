@extends('layouts.app')
@section('main')
      @if (auth()->user()->role === 'member')
      <style>
        .container {
          position: relative;
          width: 100%;
        }
        
        .image {
          opacity: 1;
          display: block;
          width: 100%;
          height: auto;
          transition: .5s ease;
          backface-visibility: hidden;
        }
        
        .middle {
          transition: .5s ease;
          opacity: 0;
          position: relative;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
          text-align: center;
        }
        
        .container:hover .image {
          opacity: 0.3;
        }
        
        .container:hover .middle {
          opacity: 1;
        }
        
        .text {
          background-color: #04AA6D;
          color: white;
          font-size: 16px;
          padding: 16px 32px;
        }
        </style>
        
    
        <div class="container-fluid">
            <form action="/profil/update" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                @csrf
                <!--  Row 1 -->
                <div class="row">
                    <div class="col-lg-12 my-3">
                        <h2><a href="/dashboard/home"><i class="ti ti-arrow-left"></i></a>Detail Profil</h2>
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
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title fw-semibold m-1">Foto Profil</h5>
                            </div>
                            <div class="img text-center">
            
                                    <div class="container">
                                        <img src="@if (auth()->user()->profilimage > 0) {{ asset('storage/' . auth()->user()->profilimage) }}
                                        @else {{ asset('images/profile/user-1.jpg') }} @endif" alt="Avatar" class="image" style="width:100%">
                                        <div class="middle">
                                            <input class="form-control" type="file" id="formFileMultiple" name="profilimage">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title fw-semibold m-1">Informasi Lanjutan</h5>
                            </div>
                            
                            <div class="card-body p-3">
                                <div class="row my-3">
                                    <div class="col-lg-3">
                                        <strong class="m-1">Nama</strong>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control @error('name')
                                            is-invalid
                                        @enderror" 
                                            id="exampleFormControlInput1" name="name" value="{{ old('name', auth()->user()->name) }}">
                                        @error('name')
                                            <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-lg-3">
                                        <strong class="m-1">User Name</strong>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control @error('username')
                                            is-invalid
                                        @enderror" 
                                            id="exampleFormControlInput1" name="username" value="{{ old('username', auth()->user()->username) }}">
                                        @error('username')
                                            <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-lg-3 col-sm-12">
                                        <strong class="m-1">Email</strong>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control @error('email')
                                            is-invalid
                                        @enderror" 
                                            id="exampleFormControlInput1" name="email" value="{{ old('email', auth()->user()->email) }}">
                                        @error('email')
                                            <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-lg-3 col-sm-12">
                                        <strong class="m-1">Profesi</strong>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control @error('profession')
                                            is-invalid
                                        @enderror" 
                                            id="exampleFormControlInput1" name="profession" value="{{ old('profession', auth()->user()->profession) }}">
                                        @error('profession')
                                            <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-md-flex justify-content-md-end">
                                    <a href="/profil" class="btn btn-secondary" style="margin-right: 1%">Batalkan</a>
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      @else
      
      @endif
@endsection
