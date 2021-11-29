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
          <h3 class="card-title mb-3">Tentang SPN Polda Sulut</h3>
          <p class="card-text mb-4">SPN Polda Polda Sulut merupakan Lembaga Pendidikan Kepolisian di bawah naungan Polda Sulut yang berdiri sejak Tahun 1961 yang beralamat di Jl. Sam Ratulangi No.322, Karombasan Utara, Kec. Wanea, Kota Manado, Sulawesi Utara 95115</p>

          <h3 class="card-title mb-3">Lokasi SPN Polda Sulut</h3>
          <div class="embed-responsive embed-responsive-16by9 mb-4">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3464.0011880970224!2d124.83387701431572!3d1.4531924616405656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32877494687a3e65%3A0x240da8aded7a7cf!2sSPN%20Karombasan%20Polda%20Sulut!5e1!3m2!1sid!2sid!4v1638165203890!5m2!1sid!2sid" allowfullscreen></iframe>
          </div>

          <h3 class="card-title mb-3">Visi</h3>
          <p class="card-text mb-4">
            Mewujudkan lembaga pendidikan POLRI menjadi <i><b>centre of excellence</b></i> dalam mencetak anggota POLRI yang presisi.
          </p>

          <h3 class="card-title mb-3">Misi</h3>
          <ol>
            <li>
              <p class="card-text mb-3">
                Menyelenggarakan pendidikan dan pelatihan aparatur POLRI maupun non POLRI yang memiliki budaya bersih, disiplin yang tinggi serta membudayakan anti korupsi, memiliki mental yang baik dan jiwa kebangsaan.
              </p>
            </li>
            <li>
              <p class="card-text mb-3">
                Menetapkan sistim tenaga pendidik dan pengasuh yang profesional, humanis dan berkualitas.
              </p>
            </li>
            <li>
              <p class="card-text mb-3">
                Mewujudkan lingkungan pendidikan sebagai pusat keunggulan, tempat vaforit dan prestasi.
              </p>
            </li>
            <li>
              <p class="card-text mb-3">
                Membangun kampus dengan kurikulum kekinian dan menjawab tantangan tugas serta sistim pembelajaran terpadu berbasis IT.
              </p>
            </li>
            <li>
              <p class="card-text mb-3">
                Ketersediaan dan standar komponen pendidikan POLRI.
              </p>
            </li>
            <li>
              <p class="card-text mb-3">
                Mewujudkan dan menyelenggarakan kerja sama bidang pendidikan lainnya, dalam rangka pengembangan dan peningkatan penyelenggaraan pendidikan.
              </p>
            </li>
            <li>
              <p class="card-text mb-4">
                Menciptakan lingkungan pendidikan yang aman dan sehat di SPN POLDA Sulut.
              </p>
            </li>
          </ol>
          

        </div>
      </div>
    </div>
  </div>
</div>
@endsection