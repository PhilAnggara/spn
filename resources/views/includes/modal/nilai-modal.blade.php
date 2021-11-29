{{-- Edit --}}
@foreach ($siswa as $s)
<div class="modal fade" id="edit-nilai-{{ $s->id }}" tabindex="-1" role="dialog" aria-labelledby="edit-nilai" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">Edit Nilai</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{ route('daftar-nilai.update', $s->id) }}" method="post">
        @method('PUT')
        @csrf
        {{-- <input type="hidden" name="id_siswa" value="{{ $s->id }}"> --}}
        <div class="modal-body">
          
          @foreach ($mapel as $mp)
            @if ($mp->nilai->where('id_siswa', $s->id)->first())
              <input type="hidden" name="nilai_{{ $mp->id }}" value="{{ $mp->nilai->where('id_siswa', $s->id)->first()->id }}">
            @endif
            <div class="form-group">
              <label class="form-control-label" for="mp_{{ $mp->id }}">{{ $mp->nama_mapel }}</label>
              <input type="number" name="mp_{{ $mp->id }}" class="form-control" id="mp_{{ $mp->id }}" placeholder="masukan nilai" max="100" autocomplete="off" value="{{ $mp->nilai->where('id_siswa', $s->id)->first() ? $mp->nilai->where('id_siswa', $s->id)->first()->nilai : '' }}">
            </div>
          @endforeach

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