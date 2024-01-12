@extends('penilai-administrasi.template.layout')
@section("title", "Beranda | Penilai Administrasi")

@section('body')
<!-- Main Content -->
<div class="container-xxl flex-grow-0 container-p-y">
  <!-- Keterangan Semua Proposal  -->
  <div class="col-md-12">
    <div class="card">
      <div class="d-flex row">
        <div class="col-md-8">
          <div class="card-body">
            <h4 class="card-title">Selamat Datang 🎉</h4>
            <span class="">Nama Tim Penilai</span>
            <div class="d-flex justify-content-between pt-3 flex-wrap">
              <div class="d-flex align-items-center gap-3">
                <div class="avatar avatar-md">
                  <div class="avatar-initial bg-label-primary rounded">
                    <i class="mdi mdi-laptop mdi-36px"></i>
                  </div>
                </div>
                <div class="content-right">
                  <p class="mb-0 fw-medium" style="font-size: 1rem">Usulan belum dinilai</p>
                  <span class="text-primary mb-0 display-6" style="font-size: 1.3rem">{{$countBelumDinilai}}</span>
                </div>
              </div>
              <div class="d-flex align-items-center gap-3">
                <div class="avatar avatar-md">
                  <div class="avatar-initial bg-label-success rounded">
                    <i class="mdi mdi-check-decagram-outline mdi-36px"></i>
                  </div>
                </div>
                <div class="content-right">
                  <p class="mb-0 fw-medium" style="font-size: 1rem">Sudah diinilai</p>
                  <span class="text-success mb-0 display-6" style="font-size: 1.3rem">{{$countDataDiNilai}}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 text-center text-md-end order-1 order-md-2">
          <div class="card-body pb-0 px-0 px-md-4 ps-0">
            <img
              src="../../assets/img/illustrations/illustration-john-light.png"
              height="180"
              alt="View Profile"
              data-app-light-img="illustrations/illustration-john-light.png"
              data-app-dark-img="illustrations/illustration-john-dark.png" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Keterangan Semua Proposal End  -->

  <br />

  <!-- Table Proposal  -->
  <div class="card">
    <div class="card-body">
      <div class="table-responsive text-nowrap">
        <table id="example1" class="table table-bordered table-striped text-center">
          <thead>
            <tr class="text-bold">
              <th>SKEMA PKM</th>
              <th>KET.ADMINISTRASI</th>
              <th>USULAN</th>
              <th>AKSI</th>
              <th>JUDUL</th>
              <th>PROPOSAL</th>
              <th>LEMBAR BIODATA DOSEN</th>
              <th>LEMBAR KELOMPOK</th>
              <th>LEMBAR PENGESAHAN</th>
              <th>DOSEN PEMBIMBING</th>
              <th>KETUA KELOMPOK</th>
              <th>ANGGOTA 1</th>
              <th>ANGGOTA 2</th>
              <th>ANGGOTA 3</th>
              <th>ANGGOTA 4</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($usulan as $item)
              <tr>
                <td>{{$item->jenisPkm->singkatan}}</td>
                <td>
                  @if(in_array($item->status_penilaian_administrasi,["done", 'rejected']))
                    <span class="badge bg-label-success">Sudah Dinilai</span>
                  @elseif($item->status_penilaian_administrasi == "waiting")
                    <span class="badge bg-label-danger">Belum Dinilai</span>
                  @endif
                </td>
                <td>Usulan {{$item->usulan}}</td>
                <td>
                  <a href="{{ route('penilai-administrasi.penilaian.detail', $item->id) }}">
                    <button class="btn btn-primary rounded btn-xs">Detail</button>
                  </a>
                </td>
                <td>{{$item->judul}}</td>
                <td>
                  <a
                    class="btn rounded-pill btn-primary btn-xs"
                    type="button"
                    href="{{url($item->lembar_proposal)}}"
                    target="_blank"
                    title="Read PDF">
                    <i class="mdi mdi-file"></i> Unduh
                  </a>
                </td>
                <td>
                  <a
                    class="btn rounded-pill btn-primary btn-xs"
                    type="button"
                    href="{{url($item->lembar_biodata_dospem)}}"
                    target="_blank"
                    title="Read PDF">
                    <i class="mdi mdi-file"></i> Unduh
                  </a>
                </td>
                <td>
                  <a
                    class="btn rounded-pill btn-primary btn-xs"
                    type="button"
                    href="{{url($item->lembar_biodata_kelompok)}}"
                    target="_blank"
                    title="Read PDF">
                    <i class="mdi mdi-file"></i> Unduh
                  </a>
                </td>
                <td>
                  <a
                    class="btn rounded-pill btn-primary btn-xs"
                    type="button"
                    href="{{url($item->lembar_pengesahan)}}"
                    target="_blank"
                    title="Read PDF">
                    <i class="mdi mdi-file"></i> Unduh
                  </a>
                </td>
                <td>{{$item->pembimbing->nama}}</td>
                <td>{{$item->ketuaKelompok->nama}}</td>
                <td>{{$item->anggotaSatu->nama}}</td>
                <td>{{$item->anggotaDua->nama}}</td>
                <td>{{$item->anggotaTiga->nama}}</td>
                <td>{{$item->anggotaEmpat->nama}}</td>
              </tr>
            @empty
              <tr>
                <td class="text-center text-bold">TIdak ada data!</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Table Proposal  -->
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