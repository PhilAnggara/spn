@extends('layouts.auth')
@section('title', 'SPN Polda Sulut - Daftar')

@section('content')
<div class="main-content">
  <div class="header bg-gradient-primary py-6 py-lg-5 pt-lg-6">
    <div class="container">
      <div class="header-body text-center mb-7">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-8 px-5">
            <h1 class="text-white">SPN Polda Sulut</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="separator separator-bottom separator-skew zindex-100">
      <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
      </svg>
    </div>
  </div>
  <div class="container mt--8 pb-5">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <div class="card bg-secondary border-0">
          <div class="card-body px-lg-5 py-lg-5">
            <form action="{{ route('register') }}" method="POST">
              @csrf

              <div class="form-group @error('name') has-danger @enderror">
                <div class="input-group input-group-merge">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa fa-user"></i>
                    </span>
                  </div>
                  <input class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama" type="text" value="{{ old('name') }}" required autofocus autocomplete="off">
                </div>
                @error('name')
                  <small class="text-warning">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group @error('nrp') has-danger @enderror">
                <div class="input-group input-group-merge">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa fa-id-card"></i>
                    </span>
                  </div>
                  <input class="form-control @error('nrp') is-invalid @enderror" name="nrp" placeholder="NRP" type="number" value="{{ old('nrp') }}" required autocomplete="off">
                </div>
                @error('nrp')
                  <small class="text-warning">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group @error('email') has-danger @enderror">
                <div class="input-group input-group-merge">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ni ni-email-83"></i>
                    </span>
                  </div>
                  <input class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" type="email" value="{{ old('email') }}" required autocomplete="off">
                </div>
                @error('email')
                  <small class="text-warning">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group @error('password') has-danger @enderror">
                <div class="input-group input-group-merge">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ni ni-lock-circle-open"></i>
                    </span>
                  </div>
                  <input class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" type="password" required>
                </div>
                @error('password')
                  <small class="text-warning">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <div class="input-group input-group-merge">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ni ni-lock-circle-open"></i>
                    </span>
                  </div>
                  <input class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" type="password" required>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary mt-4">Daftar</button>
              </div>
              
            </form>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col text-center">
            <a href="{{ route('login') }}" class="text-light"><small>Sudah punya akun</small></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection