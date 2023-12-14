<!-- Modal Tambah Informasi-->
<div class="modal fade" id="Tambah_Informasi" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" >Tambahkan Informasi</h4>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Product Information -->
        <div class="mb-4">
          <div class="card-body">
            <div class="form-floating form-floating-outline mb-4">
              <input
                type="text"
                class="form-control"
                id="ecommerce-product-name"
                placeholder="Product title"
                name="productTitle"
                aria-label="Product title" />
              <label for="ecommerce-product-name">Judul</label>
            </div>
            <!-- Komentas -->
            <div id="full-editor">
            </div>

            <!-- Upload file-->
            <div class="justify-content-start col-sm d-flex pt-3">
              <input class="form-control" type="file" id="formFile" />
            </div>

            <!-- chechk box kirim kemana-->
            <div class="row pt-3">
              <div class="col-sm">
                <h5>Dikirim kepada :</h5>
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault"> Mahasiswa </label>
                <br>
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">
                  Penilai Substansi
                </label>
                <br>
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">
                  Penilai Administrasi
                </label>
                <br>
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">
                  Peninjau
                </label>
                <br>
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">
                  Wakil Rektor
                </label>
              </div>
            </div>
          </div>
        </div>
        <!-- /Product Information -->
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Tutup
        </button> 
        <a href="A_Buatinformasi.html">
        <button type="button" class="btn btn-primary">Tambahkan</button>
      </a>
      </div>
    </div>
  </div>
</div>