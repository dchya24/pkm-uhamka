<!-- Modal edit skema -->
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel3">Edit Skema Pkm</h4>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body pt-3">
        <form action="" method="POST" name="edit-jenis-pkm" enctype="multipart/form-data">
          <!-- Product Information -->
          <div class="pb-3">
            <div class="card-body">
              <div class="form-floating form-floating-outline">
                <input
                  type="text"
                  class="form-control"
                  id="edit_nama_skema"
                  placeholder="Product title"
                  name="nama_skema"
                  aria-label="Product title" 
                  value="Arficial intelegent"/>
                <label for="ecommerce-product-name">Nama Skema Pkm</label>
              </div>
            </div>
          </div>
          <div class="pb-3">
            <div class="card-body">
              <div class="form-floating form-floating-outline">
                <input
                  type="text"
                  class="form-control"
                  id="edit_singkatan"
                  placeholder="Product title"
                  name="singkatan"
                  aria-label="Product title" 
                  value="PKM-AI"/>
                <label for="ecommerce-product-name">Singkatan</label>
              </div>
            </div>
          </div>

          <div class="pb-3">
            <div class="card-body">
              <div class="form-floating form-floating-outline">
                <input class="form-control" type="file" id="formFile" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="form_substansi" />
                <label >Form substansi -> Excel only</label>
                <a href="/assets/excel/Penilaian.xlsx" target="_blank">
                    FormSubstnasi_(NIM MAHASISWA)_JUDUL.xls
                </a>
              </div>
            </div>
          </div>

          <div class="pb-3">
            <div class="card-body">
              <div class="form-floating form-floating-outline">
                <input class="form-control" type="file" id="formFile" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="form_administrasi" />
              <label >Form administrasi -> Excel only</label>
              <a href="/assets/excel/Penilaian.xlsx" target="_blank">
                FormAdministrasi_(NIM MAHASISWA)_JUDUL.xls
            </a>
              </div>
            </div>
          </div>

          <div class="pb-3">
            <div class="card-body">
              <div class="form-floating form-floating-outline">
                <input class="form-control" type="file" id="formFile" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="form_peninjau" />
              <label >Form peninjau -> Excel only</label>
              <a href="/assets/excel/Penilaian.xlsx" target="_blank">
                FormPeninjau_(NIM MAHASISWA)_JUDUL.xls
            </a>
              </div>
            </div>
          </div>
          <input type="hidden" name="id" id="edit_id" value="">
          @csrf
          @method("PUT")
        </form>
        <!-- /Product Information -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Tutup
        </button>
        <button type="button" class="btn btn-primary" onclick="document.forms['edit-jenis-pkm'].submit()">Simpan</button>
      </div>
    </div>
  </div>
</div>