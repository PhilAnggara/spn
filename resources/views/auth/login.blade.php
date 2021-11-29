@extends('layouts.auth')
@section('title', 'SPN Polda Sulut - Masuk')

@section('content')
<div class="main-content">
  <div class="header bg-gradient-primary py-6 py-lg-6 pt-lg-7">
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
      <div class="col-lg-5 col-md-7">
        <div class="card bg-secondary border-0 mb-0">
          <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
              <small>Silahkan masuk untuk melanjutkan</small>
            </div>
            @error('nrp')
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                NRP atau Password salah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @enderror
            <form action="{{ route('login') }}" method="POST">
              @csrf

              <div class="form-group mb-3">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa fa-id-card"></i>
                    </span>
                  </div>
                  <input name="nrp" class="form-control" value="{{ old('nrp') }}" placeholder="NRP" type="number" autofocus autocomplete="off" required>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="ni ni-lock-circle-open"></i>
                    </span>
                  </div>
                  <input name="password" class="form-control" placeholder="Password" type="password" required>
                </div>
              </div>
              <div class="custom-control custom-control-alternative custom-checkbox">
                <input name="remember" class="custom-control-input" id=" remember" type="checkbox">
                <label class="custom-control-label" for=" remember">
                  <span class="text-muted">Ingat saya</span>
                </label>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary my-4">Masuk</button>
              </div>
              
            </form>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col text-center">
            <a href="{{ route('register') }}" class="text-light"><small>Buat akun baru</small></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection