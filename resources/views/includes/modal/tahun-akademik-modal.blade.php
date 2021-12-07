{{-- Tambah data --}}
<div class="modal fade" id="tambah-ta" tabindex="-1" role="dialog" aria-labelledby="tambah-ta" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">Tambah Tahun Akademik</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{ route('tahun-akademik.store') }}" method="post">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label class="form-control-label" for="ta">Tahun Akademik</label>
            <input type="text" name="ta" class="form-control" id="ta" placeholder="masukan tahun akademik" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="aktif">Status Aktif</label>
            <div class="mt-2">
              <label class="custom-toggle custom-toggle-success">
                <input type="hidden" name="aktif" value="0">
                <input type="checkbox" name="aktif" id="aktif" value="1" checked>
                <span class="custom-toggle-slider rounded-circle" data-label-off="Tidak" data-label-on="Ya"></span>
              </label>
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

{{-- Edit --}}
@foreach ($items as $item)
<div class="modal fade" id="edit-ta-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="edit-ta" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">Edit</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{ route('tahun-akademik.update', $item->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label class="form-control-label" for="ta">Tahun Akademik</label>
            <input type="text" name="ta" class="form-control" id="ta" placeholder="masukan tahun akademik" autocomplete="off" value="{{ $item->ta }}" required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="aktif">Status Aktif</label>
            <div class="mt-2">
              <label class="custom-toggle custom-toggle-success">
                <input type="hidden" name="aktif" value="0">
                <input type="checkbox" name="aktif" id="aktif" value="1" {{ $item->aktif ? 'checked disabled' : '' }}>
                <span class="custom-toggle-slider rounded-circle" data-label-off="Tidak" data-label-on="Ya"></span>
              </label>
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
<div class="modal fade" id="hapus-ta-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="hapus-ta" aria-hidden="true">
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
          <h4 class="heading mt-4">Hapus Tahun Akademik!</h4>
          <p>Anda yakin ingin menghapus <b>{{ $item->ta }}</b>?</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link text-white" data-dismiss="modal">Batal</button>
        <form class="ml-auto" action="{{ route('tahun-akademik.destroy', $item->id) }}" method="POST">
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