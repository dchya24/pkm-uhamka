  <!--modal Edit Akun-->

  <div class="modal fade" id="edit-administrator" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel3">Ubah Data Akun</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Product Information -->
          <div class="mb-4">
            <div class="card-body">
              <form action="{{ route('admin.manajemen-akun.administrator.update', 100) }}" method="POST" name="edit_administrator" id="edit_administrator">
                <div class="form-floating form-floating-outline mb-4">
                  <input
                    type="text"
                    class="form-control"
                    id="edit_username"
                    placeholder="Product title"
                    name="username"
                    aria-label="Product title"
                    value="iwan mahyudin" />
                  <label for="ecommerce-product-name">Username</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                  <input
                    type="text"
                    class="form-control"
                    id="edit_nama"
                    placeholder="Product title"
                    name="nama"
                    aria-label="Product title"
                    value="1234567" />
                  <label for="ecommerce-product-name">Nama</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                  <input
                    type="password"
                    class="form-control"
                    id="edit_password"
                    placeholder="Type here when change password"
                    name="password"
                    aria-label="Product title"
                    />
                  <label for="ecommerce-product-name">Password</label>
                </div>
                {{ csrf_field() }}
                @method("put")
              </form>
            </div>
          </div>
          <!-- /Product Information -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary" onclick="submitEdit()">Ubah</button>
        </div>
      </div>
    </div>
  </div>