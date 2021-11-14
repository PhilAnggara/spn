@extends('layouts.app')
@section('title', 'SPN Polda Sulut')

@section('content')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h1 class="text-white d-inline-block mb-0">Data Siswa</h1>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <button type="button" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#tambah-siswa">
            <i class="fas fa-plus"></i>
            Tambah Siswa
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
        <div class="table-responsive py-4">
          <table class="table align-items-center table-flush text-center" id="datatable-basic">
            <thead class="thead-light">
              <tr>
                <th>Nomor Siswa</th>
                <th>Nama</th>
                <th>TTL</th>
                <th>Peleton</th>
                <th>Kompi</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2347230424239</td>
                <td>Exer Maratade</td>
                <td>Manado, 1 Jan 1999</td>
                <td>IV</td>
                <td>A</td>
                {{-- <td class="table-actions text-center">
                  <a href="#!" class="table-action">
                    <i class="fas fa-eye" data-toggle="tooltip" title="Detail"></i>
                  </a>
                  <a href="#!" class="table-action">
                    <i class="fas fa-user-edit" data-toggle="tooltip" title="Edit"></i>
                  </a>
                  <a href="#!" class="table-action table-action-delete">
                    <i class="fas fa-trash" data-toggle="tooltip" title="Hapus"></i>
                  </a>
                </td> --}}
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-sm table-action table-action">
                      <i class="fas fa-eye" data-toggle="tooltip" title="Detail"></i>
                    </button>
                    <button type="button" class="btn btn-sm table-action table-action">
                      <i class="fas fa-user-edit" data-toggle="tooltip" title="Edit"></i>
                    </button>
                    <button type="button" class="btn btn-sm table-action table-action-delete">
                      <i class="fas fa-trash" data-toggle="tooltip" title="Hapus"></i>
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@include('includes.modal.siswa-modal')
@endsection