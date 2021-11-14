<div class="modal fade" id="tambah-siswa" tabindex="-1" role="dialog" aria-labelledby="tambah-siswa" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">Tambah Siswa</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label class="form-control-label" for="no_siswa">Nomor Siswa</label>
          <input type="text" name="no_siswa" class="form-control form-control-sm" id="no_siswa" placeholder="masukan nomor siswa">
        </div>
        <div class="form-group">
          <label class="form-control-label" for="nama">Nama</label>
          <input type="text" name="nama" class="form-control form-control-sm" id="nama" placeholder="masukan nama">
        </div>
        <div class="form-group">
          <label class="form-control-label" for="ttl">Tempat Tanggal Lahir</label>
          <input type="text" name="ttl" class="form-control datepicker form-control-sm" id="ttl" placeholder="masukan tempat tanggal lahir" value="06/20/2018">
        </div>
        <div class="form-group">
          <label class="form-control-label" for="peleton">Peleton</label>
          <input type="text" name="peleton" class="form-control form-control-sm" id="peleton" placeholder="masukan peleton">
        </div>
        <div class="form-group">
          <label class="form-control-label" for="kompi">Kompi</label>
          <input type="text" name="kompi" class="form-control form-control-sm" id="kompi" placeholder="masukan kompi">
        </div>
        <div class="form-group">
          <label class="form-control-label" for="TA">Tahun Ajaran</label>
          <select class="form-control form-control-sm" id="TA">
            <option>TA 2021/2021</option>
            <option>TA 2021/2020</option>
            <option>TA 2021/2019</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
    </div>
  </div>
</div>