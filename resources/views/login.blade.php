<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}">
    <title>Login</title>
</head>
<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
      data-sidebar-position="fixed" data-header-position="fixed">
      <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
          <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
              <div class="card mb-0">
                <div class="card-body">
                  <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                    <img src="{{ asset('images/logos/favicon.png') }}" width="180" alt="">
                  </a>
                  <p class="text-center">Your Social Campaigns</p>
                  <form action="/login" method="post">
                    @csrf
                    @if (session()->has('success'))
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                      </div>
                    </div>
                    @endif
                    @if (session()->has('loginFail'))
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="alert alert-danger" role="alert">
                            {{ session('loginFail') }}
                        </div>
                      </div>
                    </div>
                    @endif
                    @if (session()->has('successLogout'))
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="alert alert-danger" role="alert">
                              {{ session('successLogout') }}
                              {{-- <button type="button" class="btn-close" >

                              </button> --}}
                          </div>
                        </div>
                      </div>
                    @endif
                    <div class="mb-3">
                      <label for="exampleInputusername1" class="form-label">Username</label>
                      <input type="text" class="form-control @error ('username')
                        is-invalid"
                      @enderror
                        id="exampleInputtext1" aria-describedby="textHelp" name="username" value="{{ old('username') }}">
                      @error('username')
                        <p style="color: red;">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="mb-4">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control @error('password')
                      is-invalid"
                    @enderror
                      id="exampleInputtext1" aria-describedby="textHelp" name="password" value="{{ old('password') }}">
                    @error('password')
                      <p style="color: red;">{{ $message }}</p>
                    @enderror
                    </div>
                    <button class="btn btn-primary w-100 py-8 fs-4 mt-3 mb-1 rounded-2" type="submit">Sign In</button>
                    <div class="d-flex align-items-center justify-content-center">
                      <p class="fs-4 mb-0 fw-bold">New to Mini Library?</p>
                      <a class="text-primary fw-bold ms-2" href="./register">Create an account</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>