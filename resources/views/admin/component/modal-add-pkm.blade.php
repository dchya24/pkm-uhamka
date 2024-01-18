
  <!-- Modal Tambah Prodi -->
  <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form action="{{route('admin.skema-pkm.store')}}" method="POST" name="add-jenis-pkm" enctype="multipart/form-data">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel3">Tambahkan Skema Pkm</h4>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"></button>
        </div>
        <div class="modal-body pt-3">
          <!-- Product Information -->
          <div class="pb-3">
            <div class="card-body">
              <div class="form-floating form-floating-outline">
                <input
                  type="text"
                  class="form-control"
                  id="ecommerce-product-name"
                  placeholder="Product title"
                  name="nama_skema"
                  aria-label="Product title" required />
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
                  id="ecommerce-product-name"
                  placeholder="Product title"
                  name="singkatan"
                  aria-label="Product title" required  />
                <label for="ecommerce-product-name">Singkatan</label>
              </div>
            </div>
          </div>

          <div class="pb-3">
            <div class="card-body">
              <div class="form-floating form-floating-outline">
                <input class="form-control" type="file" id="formFile" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="form_substansi" required  />
                <label >Form substansi -> Excel only</label>
              </div>
            </div>
          </div>

          <div class="pb-3">
            <div class="card-body">
              <div class="form-floating form-floating-outline">
                <input class="form-control" type="file" id="formFile" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="form_administrasi" required  />
              <label >Form administrasi -> Excel only</label>
              </div>
            </div>
          </div>

          <div class="pb-3">
            <div class="card-body">
              <div class="form-floating form-floating-outline">
                <input class="form-control" type="file" id="formFile" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="form_peninjau" required  />
              <label >Form peninjau -> Excel only</label>
              </div>
            </div>
          </div>
          @csrf
          <!-- /Product Information -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Tutup
          </button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>