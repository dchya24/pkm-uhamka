<!-- Modal Tambah Akun -->
<div class="modal fade" id="modal-add-warek" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel3">Tambahkan Akun Wakil Rektor</h4>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-4">
          <div class="card-body">
            <form action="{{ route("admin.manajemen-akun.wakil-rektor.store") }}" method="POST" name="add-warek" id="add-warek">
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="text"
                  class="form-control"
                  name="username"
                  aria-label="Product title" />
                <label>Username</label>
              </div>
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="text"
                  class="form-control"
                  name="nama"
                  aria-label="Product title" />
                <label>Nama</label>
              </div>
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="password"
                  class="form-control"
                  name="password"
                  aria-label="Product title" />
                <label>Password</label>
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
        <button type="button" class="btn btn-primary" onclick="submitAdd()">Tambah</button>
      </div>
    </div>
  </div>
</div>