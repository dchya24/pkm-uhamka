<!-- Modal Tambah data -->
<div class="modal fade" id="Tambah_Akunmahasiswa" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel3">Tambahkan Data Dosen</h4>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-4">
          <div class="card-body">
            <div class="form-floating form-floating-outline mb-4">
              <input
                type="number"
                class="form-control"
                aria-label="Product title" />
              <label>NIDN/NIP</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
              <input
                type="text"
                class="form-control"
                aria-label="Product title" />
              <label>Nama Lengkap</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
              <input
                type="text"
                class="form-control"
                aria-label="Product title" />
              <label>Fakultas</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
              <input
                type="text"
                class="form-control"
                aria-label="Product title" />
              <label>Program Studi</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
              <select
              id="select2Basic"
              class="select2 form-select form-select-lg"
              data-allow-clear="true">
              <option value="AK">Tidak Aktif</option>
              <option value="HI">Aktif</option>
            </select>
              <label>Keterangan</label>
            </div>
          </div>
        </div>
        <!-- /Product Information -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Tutup
        </button>
        <button type="button" class="btn btn-primary">Tambah</button>
      </div>
    </div>
  </div>
</div>