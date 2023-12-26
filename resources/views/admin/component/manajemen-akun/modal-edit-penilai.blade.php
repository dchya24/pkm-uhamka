<!--modal-->
<div class="modal fade" id="edit-penilai" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel3">Ubah Data Akun</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Product Information -->
        <div class="mb-4">
          <div class="card-body">
            <form action="{{ route('admin.manajemen-akun.penilai.update', 1000)}}" class="d-inline" method="POST" name="edit_penilai" id="edit_penilai">
              <div class="form-floating form-floating-outline mb-4">
                <input type="text" class="form-control" name="username" id="edit_username" value="" />
                <label>Username</label>
              </div>
              <div class="form-floating form-floating-outline mb-4">
                  <input type="text" class="form-control" name="nama" id="edit_nama" value="" />
                  <label>Nama Lengkap</label>
                </div>
              <div class="form-floating form-floating-outline mb-4">
                <input type="password" class="form-control" name="password" value="" />
                <label for="ecommerce-product-name">Password</label>
              </div>
              <div class="form-floating form-floating-outline mb-4">
                <select
                  id="edit_jenis_penilai"
                  class="select2 form-select form-select-lg"
                  name="jenis_penilai"
                  data-allow-clear="true">
                  <option value="1">Penilai Administrasi</option>
                  <option value="2">Penilai Substansi</option>
                </select>
                <label>Jenis Penilai</label>
              </div>
              @method("PUT")
              @csrf
            </form>
          </div>
        </div>
        <!-- /Product Information -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" onclick="submitEdit()">Ubah</button>
      </div>
    </div>
  </div>
</div>