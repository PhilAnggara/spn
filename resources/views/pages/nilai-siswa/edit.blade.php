@extends('layouts.app')
@section('title', 'SPN Polda Sulut')

@section('content')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h1 class="text-white d-inline-block mb-0">Nilai Siswa</h1>
        </div>
        <div class="col-lg-6 col-7 d-flex justify-content-end">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="{{ route('nilai-siswa.index') }}">Nilai Siswa</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ $mapel->nama_mapel }}</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">

        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3 mx-3 shadow" role="alert">
          <span class="alert-icon"><i class="fa fa-check-circle"></i></span>
          <span class="alert-text"><strong>Sukses!</strong> {{ session('success') }}</span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        
        <div class="table-responsive py-4">
          <table class="table align-items-center table-flush text-center" id="datatable-basic">
            <thead class="thead-light">
              <tr>
                <th>Nomor Siswa</th>
                <th>Nama</th>
                <th>Tugas Kelas</th>
                <th>Tugas Individu</th>
                <th>Praktikum</th>
                <th>Mental</th>
                <th>UAS</th>
                <th>Nilai</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($siswa as $s)
                <tr>
                  <td><b>{{ $s->no_siswa }}</b></td>
                  <td>{{ $s->nama }}</td>
                  <td>
                    {{ $mapel->nilai->where('id_siswa', $s->id)->first() ? $mapel->nilai->where('id_siswa', $s->id)->first()->tugas_kelas : '-' }}
                  </td>
                  <td>
                    {{ $mapel->nilai->where('id_siswa', $s->id)->first() ? $mapel->nilai->where('id_siswa', $s->id)->first()->tugas_individu : '-' }}
                  </td>
                  <td>
                    {{ $mapel->nilai->where('id_siswa', $s->id)->first() ? $mapel->nilai->where('id_siswa', $s->id)->first()->praktikum : '-' }}
                  </td>
                  <td>
                    {{ $mapel->nilai->where('id_siswa', $s->id)->first() ? $mapel->nilai->where('id_siswa', $s->id)->first()->mental : '-' }}
                  </td>
                  <td>
                    {{ $mapel->nilai->where('id_siswa', $s->id)->first() ? $mapel->nilai->where('id_siswa', $s->id)->first()->uas : '-' }}
                  </td>
                  <th>
                    {{ $mapel->nilai->where('id_siswa', $s->id)->first() ? $mapel->nilai->where('id_siswa', $s->id)->first()->nilai : '-' }}
                  </th>
                  <td>
                    <button type="button" class="btn btn-sm table-action table-action" data-toggle="modal" data-target="#edit-nilai-{{ $s->id }}">
                      <i class="fas fa-user-edit" data-toggle="tooltip" title="Edit"></i>
                    </button>
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
@include('includes.modal.nilai-siswa-modal')
@endsection