<!-- Modal Tambah data -->
<div class="modal fade" id="Tambah_Akunmahasiswa" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel3">Tambahkan Data Mahasiswa</h4>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <form 
        action="{{ route('admin.data-mahasiswa.store')}}" 
        method="POST"
        name="form-add"
        id="form-add">
        <div class="modal-body">
          <div class="mb-4">
            <div class="card-body">
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="number"
                  class="form-control"
                  name="nim"
                  aria-label="Product title" required />
                <label>NIM</label>
              </div>
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="text"
                  class="form-control"
                  name="nama"
                  aria-label="Product title" required />
                <label>Nama Lengkap</label>
              </div>
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="text"
                  class="form-control"
                  name="fakultas"
                  aria-label="Product title" required />
                <label>Fakultas</label>
              </div>
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="text"
                  class="form-control"
                  name="prodi"
                  aria-label="Product title" required/>
                <label>Program Studi</label>
              </div>
              <div class="form-floating form-floating-outline mb-4">
                <select
                  id="select2Basic"
                  class="select2 form-select form-select-lg"
                  name="keterangan"
                  data-allow-clear="true" required>
                  <option value="1">Aktif</option>
                  <option value="0">Tidak Aktif</option>
                </select>
                <label>Keterangan</label>
              </div>
            </div>
          </div>
          <!-- /Product Information -->
        </div>
        <div class="modal-footer">
          {{ csrf_field() }}
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Tutup
          </button>
          <button type="button" onclick="submitAdd(event)" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
