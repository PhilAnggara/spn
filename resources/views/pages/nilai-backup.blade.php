@extends('layouts.app')
@section('title', 'SPN Polda Sulut')

@section('content')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h1 class="text-white d-inline-block mb-0">Daftar Nilai</h1>
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
                <th>Nilai</th>
                @foreach ($mapel as $mp)
                <th>{{ $mp->nama_mapel }}</th>
                @endforeach
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($siswa as $s)
              <tr>
                <td>{{ $s->no_siswa }}</td>
                <td>{{ $s->nama }}</td>
                @foreach ($mapel as $mp)
                <td>{{ $mp->nilai->where('id_siswa', $s->id)->first() ? $mp->nilai->where('id_siswa', $s->id)->first()->nilai : '-' }}</td>
                @endforeach
                <td>
                  <button type="button" class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="modal" data-target="#edit-nilai-{{ $s->id }}">
                    <span class="btn-inner--icon" data-toggle="tooltip" data-original-title="Edit Nilai"><i class="fas fa-user-edit"></i></span>
                    <span class="btn-inner--text">Edit Nilai</span>
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
@endsection