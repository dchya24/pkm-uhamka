@extends('reviewer.template.layout')
@section("title", "Beranda | Peninjau")

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
              <span class="">Selamat Bekerja !</span>
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
                <th>Jenis PKM</th>
                <th>Usulan</th>
                <th>Peninjauan</th>
                <th>Aksi</th>
                <th>Judul</th>
                <th>Tahun Pengajuan</th>
                <th>Anggran yang diajukan</th>
                <th>Dosen Pembimbing</th>
                <th>Ketua Kelompok</th>
                <th>Angggota 1</th>
                <th>Angggota 2</th>
                <th>Angggota 3</th>
                <th>Angggota 4</th>
                <th>Proposal</th>
                <th>Lembar Bimbingan</th>
                <th>Lembar Biodata Dosen Pembimbing</th>
                <th>Lembar Biodata kelompok</th>
                <th>Lembar Pengesahan</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($usulan as $item)
                <tr>
                  <td>{{$item->jenisPkm->singkatan}}</td>
                  <td>Usulan {{$item->usulan}}</td>
                  <td>
                    @if($item->status_penilaian_peninjau == "waiting")
                      <span class="badge bg-label-danger">Belum Ditinjau</span>
                    @elseif(in_array($item->status_penilaian_peninjau,["done", 'rejected']))
                      <span class="badge bg-label-success">Sudah Ditinjau</span>
                    @endif                  
                  </td>
                  </td>
                  <td>
                    <a href="{{route('reviewer.penilaian.tambah-penilaian', $item->id)}}">
                      <button class="btn btn-primary rounded btn-xs">Detail</button>
                    </a>
                  </td>
                  <td>
                    {{$item->judul}}
                  </td>
                  <td>{{$item->tahun_pengajuan}}</td>
                  <td>{{formatRupiah($item->anggaran, true)}}</td>
                  <td>{{$item->pembimbing->nama}}</td>
                  <td>{{$item->ketuaKelompok->nama}}</td>
                  <td>{{$item->getAnggotaSatu()->nama}}</td>
                  <td>{{$item->getAnggotaDua()->nama}}</td>
                  <td>{{$item->getAnggotaTiga()->nama}}</td>
                  <td>{{$item->getAnggotaEmpat()->nama}}</td>
                  <td>
                    <a class="btn btn-primary rounded btn-xs" href="https://{{$item->lembar_proposal}}" target="_blank" rel="noopener noreferrer">
                      Unduh
                    </a>
                  </td>
                  <td>
                    <a class="btn btn-primary rounded btn-xs" href="https://{{$item->lembar_bimbingan}}" target="_blank" rel="noopener noreferrer">
                      Unduh
                    </a>
                  </td>
                  <td>
                    <a class="btn btn-primary rounded btn-xs" href="https://{{$item->lembar_biodata_dospem}}" target="_blank" rel="noopener noreferrer">
                      Unduh
                    </a>
                  </td>
                  <td>
                    <a class="btn btn-primary rounded btn-xs" href="https://{{$item->lembar_biodata_anggota}}" target="_blank" rel="noopener noreferrer">
                      Unduh
                    </a>
                  </td>
                  <td>
                    <a class="btn btn-primary rounded btn-xs" href="https://{{$item->lembar_pengesahan}}" target="_blank" rel="noopener noreferrer">
                      Unduh
                    </a>
                  </td>
                </tr>
              @empty
                  <tr>
                    <td class="text-center fw-bold">Tidak Ada Data!</td>
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