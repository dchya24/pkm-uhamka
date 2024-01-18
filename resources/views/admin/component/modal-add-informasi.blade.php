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
            <form action="{{route('admin.informasi.store')}}" method="POST" name="Tambah_Informasi" enctype="multipart/form-data">

              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="text"
                  class="form-control"
                  id="input_judul"
                  placeholder="Product title"
                  name="judul"
                  aria-label="Product title" />
                <label for="input_judul">Judul</label>
              </div>
              <!-- Komentas -->
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
                  <div class="comment-editor border-0 pb-1" id="description">
                  </div>
                </div>
                <input type="hidden" name="description" id="description">
              </div>

              <!-- Upload file-->
              <div class="justify-content-start col-sm d-flex pt-3">
                <input class="form-control" type="file" name="file" id="formFile" />
              </div>

              <!-- chechk box kirim kemana-->
              <div class="row pt-3">
                <div class="col-sm">
                    <h5>Dikirim kepada :</h5>
                    <input
                      class="form-check-input"
                      value="1"
                      type="checkbox"
                      name="untuk_mahasiswa"
                      id="mahasiswa" />
                    <label class="form-check-label" for="mahasiswa"> Mahasiswa </label>
                    <br>
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="1"
                      name="untuk_penilai_substansi"
                      id="substansi" />
                    <label class="form-check-label" for="substansi">
                      Penilai Substansi
                    </label>
                    <br>
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="1"
                      name="untuk_penilai_administrasi"
                      id="administrasi" />
                    <label class="form-check-label" for="administrasi">
                      Penilai Administrasi
                    </label>
                    <br>
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="1"
                      name="untuk_peninjau"
                      id="peninjau" />
                    <label class="form-check-label" for="peninjau">
                      Peninjau
                    </label>
                    <br>
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="1"
                      name="untuk_warek"
                      id="warek" />
                    <label class="form-check-label" for="warek">
                      Wakil Rektor
                    </label>
                    @csrf
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /Product Information -->
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Tutup
        </button> 
        <button type="button" class="btn btn-primary" onclick="submit()">
          Tambahkan
        </button>
      </div>
    </div>
  </div>
</div>