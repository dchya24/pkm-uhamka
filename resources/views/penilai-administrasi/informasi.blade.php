@extends('penilai-administrasi.template.layout')
@section("title", "Informasi | Penilai Administrasi")

@section('body')
  <!-- Main Content -->
  <div class="container-xxl flex-grow-0 container-p-y">
    <!-- Activity Timeline -->
    <div class="col">
      <div class="card h-100">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h5 class="mb-1">Informasi</h5>
          </div>
        </div>
        <div class="card-body pt-4 pb-1">
          <ul class="timeline card-timeline mb-0">
            <li class="timeline-item timeline-item-transparent">
              <span class="timeline-point timeline-point-info"></span>
              <div class="timeline-event">
                <div class="timeline-header mb-1">
                  <h6 class="mb-2">Create youtube video for next product 😎</h6>
                  <small class="text-muted">Tomorrow</small>
                </div>
                <p class="mb-2">Product introduction and details video</p>
                <div class="d-flex">
                  <a href="https://www.youtube.com/@pixinvent1515" target="_blank" class="text-truncate">
                    <span class="badge badge-center rounded-pill bg-danger w-px-20 h-px-20 me-2">
                      <i class="mdi mdi-play text-white"></i>
                    </span>
                    <span class="fw-medium">https://www.youtube.com/@pixinvent1515</span>
                  </a>
                </div>
              </div>
            </li>
            <li class="timeline-item timeline-item-transparent">
              <span class="timeline-point timeline-point-info"></span>
              <div class="timeline-event">
                <div class="timeline-header mb-1">
                  <h6 class="mb-2">Received payment from usa client 😍</h6>
                  <small class="text-muted">January, 18</small>
                </div>
                <p class="mb-2">Received payment $1,490 for banking ios app</p>
              </div>
            </li>
            <li class="timeline-item timeline-item-transparent">
              <span class="timeline-point timeline-point-info"></span>
              <div class="timeline-event pb-1">
                <div class="timeline-header mb-1">
                  <h6 class="mb-2">Meeting with joseph morgan for next project</h6>
                  <small class="text-muted">April, 23</small>
                </div>
                <p class="mb-2">Meeting Video call on zoom at 9pm</p>
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