@extends('layouts.app')
@section('title', 'SPN Polda Sulut')

@section('content')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h1 class="text-white d-inline-block mb-0">Tentang</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <img src="{{ url('frontend/images/spn.jpg') }}" class="card-img-top">
        <div class="card-body">
          <h3 class="card-title mb-3">Sekolah Polisi Negara Polda Sulut</h3>
          <p class="card-text mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi corrupti natus assumenda amet error alias molestiae, labore cupiditate accusamus, sint enim obcaecati quam vero doloremque iste voluptatum? Dolores quia culpa iste ipsum repellendus voluptatem tenetur dolorem inventore voluptatibus! Dolor quaerat, quasi aut sequi cum fuga ipsam cupiditate ratione sed nulla. Corrupti quas a debitis pariatur, praesentium accusantium doloremque minus id, ipsum illo eum! Veniam consequatur laborum asperiores maiores nisi, similique dolores fuga, esse delectus odio ratione maxime velit ipsam consequuntur iure dolor voluptatem odit quis! Vitae, perferendis ea praesentium ad laboriosam eligendi incidunt maiores fugiat, eveniet, distinctio expedita aliquam fuga.</p>
          <p class="card-text mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi corrupti natus assumenda amet error alias molestiae, labore cupiditate accusamus, sint enim obcaecati quam vero doloremque iste voluptatum? Dolores quia culpa iste ipsum repellendus voluptatem tenetur dolorem inventore voluptatibus! Dolor quaerat, quasi aut sequi cum fuga ipsam cupiditate ratione sed nulla. Corrupti quas a debitis pariatur, praesentium accusantium doloremque minus id, ipsum illo eum! Veniam consequatur laborum asperiores maiores nisi, similique dolores fuga, esse delectus odio ratione maxime velit ipsam consequuntur iure dolor voluptatem odit quis! Vitae, perferendis ea praesentium ad laboriosam eligendi incidunt maiores fugiat, eveniet, distinctio expedita aliquam fuga.</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection