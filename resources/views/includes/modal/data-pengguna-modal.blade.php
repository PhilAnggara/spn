{{-- Tambah data --}}
<div class="modal fade" id="tambah-instruktur" tabindex="-1" role="dialog" aria-labelledby="tambah-instruktur" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">Tambah Instruktur</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{ route('data-pengguna.store') }}" method="post">
        @csrf
        <input type="hidden" name="level" value="instruktur">
        <div class="modal-body">
          <div class="form-group">
            <label class="form-control-label" for="name">Nama Instruktur</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="masukan nama instruktur" value="{{ old('name') }}" autocomplete="off" required>
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label class="form-control-label" for="nrp">NRP</label>
            <input type="number" name="nrp" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="masukan NRP" value="{{ old('nrp') }}" autocomplete="off" required>
            @error('nrp')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label class="form-control-label" for="email">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="masukan email" value="{{ old('email') }}" autocomplete="off" required>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label class="form-control-label" for="password">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="masukan password" autocomplete="off" required>
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label class="form-control-label" for="password_confirmation">Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="masukan password" autocomplete="off" required>
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

<div class="modal fade" id="tambah-pejabat" tabindex="-1" role="dialog" aria-labelledby="tambah-pejabat" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">Tambah Pejabat Utama</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{ route('data-pengguna.store') }}" method="post">
        @csrf
        <input type="hidden" name="level" value="pejabat">
        <div class="modal-body">
          <div class="form-group">
            <label class="form-control-label" for="name">Nama Pejabat</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="masukan nama pejabat" value="{{ old('name') }}" autocomplete="off" required>
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label class="form-control-label" for="nrp">NRP</label>
            <input type="number" name="nrp" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="masukan NRP" value="{{ old('nrp') }}" autocomplete="off" required>
            @error('nrp')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label class="form-control-label" for="email">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="masukan email" value="{{ old('email') }}" autocomplete="off" required>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label class="form-control-label" for="password">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="masukan password" autocomplete="off" required>
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label class="form-control-label" for="password_confirmation">Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="masukan password" autocomplete="off" required>
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
<div class="modal fade" id="edit-pengguna-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="edit-pengguna" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">Edit Pengguna</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{ route('data-pengguna.update', $item->id) }}" method="post">
        @method('PUT')
        @csrf
        <input type="hidden" name="level" value="pejabat">
        <div class="modal-body">
          <div class="form-group">
            <label class="form-control-label" for="name">Nama</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="masukan nama" value="{{ old('name', $item->name) }}" autocomplete="off" required>
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label class="form-control-label" for="nrp">NRP</label>
            <input type="number" name="nrp" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="masukan NRP" value="{{ old('nrp', $item->nrp) }}" autocomplete="off" required>
            @error('nrp')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label class="form-control-label" for="email">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="masukan email" value="{{ old('email', $item->email) }}" autocomplete="off" required>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label class="form-control-label" for="level">Tipe Pengguna</label>
            <select class="form-control" id="level" name="level" required>
              <option {{ $item->level == 'admin' ? 'selected' : '' }} value="admin">Admin</option>
              <option {{ $item->level == 'pejabat' ? 'selected' : '' }} value="pejabat">Pejabat Utama</option>
              <option {{ $item->level == 'instruktur' ? 'selected' : '' }} value="instruktur">Instruktur</option>
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
<div class="modal fade" id="hapus-pengguna-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="hapus-pengguna" aria-hidden="true">
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
          <h4 class="heading mt-4">Hapus Pengguna!</h4>
          <p>Anda yakin ingin menghapus <b>{{ $item->name }}</b>?</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link text-white" data-dismiss="modal">Batal</button>
        <form class="ml-auto" action="{{ route('data-pengguna.destroy', $item->id) }}" method="POST">
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
    // $('#tambah-instruktur').modal('show');
    // $('#tambah-pejabat').modal('show');
  </script>
@endpush