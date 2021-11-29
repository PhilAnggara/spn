@extends('layouts.app')
@section('title', 'SPN Polda Sulut')

@section('content')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col">
          <h1 class="text-white d-inline-block mb-0">Struktur Organisasi</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <img src="{{ url('frontend/images/struktur.png') }}" class="img-fluid" alt="Responsive image">
      </div>
    </div>
  </div>
</div>
@endsection