{{-- Tambah data --}}
<div class="modal fade" id="tambah-mapel" tabindex="-1" role="dialog" aria-labelledby="tambah-mapel" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">Tambah Mata Pelajaran</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{ route('mata-pelajaran.store') }}" method="post">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label class="form-control-label" for="nama_mapel">Mata Pelajaran</label>
            <input type="text" name="nama_mapel" class="form-control" id="nama_mapel" placeholder="masukan nama mata pelajaran" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="id_ta">Tahun Angkatan</label>
            <select class="form-control" id="id_ta" name="id_ta" required>
              @foreach ($tahun_angkatan as $ta)
                <option value="{{ $ta->id }}">TA {{ $ta->ta }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="id_instruktur">Instruktur</label>
            <select class="form-control" id="id_instruktur" name="id_instruktur" required>
              <option value="" selected disabled>-- Pilih instruktur --</option>
              @foreach ($instruktur as $i)
                <option value="{{ $i->id }}">TA {{ $i->name }}</option>
              @endforeach
            </select>
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

{{-- Edit --}}
@foreach ($items as $item)
<div class="modal fade" id="edit-mapel-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="edit-mapel" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">Edit</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{ route('mata-pelajaran.update', $item->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label class="form-control-label" for="nama_mapel">Mata Pelajaran</label>
            <input type="text" name="nama_mapel" class="form-control" id="nama_mapel" placeholder="masukan nama mata pelajaran" autocomplete="off" value="{{ $item->nama_mapel }}" required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="id_ta">Tahun Angkatan</label>
            <select class="form-control" id="id_ta" name="id_ta" required>
              @foreach ($tahun_angkatan as $ta)
                <option {{ $item->id_ta == $ta->id ? 'selected' : '' }} value="{{ $ta->id }}">TA {{ $ta->ta }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="id_instruktur">Instruktur</label>
            <select class="form-control" id="id_instruktur" name="id_instruktur" required>
              @foreach ($instruktur as $i)
                <option {{ $item->id_instruktur == $i->id ? 'selected' : '' }} value="{{ $i->id }}">{{ $i->name }}</option>
              @endforeach
            </select>
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
<div class="modal fade" id="hapus-mapel-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="hapus-mapel" aria-hidden="true">
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
          <h4 class="heading mt-4">Hapus Mata Pelajaran!</h4>
          <p>Anda yakin ingin menghapus <b>{{ $item->nama_mapel }}</b>?</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link text-white" data-dismiss="modal">Batal</button>
        <form class="ml-auto" action="{{ route('mata-pelajaran.destroy', $item->id) }}" method="POST">
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