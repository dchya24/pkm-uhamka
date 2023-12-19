@extends('mahasiswa.template.layout')
@section("title", "Beranda | Mahasiswa")

@section('body')
  <!-- Main Content -->
  <div class="container-xxl flex-grow-0 container-p-y">
    <!-- Keterangan Semua Proposal  -->
    <div class="col-md-12">
      <div class="card h-100">
        <div class="d-flex row">
          <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title">Selamat Datang 🎉</h4>
              <div class="">
                <span class="badge rounded-pill bg-label-success text-md-end text-dark">Usulan 1 : Usulan kamu telah dinilai, 
                  <a href="Substansi/M_Substansi_minor.html" type="button" target="_blank">Lihat usulanmu</a>
                </span>
                <br>
                <span class="badge rounded-pill bg-label-warning text-md-end text-dark">Usulan 1 : Usulan sedang dinilai, 
                  <a href="Substansi/M_Substansi_minor.html" type="button" target="_blank">Lihat usulanmu</a>
                </span>
              </div>
              
              <div class="d-flex justify-content-between pt-3">
                <div class="d-flex align-items-center gap-3">
                  <div class="avatar avatar-md">
                    <div class="avatar-initial bg-label-primary rounded">
                      <i class="mdi mdi-laptop mdi-36px"></i>
                    </div>
                  </div>
                  <div class="content-right">
                    <p class="mb-0 fw-medium" style="font-size: 1rem">Ketua Kelompok</p>
                    <span class="text-primary mb-0 display-6" style="font-size: 1.3rem"
                      >Muhammad abdillah bin nisan aksai</span
                    >
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <div class="avatar avatar-md">
                    <div class="avatar-initial bg-label-info rounded">
                      <i class="mdi mdi-lightbulb-outline mdi-36px"></i>
                    </div>
                  </div>
                  <div class="content-right">
                    <p class="mb-0 fw-medium" style="font-size: 1rem">
                      Fakultas Keguruan dan Ilmu Pendidikan
                    </p>
                    <span class="text-info mb-0 display-6" style="font-size: 1.3rem"
                      >Bimbingan Konseling</span
                    >
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-md-4 text-center text-md-end order-1 order-md-2">
            <div class="card-body pb-0 px-0 px-md-4 ps-0">
              <img
                src="{{ url('assets/img/illustrations/illustration-john-light.png') }}"
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

    <!-- Tabel Proposal -->
    <div class="card">
      <div class="card-header">
        <h5 class="text-center pt-3">Proposal yang diajukan</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive text-nowrap">
          <table id="example1" class="table table-bordered table-striped text-center ">
            <thead>
              <tr>
                <th style="width: 64%" >Judul</th>                          
                <th>Jenis PKM</th>
                <th>Usulan</th>
                <th>Substansi</th>
                <th>Administrasi</th>
                <th>Tinjauan</th>                          
                <th style="display: none;">Penyaluran</th>
                <th style="display: none;">Tahun Pengajuan</th>
                <th style="display: none;">Anggran yang diajukan</th>
                <th style="display: none;">Ketua Kelompok</th>
                <th style="display: none;">Dosen Pembimbing</th>
                <th style="display: none;">Angggota 1</th>
                <th style="display: none;">Angggota 2</th>
                <th style="display: none;">Angggota 3</th>
                <th style="display: none;">Angggota 4</th>
                <th style="display: none;">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <!-- Minor Substani-->
              <tr >
                <td class="col-1">
                  Pengabdian desa singjaya untuk memajukan pendapatan ekonomi keluarga menengah dengan
                  budidaya ikan lele
                </td>                          
                <td>PKM-T</td>
                <td>Usulan 1</td>
                <td>
                  <span class="badge rounded-pill bg-label-danger text-md-end text-dark">MINOR</span>
                </td>
                <td></td>
                <td></td>                          
                <td></td>
                <td>2024</td>
                <td>37000000</td>
                <td>Rifaldi</td>
                <td>Isa Faqihuddin, S.T, M.T</td>
                <td>Gendut wijaya</td>
                <td>anton siuta</td>
                <td>latasya miranda</td>
                <td></td>
                <td>
                  <a href="M_Proposalsaya.html">
                    <button
                      type="button"
                      class="btn btn-sm rounded-pill btn-primary waves-effect waves-light">
                      Lihat
                    </button>
                  </a>                                           
                </td>
              </tr>

              <!-- Mayor semua, penyaluran internal-->
              <tr >
                <td class="col-1">
                  Pengabdian desa singjaya untuk memajukan pendapatan ekonomi keluarga menengah dengan
                  budidaya ikan lele
                </td>                          
                <td>PKM-T</td>
                <td>Usulan 2</td>
                <td>
                  <span class="badge rounded-pill bg-label-success text-md-end text-dark ">
                    MAYOR
                  </span>
                </td>
                <td>
                  <span class="badge rounded-pill bg-label-success text-md-end text-dark ">
                    MAYOR
                  </span>
                </td>
                <td>
                  <span class="badge rounded-pill bg-label-success text-md-end text-dark ">
                    MAYOR
                  </span>
                </td>                          
                <td>
                  Internal
                </td>
                <td>2024</td>
                <td>37000000</td>
                <td>Rifaldi</td>
                <td>Isa Faqihuddin, S.T, M.T</td>
                <td>Gendut wijaya</td>
                <td>anton siuta</td>
                <td>latasya miranda</td>
                <td></td>
                <td>
                  <a href="M_Proposalsaya.html">
                    <button
                      type="button"
                      class="btn btn-sm rounded-pill btn-primary waves-effect waves-light">
                      Lihat
                    </button>
                  </a>                                           
                </td>
              </tr>

              <!-- Mayor semua, penyaluran belmawa kemendikbudristek-->
              <tr >
                <td class="col-1">
                  Pengabdian desa singjaya untuk memajukan pendapatan ekonomi keluarga menengah dengan
                  budidaya ikan lele
                </td>                          
                <td>PKM-T</td>
                <td>Usulan 3</td>
                <td>
                  <span class="badge rounded-pill bg-label-success text-md-end text-dark ">
                    MAYOR
                  </span>
                </td>
                <td>
                  <span class="badge rounded-pill bg-label-success text-md-end text-dark ">
                    MAYOR
                  </span>
                </td>
                <td>
                  <span class="badge rounded-pill bg-label-success text-md-end text-dark ">
                    MAYOR
                  </span>
                </td>                          
                <td>
                  Kemendikbudristek
                </td>
                <td>2024</td>
                <td>37000000</td>
                <td>Rifaldi</td>
                <td>Isa Faqihuddin, S.T, M.T</td>
                <td>Gendut wijaya</td>
                <td>anton siuta</td>
                <td>latasya miranda</td>
                <td></td>
                <td>
                  <a href="M_Proposalsaya.html">
                    <button
                      type="button"
                      class="btn btn-sm rounded-pill btn-primary waves-effect waves-light">
                      Lihat
                    </button>
                  </a>                                           
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