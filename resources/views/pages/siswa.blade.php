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
          <table class="table align-items-center table-flush" id="datatable-basic">
            <thead class="thead-light">
              <tr>
                <th>Nama</th>
                <th>Data</th>
                <th>Data</th>
                <th>Data</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Exer Maratade</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td class="table-actions text-center">
                  <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Detail">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit">
                    <i class="fas fa-user-edit"></i>
                  </a>
                  <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Hapus">
                    <i class="fas fa-trash"></i>
                  </a>
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