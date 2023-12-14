<!-- Modal Edit Informasi-->
<div class="modal fade" id="Edit_Informasi" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel3">Ubah Informasi</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Product Information -->
        <div class="mb-4">
          <div class="card-body">
            <div class="form-floating form-floating-outline mb-4">
              <input
                type="text"
                class="form-control"
                name="Ubah_A_Judulinformasi"
                aria-label="Product title"
                value="Iwan Mahyudin" />
              <label for="ecommerce-product-name">Judul</label>
            </div>

            <!-- Comment -->
            <div>
              <div class="form-control p-0 pt-1">
                <div class="comment-toolbar border-0 border-bottom">
                  <div class="d-flex justify-content-start">
                    <span class="ql-formats me-0">
                      <button class="ql-bold"></button>
                      <button class="ql-italic"></button>
                      <button class="ql-underline"></button>
                      <button class="ql-list" value="ordered"></button>
                      <button class="ql-list" value="bullet"></button>
                      <button class="ql-link"></button>
                    </span>
                  </div>
                </div>
                <div class="comment-editor border-0 pb-1" id="ecommerce-category-description">
                  <h6>iwanslowajj@gmail.com</h6>
                </div>
              </div>
            </div>

            <!-- Upload file-->
            <div class="justify-content-start col-sm  pt-3">
              <input class="form-control" type="file" id="formFile" />
              
              <a href="">
                Modulpkm.pdf
              </a>
              <hr>
            </div>

            <!-- chechk box kirim kemana-->
            <div class="row pt-3">
              <div class="col-sm">
                <h5>Dikirim kepada :</h5>
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault" 
                  checked/>
                <label class="form-check-label" for="flexCheckDefault"> Mahasiswa </label>                            
                <br>
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault" 
                  checked/>
                <label class="form-check-label" for="flexCheckDefault">
                  Penilai Substansi
                </label>
                <br>
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault" 
                  checked/>
                <label class="form-check-label" for="flexCheckDefault">
                  Penilai Administrasi
                </label>
                <br>
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault" 
                  checked/>
                <label class="form-check-label" for="flexCheckDefault">
                  Peninjau
                </label>
                <br>
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault"
                  checked />
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
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
        <a href="A_Buatinformasi.html">
        <button href type="button" class="btn btn-primary">Ubah</button>
      </a> 
      </div>
    </div>
  </div>
</div>