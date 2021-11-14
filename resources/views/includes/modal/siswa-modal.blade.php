<div class="modal fade" id="tambah-siswa" tabindex="-1" role="dialog" aria-labelledby="tambah-siswa" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">Tambah Siswa</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{ route('data-siswa.store') }}" method="post">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label class="form-control-label" for="no_siswa">Nomor Siswa</label>
            <input type="text" name="no_siswa" class="form-control form-control-sm" id="no_siswa" placeholder="masukan nomor siswa" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="nama">Nama</label>
            <input type="text" name="nama" class="form-control form-control-sm" id="nama" placeholder="masukan nama" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="ttl">Tempat Tanggal Lahir</label>
            <div class="input-group">
              <input type="text" name="tempat_lahir" class="form-control form-control-sm" placeholder="masukan tempat lahir" autocomplete="off" required>
              <input type="text" name="tanggal_lahir" class="form-control form-control-sm datepicker" placeholder="masukan tanggal lahir" value="01/01/1999" required>
            </div>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="peleton">Peleton</label>
            <input type="text" name="peleton" class="form-control form-control-sm" id="peleton" placeholder="masukan peleton" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="kompi">Kompi</label>
            <input type="text" name="kompi" class="form-control form-control-sm" id="kompi" placeholder="masukan kompi" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="tahun_angkatan">Tahun Angkatan</label>
            <select class="form-control form-control-sm" id="tahun_angkatan" name="tahun_angkatan" required>
              <option value="" selected disabled>-- Pilih tahun angkatan --</option>
              <option value="2021">TA 2021</option>
              <option value="2020">TA 2020</option>
              <option value="2019">TA 2019</option>
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