<!-- Modal Tambah Prodi -->
<div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel3">Tambahkan Sertifikat</h4>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="./upload" class="dropzone needsclick" id="dropzone-multi" >
          <div class="dz-message needsclick">
            Upload semua file sertifikat disni
            <span class="note needsclick"
              >(Hanya tipe file PDF)</span
            >
          </div>
          <div class="fallback">
            <input name="file" type="file" />
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Tutup
        </button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>