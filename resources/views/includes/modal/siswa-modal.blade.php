{{-- Tambah data --}}
<div class="modal fade" id="tambah-siswa" tabindex="-1" role="dialog" aria-labelledby="tambah-siswa" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">Tambah Siswa</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{ route('data-siswa.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label class="form-control-label" for="no_siswa">Nomor Siswa</label>
            <input type="text" name="no_siswa" class="form-control" id="no_siswa" placeholder="masukan nomor siswa" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="masukan nama" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="ttl">Tempat Tanggal Lahir</label>
            <div class="input-group">
              <input type="text" name="tempat_lahir" class="form-control" placeholder="masukan tempat lahir" autocomplete="off" required>
              <input type="text" name="tanggal_lahir" class="form-control datepicker" placeholder="masukan tanggal lahir" value="01/01/1999" required>
            </div>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="peleton">Peleton</label>
            <input type="text" name="peleton" class="form-control" id="peleton" placeholder="masukan peleton" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="kompi">Kompi</label>
            <input type="text" name="kompi" class="form-control" id="kompi" placeholder="masukan kompi" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="tahun_angkatan">Tahun Angkatan</label>
            <select class="form-control" id="tahun_angkatan" name="tahun_angkatan" required>
              <option value="" selected disabled>-- Pilih tahun angkatan --</option>
              <option value="2021">TA 2021</option>
              <option value="2020">TA 2020</option>
              <option value="2019">TA 2019</option>
            </select>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="foto">Foto Siswa</label>
            <div class="custom-file">
              <input type="file" name="foto" class="custom-file-input" id="foto" accept="image/*">
              <label class="custom-file-label" for="foto">Pilih foto</label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- Detail --}}
@foreach ($items as $item)
<div class="modal fade" id="detail-siswa-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="detail-siswa" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">Nomor Siswa : {{ $item->no_siswa }}</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card mb-3">
          <div class="row no-gutters d-flex align-items-center">
            <div class="col-md-6 p-3">
              @if ($item->foto)
                <img src="{{ Storage::url($item->foto) }}" class="card-img rounded img-thumbnail">
              @else
                <img src="{{ url('frontend/images/profile.png') }}" class="card-img rounded img-thumbnail" style="object-fit: cover">
              @endif
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h1 class="card-title">{{ $item->nama }}</h1>
                <p class="card-text">
                  {{ $item->tempat_lahir }}, {{ Carbon\Carbon::parse($item->tanggal_lahir)->isoFormat('D MMMM YYYY') }}
                </p>
                <p class="card-text">Peleton {{ $item->peleton }}, Kompi {{ $item->kompi }}</p>
                <p class="card-text"><small class="text-muted">TA {{ $item->tahun_angkatan }}</small></p>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-hover table-bordered text-nowrap mb-0">
                <thead class="thead-light">
                  <tr>
                    <th>Mata Pelajaran</th>
                    <th>Nilai</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>FT Reserse</td>
                    <th>7.5</th>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="modal" data-target="#edit-siswa-">
                        <span class="btn-inner--icon" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></span>
                        <span class="btn-inner--text">Edit</span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>FT Sabara</td>
                    <th>7.5</th>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="modal" data-target="#edit-siswa-">
                        <span class="btn-inner--icon" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></span>
                        <span class="btn-inner--text">Edit</span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>FT BINMAS</td>
                    <th>7.5</th>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="modal" data-target="#edit-siswa-">
                        <span class="btn-inner--icon" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></span>
                        <span class="btn-inner--text">Edit</span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>FT INTELKAM</td>
                    <th>7.5</th>
                    <td class="text-center">
                      <button type="button" class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="modal" data-target="#edit-siswa-">
                        <span class="btn-inner--icon" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></span>
                        <span class="btn-inner--text">Edit</span>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach

{{-- Edit --}}
@foreach ($items as $item)
<div class="modal fade" id="edit-siswa-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="edit-siswa" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">Edit</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{ route('data-siswa.update', $item->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label class="form-control-label" for="no_siswa">Nomor Siswa</label>
            <input type="text" name="no_siswa" class="form-control" id="no_siswa" placeholder="masukan nomor siswa" autocomplete="off" value="{{ $item->no_siswa }}" required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="masukan nama" autocomplete="off" value="{{ $item->nama }}" required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="ttl">Tempat Tanggal Lahir</label>
            <div class="input-group">
              <input type="text" name="tempat_lahir" class="form-control" placeholder="masukan tempat lahir" autocomplete="off" value="{{ $item->tempat_lahir }}" required>
              <input type="text" name="tanggal_lahir" class="form-control datepicker" placeholder="masukan tanggal lahir" value="{{ Carbon\Carbon::parse($item->tanggal_lahir)->isoFormat('DD/MM/YYYY') }}" required>
            </div>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="peleton">Peleton</label>
            <input type="text" name="peleton" class="form-control" id="peleton" placeholder="masukan peleton" autocomplete="off" value="{{ $item->peleton }}" required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="kompi">Kompi</label>
            <input type="text" name="kompi" class="form-control" id="kompi" placeholder="masukan kompi" autocomplete="off" value="{{ $item->kompi }}" required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="tahun_angkatan">Tahun Angkatan</label>
            <select class="form-control" id="tahun_angkatan" name="tahun_angkatan" required>
              <option value="" selected disabled>-- Pilih tahun angkatan --</option>
              <option {{ $item->tahun_angkatan == '2021' ? 'selected' : '' }} value="2021">TA 2021</option>
              <option {{ $item->tahun_angkatan == '2020' ? 'selected' : '' }} value="2020">TA 2020</option>
              <option {{ $item->tahun_angkatan == '2019' ? 'selected' : '' }} value="2019">TA 2019</option>
            </select>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="foto">Foto Siswa</label>
            <div class="custom-file">
              <input type="file" name="foto" class="custom-file-input" id="foto" accept="image/*">
              <label class="custom-file-label" for="foto">Pilih Foto</label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach

{{-- Hapus --}}
@foreach ($items as $item)
<div class="modal fade" id="hapus-siswa-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="hapus-siswa" aria-hidden="true">
  <div class="modal-dialog modal-danger modal-dialog-centered modal-sm" role="document">
    <div class="modal-content bg-gradient-danger">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-notification"></h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center">
          <i class="fal fa-exclamation-circle fa-7x"></i>
          <h4 class="heading mt-4">Hapus Siswa!</h4>
          <p>Anda yakin ingin menghapus <b>{{ $item->nama }}</b>?</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link text-white" data-dismiss="modal">Batal</button>
        <form class="ml-auto" action="{{ route('data-siswa.destroy', $item->id) }}" method="POST">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-white">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach

@push('addon-script')
  <script>
    $('.custom-file-input').on('change',function(){
      var fileName = $(this)[0].files[0].name;
      $(this).next('.custom-file-label').html(fileName);
    })
  </script>
@endpush