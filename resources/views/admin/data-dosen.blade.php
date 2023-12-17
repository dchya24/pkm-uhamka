@extends('admin.template.layout')
@section("title", "Admin | Data Dosen Sistem PKM")

@section('body')
  @include('admin.component.data-dosen.add')
  @include('admin.component.data-dosen.import')
  @include('admin.component.data-dosen.update')
  <!-- Main Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      <div class="card-header">
        <div class="row pt-3">
          <div class="col-sm">
            <h4 class="">Data dosen sistem PKM</h4>
          </div>
          <div class="col-sm">                      
            <button
              type="button"
              class="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#Tambah_Akunmahasiswa"
              style="float: right">
              Tambahkan Data Dosen
            </button>

            <button
              type="button"
              class="btn btn-dark "
              data-bs-toggle="modal"
              data-bs-target="#importdatamahasiswa"
              style="float: right">
              Import Data Dosen
            </button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
              <tr class="text-center">
                <th>NIDN/NIP</th>
                <th>Nama Lengkap</th>
                <th>Fakultas</th>
                <th>Program Studi</th>
                <th>Keterangan</th>
                <th>Status akun</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <tr class="text-center">
                <td>1803015012</td>
                <td>Iwan Mahyudin</td>
                <td>Fakultas Teknik</td>
                <td>Teknik Informatika</td>
                <td>Aktif</td>
                <td>
                  <label class="switch">
                    <input type="checkbox" class="switch-input" checked />
                    <span class="switch-toggle-slider">
                      <span class="switch-on"></span>
                      <span class="switch-off"></span>
                    </span>
                    <span class="switch-label"></span>
                  </label>
                </td>
                <td>
                  <button
                    type="button"
                    class="btn btn-sm rounded-pill btn-primary waves-effect waves-light"
                    data-bs-toggle="modal"
                    data-bs-target="#largeModal">
                    Edit
                  </button>

                  <button type="button" class="btn btn-sm rounded-pill btn-danger waves-effect waves-light">
                    Hapus
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--/ Content -->
@endsection

@section('javascript')
  <!-- Vendors JS -->
  <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>

  <!-- Main JS -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <!-- Page JS -->
  <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

  <!-- DataTables  & Plugins -->
  <script src="{{ asset('dist2/plugins/datatables/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('dist2/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('dist2/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('dist2/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('dist2/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('dist2/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('dist2/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('dist2/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('dist2/plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('dist2/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('dist2/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('dist2/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('dist2/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

  <!-- Page JS -->
  <script src="{{ asset('assets/js/forms-editors.js') }}"></script>

  <!-- Bootstrap Switch -->
  <script src="{{ asset('dist2/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
@endsection