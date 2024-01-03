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

        <form class="mb-4" method="POST" action="" name='update_informasi' enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            <div class="form-floating form-floating-outline mb-4">
              <input
                type="text"
                class="form-control"
                name="judul"
                id="edit_judul"
                aria-label="Product title" />
              <label for="ecommerce-product-name">Judul</label>
            </div>

            <!-- Comment -->
            <div>
              <div class="form-control p-0 pt-1">
                <div class="comment-toolbar-edit border-0 border-bottom">
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
                <div class="comment-editor border-0 pb-1" id="edit_description">
                </div>
                <input type="hidden" name="description" id="edit_description">
              </div>
            </div>

            <!-- Upload file-->
            <div class="justify-content-start col-sm  pt-3">
              <input class="form-control" type="file" name="file" id="formFile" />
              
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
                  value="1"
                  id="edit_untuk_mahasiswa"
                  name="untuk_mahasiswa" />
                <label class="form-check-label" for="edit_untuk_mahasiswa"> Mahasiswa </label>                            
                <br>
                <input
                  class="form-check-input"
                  type="checkbox"
                  value="1"
                  id="edit_untuk_substansi"
                  name="untuk_substansi" />
                <label class="form-check-label" for="edit_untuk_substansi">
                  Penilai Substansi
                </label>
                <br>
                <input
                  class="form-check-input"
                  type="checkbox"
                  value="1"
                  id="edit_untuk_administrasi"
                  name="untuk_administrasi" />
                <label class="form-check-label" for="edit_untuk_administrasi">
                  Penilai Administrasi
                </label>
                <br>
                <input
                  class="form-check-input"
                  type="checkbox"
                  value="1"
                  id="edit_untuk_peninjau"
                  name="untuk_peninjau" />
                <label class="form-check-label" for="edit_untuk_peninjau">
                  Peninjau
                </label>
                <br>
                <input
                  class="form-check-input"
                  type="checkbox"
                  value="1"
                  id="edit_untuk_warek"
                  name="untuk_warek" />
                <label class="form-check-label" for="edit_untuk_warek">
                  Wakil Rektor
                </label>
              </div>
            </div>
          </div>
        </form>
        <!-- /Product Information -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
        <button onclick="submitEdit()" type="button" class="btn btn-primary">Ubah</button>
      </div>
    </div>
  </div>
</div>