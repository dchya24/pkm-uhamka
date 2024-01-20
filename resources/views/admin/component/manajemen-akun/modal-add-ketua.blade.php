<!-- Modal Tambah Akun -->
<div class="modal fade" id="tambah-ketua-kelompok" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel3">Tambahkan Akun Mahasiswa</h4>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-4">
          <div class="card-body">
            <form action="{{ route('admin.manajemen-akun.ketua-kelompok.store') }}" method="POST" id="add-ketua-kelompok">
              <div class="form-floating form-floating-outline mb-4">
                <select
                  name="nim"
                  class="select2"
                  id="select2-nim" required>
                  <option value="">NIM - NAMA</option>
                </select>
                <label>NIM</label>
              </div>
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="password"
                  class="form-control"
                  name="password"
                  aria-label="Product title" required />
                <label>Password</label>
              </div>
              @csrf
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