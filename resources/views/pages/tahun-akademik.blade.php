@extends('layouts.app')
@section('title', 'SPN Polda Sulut')

@section('content')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h1 class="text-white d-inline-block mb-0">Tahun Akademik</h1>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <button type="button" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#tambah-ta">
            <i class="fas fa-plus"></i>
            Tambah Tahun Akademik
          </button>
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
          <table class="table align-items-center table-flush text-center">
            <thead class="thead-light">
              <tr>
                <th>No</th>
                <th>Tahun Akademik</th>
                <th>Status Aktif</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($items as $item)
              <tr>
                <td><b>{{ $loop->iteration }}</b></td>
                <td>{{ $item->ta }}</td>
                <td>
                  @if ($item->aktif)
                    <span class="badge badge-pill badge-success mr-3">Aktif</span>
                  @endif
                </td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-sm table-action table-action" data-toggle="modal" data-target="#edit-ta-{{ $item->id }}">
                      <i class="fas fa-edit" data-toggle="tooltip" title="Edit"></i>
                    </button>
                    <button type="button" class="btn btn-sm table-action table-action-delete" data-toggle="modal" data-target="#hapus-ta-{{ $item->id }}">
                      <i class="fas fa-trash" data-toggle="tooltip" title="Hapus"></i>
                    </button>
                  </div>
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
{{-- @include('includes.modal.siswa-modal') --}}
@endsection