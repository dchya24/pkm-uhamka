@extends('wakil-rektor.template.layout')
@section("title", "Beranda | Wakil Rektor")

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
                  <p class="mb-0 fw-medium" style="font-size: 1rem">Belum di rekomendasikan</p>
                  <span class="text-primary mb-0 display-6" style="font-size: 1.3rem">{{$belumDiputuskan}}</span>
                </div>
              </div>
              <div class="d-flex align-items-center gap-3">
                <div class="avatar avatar-md">
                  <div class="avatar-initial bg-label-info rounded">
                    <i class="mdi mdi-information mdi-36px"></i>
                  </div>
                </div>
                <div class="content-right">
                  <p class="mb-0 fw-medium" style="font-size: 1rem">Internal</p>
                  <span class="text-info mb-0 display-6" style="font-size: 1.3rem">{{$internal}}</span>
                </div>
              </div>
              <div class="d-flex align-items-center gap-3">
                <div class="avatar avatar-md">
                  <div class="avatar-initial bg-label-success rounded">
                    <i class="mdi mdi-check-decagram-outline mdi-36px"></i>
                  </div>
                </div>
                <div class="content-right">
                  <p class="mb-0 fw-medium" style="font-size: 1rem">Belmawa</p>
                  <span class="text-success mb-0 display-6" style="font-size: 1.3rem">{{$belmawa}}</span>
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
              <th>Ket.Rekomendasi</th>
              <th>Aksi</th>
              <th>Judul</th>
              <th>Tahun Pengajuan</th>
              <th>Anggaran yang diajukan</th>
              <th>Dosen Pembimbing</th>
              <th>Ketua Kelompok</th>
              <th>Angggota 1</th>
              <th>Angggota 2</th>
              <th>Angggota 3</th>
              <th>Angggota 4</th>
              <th>Lembar Bimbingan</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($usulan as $item)
                <tr>
                  <td>{{$item->jenisPkm->singkatan}}</td>
                  <td>
                    Usulan {{$item->usulan}}
                  </td>
                  <td>{{$item->status_rekomendasi}}</td>
                  <td>
                    <a href="{{route('wakil-rektor.penilaian.detail', $item->id)}}" class="btn btn-primary rounded btn-xs">
                        Detail
                    </a>
                  </td>
                  <td>
                    {{$item->judul}}
                  </td>
                  <td>{{$item->tahun_pengajuan}}</td>
                  <td>{{$item->anggaran}}</td>
                  <td>
                    {{$item->pembimbing->nama}}
                  </td>
                  <td>
                    {{$item->ketuaKelompok->nama}}
                  </td>
                  <td>{{$item->anggotaSatu->nama}}</td>
                  <td>{{$item->anggotaDua->nama}}</td>
                  <td>{{$item->anggotaTiga->nama}}</td>
                  <td>{{$item->anggotaEmpat->nama}}</td>
                  <td>
                    <a
                      class="btn rounded-pill btn-primary btn-xs"
                      type="button"
                      href="{{$item->lembar_bimbingan}}"
                      target="_blank"
                      title="Read PDF">
                      <i class="mdi mdi-file"></i> Unduh
                    </a>
                  </td>
                </tr>
            @empty
                
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
            searching: true
        })
        .buttons()
        .container()
        .appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
@endsection