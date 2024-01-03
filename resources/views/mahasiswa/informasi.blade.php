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
            @foreach ($informasi as $item)
                <li class="timeline-item timeline-item-transparent  @if($loop->last) border-transparent @endif">
                  <span class="timeline-point timeline-point-primary"></span>
                  <div class="timeline-event">
                    <div class="timeline-header mb-1">
                      <h6 class="mb-2">{{ $item->judul }}</h6>
                      <small class="text-muted">{{ $item->created_at->locale('id-ID')->format('d M Y') }}</small>
                    </div>
                    <p class="mb-2">
                      {!! $item->description !!}
                    </p>
                    @if($item->file)
                      <div class="d-flex">
                        <a href="{{ url($item->file) }}" class="me-3" download>
                          <img src="{{asset('assets/img/icons/misc/pdf.png')}}" alt="PDF image" width="20" class="me-2" />
                          <span class="fw-medium">Download</span>
                        </a>
                      </div>
                    @endif
                  </div>
                </li>
            @endforeach
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