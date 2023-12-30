@extends('penilai-substansi.template.layout')
@section("title", "Akun | Penilai Substansi")

@section('body')
  <!-- Main Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <h4 class="card-header">Detil Akun</h4>
          <!-- Account -->
          <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
              <img
                src="../../assets/img/avatars/1.png"
                alt="user-avatar"
                class="d-block w-px-120 h-px-120 rounded"
                id="uploadedAvatar" />
              <div class="button-wrapper">
                <form id="formAccountSettings" method="POST" onsubmit="return false">
                  <div class="row mt-2 gy-4">
                    <div class="col-md-6">
                      <div class="form-floating form-floating-outline">
                        <input
                          class="form-control"
                          type="text"
                          name="username"
                          id="username"
                          value="Substansi 1"
                          disabled />
                        <label for="NIM">username</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating form-floating-outline">
                        <input
                          class="form-control"
                          type="text"
                          name="Nama Lengkap"
                          id="Nama Lengkap"
                          value="darsono mangunkusumo"
                          disabled />
                        <label for="Nama Lengkap">Nama Lengkap</label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /Account -->
        </div>
      </div>
    </div>
    <!-- Change Password -->
    <div class="card mb-4">
      <h5 class="card-header">Ubah Password</h5>
      <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
          <div class="row">
            <div class="mb-3 col-md-6 form-password-toggle">
              <div class="input-group input-group-merge">
                <div class="form-floating form-floating-outline">
                  <input class="form-control" type="password" name="currentPassword" id="currentPassword" />
                  <label for="currentPassword">Password Sekarang</label>
                </div>
                <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-4">
            <div class="col-md-6 form-password-toggle">
              <div class="input-group input-group-merge">
                <div class="form-floating form-floating-outline">
                  <input class="form-control" type="password" id="newPassword" name="newPassword" />
                  <label for="newPassword">Password Baru</label>
                </div>
                <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
              </div>
            </div>
            <div class="col-md-6 form-password-toggle">
              <div class="input-group input-group-merge">
                <div class="form-floating form-floating-outline">
                  <input class="form-control" type="password" name="confirmPassword" id="confirmPassword" />
                  <label for="confirmPassword">Konfirmasi password baru</label>
                </div>
                <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
              </div>
            </div>
          </div>

          <div class="mt-4">
            <button class="btn btn-primary" id="ubah-password">Ubah</button>
          </div>
        </form>
      </div>
    </div>
    <!--/ Change Password -->
  </div>
  <!--/ Content -->
@endsection

@section('javascript')
  <!-- Vendors JS -->
  <script src="{{ url('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
  <script src="{{ url('assets/vendor/libs/swiper/swiper.js') }}"></script>

  <!-- Main JS -->
  <script src="{{ url('assets/js/main.js') }}"></script>

  <!-- Page JS -->
  <script src="{{ url('assets/js/dashboards-analytics.js') }}"></script>

  <!-- DataTables  & Plugins -->
  <script src="{{ url('dist2/plugins/datatables/jquery.dataTables.js') }}"></script>
  <script src="{{ url('dist2/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ url('dist2/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ url('dist2/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ url('dist2/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ url('dist2/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ url('dist2/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ url('dist2/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ url('dist2/plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ url('dist2/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ url('dist2/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ url('dist2/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ url('dist2/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>


  <script>
    $(function () {
      $('#example1')
        .DataTable({
          responsive: true,
          lengthChange: false,
          autoWidth: false,
          searching: false
        })
        .buttons()
        .container()
        .appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
@endsection