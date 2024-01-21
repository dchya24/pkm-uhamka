<!--modal ubah data-->
<div class="modal fade" id="edit_dosen" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel3">Ubah Data Dosen</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-4">
          <div class="card-body">
            <form 
              action="{{ route('admin.data-dosen.update', 12123123) }}" 
              method="POST" 
              name="edit_dosen" 
              id="edit_dosen">
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="number"
                  class="form-control"
                  aria-label="Product title" 
                  name="nidn"
                  id="edit_nidn"
                  value="1803015016"/>
                <label>NIDN/NIP</label>
              </div>
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="text"
                  class="form-control"
                  aria-label="Product title" 
                  name="nama"
                  id="edit_nama"
                  value="Iwan Mahyudin"/>
                <label>Nama Lengkap</label>
              </div>
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="text"
                  class="form-control"
                  aria-label="Product title" 
                  name="fakultas"
                  id="edit_fakultas"
                  value="Fakultas Teknik"/>
                <label>Fakultas</label>
              </div>
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="text"
                  class="form-control"
                  aria-label="Product title" 
                  name="prodi"
                  id="edit_prodi"
                  value="Teknik Informatika"/>
                <label>Program Studi</label>
              </div>
              <div class="form-floating form-floating-outline mb-4">
                <select
                  class="select2 form-select form-select-lg"
                  name="keterangan"
                  id="edit_keterangan"
                  data-allow-clear="true">
                  <option value="0">Tidak Aktif</option>
                  <option value="1" selected>Aktif</option>
                </select>
                <label>Keterangan</label>
              </div>
              {{ csrf_field() }}
              @method("PUT")
            </form>
          </div>
        </div>
        <!-- /Product Information -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" onclick="submitEdit(event)">Ubah</button>
      </div>
    </div>
  </div>
</div>