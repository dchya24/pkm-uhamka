<!--modal ubah data-->
<div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel3">Ubah Data Mahasiswa</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-4">
          <div class="card-body">
            <div class="form-floating form-floating-outline mb-4">
              <input
                type="number"
                class="form-control"
                aria-label="Product title" 
                value="1803015016"/>
              <label>NIM</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
              <input
                type="text"
                class="form-control"
                aria-label="Product title" 
                value="Iwan Mahyudin"/>
              <label>Nama Lengkap</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
              <input
                type="text"
                class="form-control"
                aria-label="Product title" 
                value="Fakultas Teknik"/>
              <label>Fakultas</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
              <input
                type="text"
                class="form-control"
                aria-label="Product title" 
                value="Teknik Informatika"/>
              <label>Program Studi</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
              <select
              id="select2Basic"
              class="select2 form-select form-select-lg"
              data-allow-clear="true">
              <option value="AK">Tidak Aktif</option>
              <option value="HI" selected>Aktif</option>
            </select>
              <label>Keterangan</label>
            </div>
          </div>
        </div>
        <!-- /Product Information -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Ubah</button>
      </div>
    </div>
  </div>
</div>