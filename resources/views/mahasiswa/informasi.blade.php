@extends('mahasiswa.template.layout')
@section("title", "Informasi | Mahasiswa")

@section('body')
  <!-- Main Content -->
  <div class="container-xxl flex-grow-0 container-p-y">
    <!-- Activity Timeline -->
    <div class="col">
      <div class="card h-100">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <div class="col-lg">
              <h4 class="">Informasi</h4>
            </div>
            <div class="col-lg-5 text-end justify-content-end">
              <a href="https://www.youtube.com/watch?v=dxIG9JtakBM&ab_channel=WeirdGenius" target="_blank">
                <button class="btn btn-primary">Tutorial Website</button>
              </a>
            </div>
          </div>
        </div>
        <div class="card-body pt-4 pb-1">
          <ul class="timeline card-timeline mb-0">
            <li class="timeline-item timeline-item-transparent">
              <span class="timeline-point timeline-point-primary"></span>
              <div class="timeline-event">
                <div class="timeline-header mb-1">
                  <h6 class="mb-2">Pemberitahuan pembukaan usulan ke-2</h6>
                  <small class="text-muted">20 Desember 2023</small>
                </div>
                <p class="mb-2">
                  Bagi yang substansi 1 mendapat Minor, dapat mengusulkan kembali ke usulan-2
                </p>
              </div>
            </li>
            <li class="timeline-item timeline-item-transparent">
              <span class="timeline-point timeline-point-info"></span>
              <div class="timeline-event">
                <div class="timeline-header mb-1">
                  <h6 class="mb-2">Pemberitahuan pembukaan usulan ke-2</h6>
                  <small class="text-muted">30 September 2023</small>
                </div>
                <p class="mb-2">
                  Silahkan menajukan usulan ke-1, sampai batas waktu 07 September 2022 Waktu : 18.00 WIB
                </p>
              </div>
            </li>
            <li class="timeline-item timeline-item-transparent border-transparent">
              <span class="timeline-point timeline-point-warning"></span>
              <div class="timeline-event pb-1">
                <div class="timeline-header mb-1">
                  <h6 class="mb-2">Tutorial Website</h6>
                  <small class="text-muted">20 Juni 2023</small>
                </div>
                <p class="mb-2">
                  <a href="https://www.youtube.com/watch?v=dxIG9JtakBM&ab_channel=WeirdGenius" target="_blank"
                    >Klick Disini</a
                  >
                </p>
                <div class="d-flex">
                  <a href="javascript:void(0)" class="me-3">
                    <img src="../../assets/img/icons/misc/pdf.png" alt="PDF image" width="20" class="me-2" />
                    <span class="fw-medium">presentation.pdf</span>
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Activity Timeline -->
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

  <!-- Page JS -->
  <script src="{{ url('dist2/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
  <script src="{{ url('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>

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