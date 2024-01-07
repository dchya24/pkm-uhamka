@extends('mahasiswa.template.layout')
@section("title", "Beranda | Mahasiswa")

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
              <div class="">
                @if($usulan->last()->status_penilaian_substansi !== null && $usulan->last()->status_rekomendasi === null)
                  <span class="badge rounded-pill bg-label-warning text-md-end text-dark">
                    Usulan {{$usulan->last()->usulan}} : Usulan sedang dinilai, 
                    <a href="{{ route('mahasiswa.usulan', 'id='.$usulan->last()->id)}}" type="button" target="_blank">Lihat usulanmu</a>
                  </span>
                @elseif($usulan->last()->status_rekomendasi !== null || $usulan->last()->status_penilaian_substansi == "mayor")
                  <span class="badge rounded-pill bg-label-success text-md-end text-dark">
                    Usulan {{$usulan->last()->usulan}} : Usulan kamu telah dinilai, 
                    <a href="{{ route('mahasiswa.usulan', 'id='.$usulan->last()->id)}}" type="button" target="_blank">Lihat usulanmu</a>
                  </span>
                @else
                  <span class="badge rounded-pill bg-label-danger text-md-end text-dark">
                    Usulan {{$usulan->last()->usulan}} : Usulan kamu belum dinilai, 
                    <a href="{{ route('mahasiswa.usulan', 'id='.$usulan->last()->id)}}" type="button" target="_blank">Lihat usulanmu</a>
                  </span>
                @endif
                <br>
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
                    <span class="text-primary mb-0 display-6" style="font-size: 1.3rem">
                      {{$userInfo->mahasiswa->nama}}
                    </span>
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
                      {{$userInfo->mahasiswa->fakultas}}
                    </p>
                    <span class="text-info mb-0 display-6" style="font-size: 1.3rem">
                      {{$userInfo->mahasiswa->prodi}}
                    </span>
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
              @forelse ($usulan as $item)
                  <tr>
                    <td class='col-1'>{{$item->judul}}</td>
                    <td>{{$item->jenisPkm->singkatan}}</td>
                    <td>Usulan {{$item->usulan}}</td>
                    <td>
                      @if($item->status_penilaian_substansi == "mayor")
                        <span class="badge rounded-pill bg-label-success text-md-end text-dark ">
                          MAYOR
                        </span>
                      @elseif($item->status_penilaian_substansi == "minor")
                        <span class="badge rounded-pill bg-label-danger text-md-end text-dark">
                          MINOR
                        </span>
                      @else
                        <span class="badge rounded-pill bg-label-primary text-md-end text-dark">
                          SEDANG DINILAI
                        </span>
                      @endif
                    </td>
                    <td>
                      @if($item->status_penilaian_administrasi == "done")
                        <span class="badge rounded-pill bg-label-success text-md-end text-dark ">
                          Sudah Dinilai
                        </span>
                      @elseif($item->status_penilaian_administrasi == "waiting")
                        <span class="badge rounded-pill bg-label-primary text-md-end text-dark">
                          Sedang Dinilai
                        </span>
                      @else
                        <span class="badge rounded-pill bg-label-danger text-md-end text-dark">
                          Belum Dinilai
                        </span>
                      @endif
                    </td>
                    <td>
                      @if($item->status_penilaian_peninjau == "waiting")
                        <span class="badge rounded-pill bg-label-primary text-md-end text-dark">
                          Sedang Dinilai
                        </span>
                      @elseif($item->status_penilaian_peninjau == "done")
                        <span class="badge rounded-pill bg-label-success text-md-end text-dark ">
                          Sudah Dinilai
                        </span>
                      @endif
                    </td>
                    <td>{{$item->status_rekomendasi}}</td>
                    <td>{{$item->tahun_pengajuan}}</td>
                    <td>{{$item->anggaran}}</td>
                    <td>{{$item->ketuaKelompok->nama}}</td>
                    <td>{{$item->pembimbing->nama}}</td>
                    <td>{{$item->anggotaSatu->nama}}</td>
                    <td>{{$item->anggotaDua->nama}}</td>
                    <td>{{$item->anggotaTiga->nama}}</td>
                    <td>{{$item->anggotaEmpat->nama}}</td>
                    <td>
                      <a href="{{ route('mahasiswa.usulan', 'id='.$item->id)}}">
                        <button
                          type="button"
                          class="btn btn-sm rounded-pill btn-primary waves-effect waves-light">
                          Lihat
                        </button>
                      </a>                                           
                    </td>
                  </tr>
              @empty
                <tr>
                  <td colspan="15" class="text-center font-weight bold">
                    Tidak ada data!
                  </td>
                </tr>
              @endforelse
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