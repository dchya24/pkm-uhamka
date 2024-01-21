<!-- Modal import data -->
<div class="modal fade" id="importdatamahasiswa" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel3">Import Data Dosen</h4>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-4">
          <div class="card-body">
            <form 
              action="{{route('admin.data-dosen.import')}}" 
              method="POST" 
              name="import-dosen"
              enctype="multipart/form-data">
              <div class="form-floating form-floating-outline mb-4">
                <input class="form-control" type="file" id="formFile" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" 
                name="data_dosen" required />
              </div>
              @csrf
            </form>
          </div>
        </div>
        <!-- /Product Information -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
          Tutup
        </button>
        <button type="button" class="btn btn-primary" onclick="importData(event)">Import</button>
      </div>
    </div>
  </div>
</div>