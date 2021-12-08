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
      <form action="{{ route('nilai-siswa.update', $s->id) }}" method="post">
        @method('PUT')
        @csrf
        <input type="hidden" name="id_mapel" value="{{ $mapel->id }}">
        <div class="modal-body">
          
          @if ($mapel->nilai->where('id_siswa', $s->id)->first())
            <input type="hidden" name="update" value="true">
            <input type="hidden" name="id_nilai" value="{{ $mapel->nilai->where('id_siswa', $s->id)->first()->id }}">
          @endif

          <div class="form-group">
            <label class="form-control-label" for="tugas_kelas">Tugas Kelas</label>
            <input type="number" name="tugas_kelas" class="form-control" id="tugas_kelas" placeholder="masukan tugas kelas" max="100" autocomplete="off" value="{{ $mapel->nilai->where('id_siswa', $s->id)->first() ? $mapel->nilai->where('id_siswa', $s->id)->first()->tugas_kelas : '' }}">
          </div>
          
          <div class="form-group">
            <label class="form-control-label" for="tugas_individu">Tugas Individu</label>
            <input type="number" name="tugas_individu" class="form-control" id="tugas_individu" placeholder="masukan tugas individu" max="100" autocomplete="off" value="{{ $mapel->nilai->where('id_siswa', $s->id)->first() ? $mapel->nilai->where('id_siswa', $s->id)->first()->tugas_individu : '' }}">
          </div>
          
          <div class="form-group">
            <label class="form-control-label" for="praktikum">Praktikum</label>
            <input type="number" name="praktikum" class="form-control" id="praktikum" placeholder="masukan nilai praktikum" max="100" autocomplete="off" value="{{ $mapel->nilai->where('id_siswa', $s->id)->first() ? $mapel->nilai->where('id_siswa', $s->id)->first()->praktikum : '' }}">
          </div>
          
          <div class="form-group">
            <label class="form-control-label" for="mental">Nilai Mental</label>
            <input type="number" name="mental" class="form-control" id="mental" placeholder="masukan nilai mental" max="100" autocomplete="off" value="{{ $mapel->nilai->where('id_siswa', $s->id)->first() ? $mapel->nilai->where('id_siswa', $s->id)->first()->mental : '' }}">
          </div>
          
          <div class="form-group">
            <label class="form-control-label" for="uas">UAS</label>
            <input type="number" name="uas" class="form-control" id="uas" placeholder="masukan nilai UAS" max="100" autocomplete="off" value="{{ $mapel->nilai->where('id_siswa', $s->id)->first() ? $mapel->nilai->where('id_siswa', $s->id)->first()->uas : '' }}">
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