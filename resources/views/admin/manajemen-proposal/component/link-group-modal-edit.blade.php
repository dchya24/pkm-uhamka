<!--modal ubah data-->
<div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel3">Ubah Link grup</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-4">
          <div class="card-body">
            <form action="" method="POST" name="edit-link-group">
              <div class="form-floating form-floating-outline mb-4">
                <input
                  type="text"
                  name="link_group"
                  id="edit_link_group"
                  class="form-control"
                  aria-label="Product title" 
                  value="www.dsadasdassda.com"/>
                <label>Link grup</label>
              </div>
              <div class="form-floating form-floating-outline mb-4">
                <select
                  id="edit_rekomendasi"
                  name="rekomendasi"
                  class="select2 form-select form-select-lg"
                  data-allow-clear="true">
                  <option value="internal">Internal</option>
                  <option value="belmawa">Belmawa</option>
                </select>
              </div>
              @csrf
              @method("PUT")
            </form>
          </div>
        </div>
        <!-- /Product Information -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
        <button 
          type="submit" 
          class="btn btn-primary"
          onclick="document.forms['edit-link-group'].submit()">
          Ubah
        </button>
      </div>
    </div>
  </div>
</div>