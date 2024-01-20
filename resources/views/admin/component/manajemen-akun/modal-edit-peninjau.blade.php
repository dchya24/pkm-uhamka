<!--modal-->
<div class="modal fade" id="modal-edit-peninjau" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel3">Ubah Password Peninjau</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Product Information -->
        <div class="mb-4">
          <div class="card-body">
            <form 
              action="{{route('admin.manajemen-akun.peninjau.update-password', 1000)}}"
              name="edit_peninjau"
              method="POST"
              id="edit_peninjau"
              >
              <div class="form-floating form-floating-outline mb-4">
                <input type="password" class="form-control" name="password"  placeholder="Password" required />
                <label for="ecommerce-product-name">Password</label>
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
        <button type="button" class="btn btn-primary" onclick="submitEdit(event)">Ubah</button>
      </div>
    </div>
  </div>
</div>