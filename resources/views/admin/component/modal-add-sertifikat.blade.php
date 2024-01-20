<!-- Modal Tambah Prodi -->
<div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <form 
        action="{{route('admin.sertifikat.store')}}" 
        method='POST' 
        enctype="multipart/form-data"
        id="add-sertifikat"
        name="add-sertifikat">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel3">Tambahkan Sertifikat</h4>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{-- <div class="dz-message needsclick">
            Upload semua file sertifikat disni
            <span class="note needsclick">
              (Hanya tipe file PDF)
            </span>
          </div> --}}
          <div class="form-control">
            <input name="file[]" type="file" id="sertifikat" multiple required />
          </div>
          @csrf
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Tutup
          </button>
          <button 
            type="button"
            onclick="submitAdd(event)" 
            class="btn btn-primary">
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>
</div>