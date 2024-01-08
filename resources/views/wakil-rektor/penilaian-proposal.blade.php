@extends('wakil-rektor.template.layout')
@section("title", "Penilaian | Wakil Rektor")

@section('body')
<!-- Main Content -->
<div class="container-xxl flex-grow-0 container-p-y">
  <div class="card mb-4">
    <div class="card-header d-flex flex-wrap justify-content-between gap-3">
      <div class="card-title mb-0 me-1">
        <h5 class="mb-1">Usulan yang akan dinilai!</h5>
        <p class="mb-0">Tekan detail jika ingin menilai!</p>
      </div>
      <div class="d-flex justify-content-md-end align-items-center gap-3 flex-wrap">
        <form action="" name='filter-status'>
          <select 
            id="select2_course_select" 
            class="select2 form-select" 
            name="status"
            onchange="document.forms['filter-status'].submit()">
            <option value="" selected>Belum direkomendasikan</option>
            <option value="internal" @if(isset($_GET['status']) && $_GET['status'] =="internal") selected @endif>Internal</option>
            <option value="belmawa" @if(isset($_GET['status']) && $_GET['status'] =="belmawa") selected @endif>Belmawa</option>
          </select>
        </form>
      </div>
    </div>
    <div class="card-body">
      <div class="row gy-4 mb-4">
        @forelse ($usulan as $item)
          <div class="col-sm-7 col-lg-3">
            <div class="card p-2 shadow-none border">
              <div class="card-body p-3 pt-2">
                <h6>{{$item->ketuaKelompok->nama}}</h6>
                <p class="">{{$item->judul}}</p>
                <p>{{ $item->jenisPkm->singkatan }}</p>
                <div class="d-flex justify-content-between align-items-center mb-3">
                  @if($item->status_rekomendasi === null)
                    <span class="badge rounded-pill bg-label-primary">Belum dinilai</span>
                  @elseif($item->status_rekomendasi === "belmawa")
                    <span class="badge rounded-pill bg-label-success">Belmawa</span>
                  @elseif($item->status_rekomendasi === "internal")
                    <span class="badge rounded-pill bg-info">Internal</span>
                  @endif
                </div>
                <div
                  class="d-flex flex-column flex-md-row gap-3 text-nowrap flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                  <a
                    class="w-100 btn btn-outline-primary d-flex align-items-center"
                    href="{{ route('wakil-rektor.penilaian.detail', $item->id) }}">
                    <span class="me-1">Detail</span><i class="mdi mdi-arrow-right lh-1 scaleX-n1-rtl"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        @empty
          <div class="col-sm-7 col-lg-12">
            <div class="card p-2 shadow-none">
              <div class="card-body p-3 pt-2">
                <h3 class="fw-bold text-center">Tidak ada Usulan</h3>
              </div>
            </div>
          </div>
        @endforelse
      </div>

      {{-- <nav aria-label="Page navigation" class="d-flex align-items-center justify-content-center">
        <ul class="pagination">
          <li class="page-item prev">
            <a class="page-link" href="javascript:void(0);"><i class="tf-icon mdi mdi-chevron-left"></i></a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="javascript:void(0);">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0);">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0);">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0);">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0);">5</a>
          </li>
          <li class="page-item next">
            <a class="page-link" href="javascript:void(0);"
              ><i class="tf-icon mdi mdi-chevron-right"></i
            ></a>
          </li>
        </ul>
      </nav> --}}
      <nav aria-label="Page navigation" class="d-flex align-items-center justify-content-center">
        {{ $usulan->links() }}
      </nav>
    </div>
  </div>
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