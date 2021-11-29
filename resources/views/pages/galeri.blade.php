@extends('layouts.app')
@section('title', 'SPN Polda Sulut')

@section('content')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h1 class="text-white d-inline-block mb-0">Galeri</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          
          <div class="gallery">
            <a href="{{ url('frontend/images/gallery/img-1.jpeg') }}"><img src="{{ url('frontend/images/gallery/img-1.jpeg') }}" alt="" title=""/></a>
            <a href="{{ url('frontend/images/gallery/img-2.jpeg') }}"><img src="{{ url('frontend/images/gallery/img-2.jpeg') }}" alt="" title=""/></a>
            <a href="{{ url('frontend/images/gallery/img-3.jpeg') }}"><img src="{{ url('frontend/images/gallery/img-3.jpeg') }}" alt="" title=""/></a>
            <a href="{{ url('frontend/images/gallery/img-4.jpeg') }}"><img src="{{ url('frontend/images/gallery/img-4.jpeg') }}" alt="" title=""/></a>
            <a href="{{ url('frontend/images/gallery/img-5.jpeg') }}"><img src="{{ url('frontend/images/gallery/img-5.jpeg') }}" alt="" title=""/></a>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('addon-style')
<link rel="stylesheet" href="{{ url('frontend/vendor/simplelightbox/dist/simple-lightbox.css') }}">
<style>
  .gallery a img {
    float: left;
    width: 50%;
    height: auto;
    border: 2px solid #fff;
    -webkit-transition: -webkit-transform .15s ease;
    -moz-transition: -moz-transform .15s ease;
    -o-transition: -o-transform .15s ease;
    -ms-transition: -ms-transform .15s ease;
    transition: transform .15s ease;
    position: relative;
    z-index: 1000;
  }
  .gallery a {
    color: #009688;
    text-decoration: none;
  }
  .gallery a:hover {
    color: #01695f;
    text-decoration: none;
  }
  .sidenav {
    z-index: 500;
  }
</style>
@endpush

@push('addon-script')
<script src="{{ url('frontend/vendor/simplelightbox/dist/simple-lightbox.js') }}"></script>
<script>
  var lightbox = new SimpleLightbox('.gallery a', {});
</script>
@endpush