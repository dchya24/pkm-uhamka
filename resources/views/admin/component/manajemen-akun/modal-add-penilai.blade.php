<!-- Modal Tambah Akun -->
<div class="modal fade" id="tambah-penilai" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel3">Tambahkan Akun Penilai Substansi</h4>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-4">
          <div class="card-body">
            <form action="{{ route("admin.manajemen-akun.penilai.store")}}" method="post" id="add-penilai">
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="text"
                  class="form-control"
                  name="username"
                  id="username"
                  aria-label="Product title" required />
                <label>Username</label>
              </div>
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="text"
                  class="form-control"
                  name="nama"
                  id="nama"
                  aria-label="Product title" required />
                <label>Nama Lengkap</label>
              </div>
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="password"
                  class="form-control"
                  name="password"
                  aria-label="Product title" />
                <label>Password</label>
              </div>
              <div class="form-floating form-floating-outline mb-4">
                <select
                  id="jenis_penilai"
                  class="select2 form-select form-select-lg"
                  name="jenis_penilai"
                  data-allow-clear="true" required>
                  <option value="1">Penilai Administrasi</option>
                  <option value="2">Penilai Substansi</option>
                </select>
                <label>Jenis Penilai</label>
              </div>
              {{ csrf_field() }}
            </form>
          </div>
        </div>
        <!-- /Product Information -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Tutup
        </button>
        <button type="button" class="btn btn-primary" onclick="submitAdd(event)">Tambah</button>
      </div>
    </div>
  </div>
</div>