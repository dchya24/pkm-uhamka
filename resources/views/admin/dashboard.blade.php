@extends('admin.template.layout')

@section('body')
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row gy-4 mb-4">
      <!-- Administrator Uhamka-->
      <div class="col-lg-6">
        <div class="card h-100">
          <div class="card-header">
            <div class="d-flex justify-content-between">
              <h4 class="mb-2">Administrator PKM UHAMKA</h4>
            </div>
          </div>
          <div class="card-body d-flex justify-content-between flex-wrap gap-3">
            <div class="d-flex gap-3">
              <div class="avatar">
                <div class="avatar-initial bg-label-primary rounded">
                  <i class="mdi mdi-account-outline mdi-24px"></i>
                </div>
              </div>
              <div class="card-info">
                <h4 class="mb-0">3212</h4>
                <small>Usulan</small>
              </div>
            </div>
            <div class="d-flex gap-3">
              <div class="avatar">
                <div class="avatar-initial bg-label-success rounded">
                  <i class="mdi mdi-checkbox-multiple-marked-circle-outline mdi-24px"></i>
                </div>
              </div>
              <div class="card-info">
                <h4 class="mb-0">313</h4>
                <small>Internal</small>
              </div>
            </div>
            <div class="d-flex gap-3">
              <div class="avatar">
                <div class="avatar-initial bg-label-info rounded">
                  <i class="mdi mdi-school mdi-24px"></i>
                </div>
              </div>
              <div class="card-info">
                <h4 class="mb-0">2131</h4>
                <small>BELMAWA KEMENDIKBUDRISTEK</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Jumlah Akun Mahasiswa -->
      <div class="col-lg-3 col-sm-6">
        <div class="card h-100">
          <div class="row">
            <div class="col-6">
              <div class="card-body">
                <div class="card-info mb-3 py-2 mb-lg-1 mb-xl-3">
                  <h5 class="mb-3 mb-lg-2 mb-xl-3 text-nowrap">Akun Ketua Kelompok</h5>
                </div>
                <div class="d-flex align-items-end flex-wrap gap-1">
                  <h4 class="mb-0 me-2">123</h4>
                  <small class="text-success">25 November 2023</small>
                </div>
              </div>
            </div>
            <div class="col-6 text-end d-flex align-items-end justify-content-center">
              <div class="card-body pb-0 pt-3 position-absolute bottom-0">
                <img
                  src="../../assets/img/illustrations/card-ratings-illustration.png"
                  alt="Ratings"
                  width="95" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Jumlah Akun Tim Penilai -->
      <div class="col-lg-3 col-sm-6">
        <div class="card h-100">
          <div class="row">
            <div class="col-6">
              <div class="card-body">
                <div class="card-info mb-3 py-2 mb-lg-1 mb-xl-3">
                  <h5 class="mb-3 mb-lg-2 mb-xl-3 text-nowrap">Akun Tim Penilai</h5>
                </div>
                <div class="d-flex align-items-end flex-wrap gap-1">
                  <h4 class="mb-0 me-2">122</h4>
                  <small class="text-danger">25 November 2023</small>
                </div>
              </div>
            </div>
            <div class="col-6 text-end d-flex align-items-end justify-content-center">
              <div class="card-body pb-0 pt-3 position-absolute bottom-0">
                <img
                  src="../../assets/img/illustrations/card-session-illustration.png"
                  alt="Ratings"
                  width="81" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Tabel Proposal -->
      <div class="card">
        <div class="card-header">
          <h3 class="text-center pt-3">Data Proposal</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive text-nowrap">
            <table id="example1" class="table table-bordered table-striped text-center">
              <thead>
                <tr class="text-bold">
                  <th>Aksi</th>
                  <th>Judul</th>
                  <th>Jenis PKM</th>
                  <th>Usulan</th>
                  <th>Tahun Pengajuan</th>
                  <th>Anggran yang diajukan</th>
                  <th>Penilai Substansi</th>
                  <th>Penilai Administrasi</th>
                  <th>Peninjau</th>
                  <th>Wakil rektor</th>
                  <th>NIDN Dospem</th>
                  <th>Dosen Pembimbing</th>
                  <th>NIM Ketua Kelompok</th>
                  <th>Nama Ketua Kelompok</th>                            
                  <th>Tugas Ketua Kelompok</th>
                  <th>NIM Anggota 1</th>     
                  <th>Nama Angggota 1</th>
                  <th>Tugas anggota 1</th>
                  <th>NIM Anggota 2</th>
                  <th>Nama Angggota 2</th>
                  <th>Tugas anggota 2</th>
                  <th>NIM Anggota 3</th>
                  <th>Nama Angggota 3</th>
                  <th>Tugas anggota 3</th>
                  <th>NIM anggota 4</th>
                  <th>Nama Angggota 4</th>
                  <th>Tugas anggota 4</th>
                  <th>Pendahuluan usulan</th>                          
                  <th>Proposal</th>
                  <th>Lembar Bimbingan</th>
                  <th>Lembar Biodata Dosen Pembimbing</th>
                  <th>Lembar Biodata Ketua & Anggota-anggota</th>                            
                  <th>Lembar Pengesahan</th>
                  <th>Ket.Substansi</th>
                  <th>Ket.Administrasi</th>
                  <th>Ket.Peninjau</th>
                  <th>Nilai Substansi</th>
                  <th>Nilai Administrasi</th>
                  <th>Nilai Peninjau</th>
                  <th>Komentar peninjau mahasisawa</th>
                  <th>Komentar peninjau wakil rektor</th>
                  <th>Penyaluran</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <a href="/Admin/ManajemenUsulan/A_Dataproposal.html" type="button" class="btn rounded-pill btn-primary btn-xs" target="_blank">
                      Detil
                    </a> 
                  </td>
                  <td>Pembingaaadsadsa dajdsadas dasd as</td>
                  <td>
                    PKM-TD
                  </td>
                  <td>Usulan 1</td>
                  <td>2024</td>
                  <td>730000000</td>

                  <td>Ahamad Darto</td>
                  <td>Suinta Golo</td>
                  <td>Isa faqihuddin</td>
                  <td>Suryatno</td>

                  <td>87312312</td>
                  <td>darsono</td>

                  <td>87312312</td>
                  <td>darsono</td>                            
                  <td>
                    dasdasdas
                  </td>

                  <td>87312312</td>
                  <td>darsono</td>                            
                  <td>1.dsadasdsada</td>

                  <td>87312312</td>
                  <td>darsono</td>                            
                  <td>1.dsadasdsada</td>

                  <td>87312312</td>                            
                  <td>darsono</td>                            
                  <td>1.dsadasdsada</td>

                  <td></td>
                  <td></td>
                  <td></td>

                  <td>1.dsadasdasdasdsa</td>
                  <td>
                    <a href="/assets/pdf/HASIL_ADM_VGK122.pdf" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
                      <i class="mdi mdi-file"></i> Unduh
                    </a> 
                  </td>
                  <td>
                    <a href="/assets/pdf/HASIL_ADM_VGK122.pdf" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
                      <i class="mdi mdi-file"></i> Unduh
                    </a> 
                  </td>
                  <td>
                    <a href="/assets/pdf/HASIL_ADM_VGK122.pdf" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
                      <i class="mdi mdi-file"></i> Unduh
                    </a> 
                  </td>
                  <td>
                    <a href="/assets/pdf/HASIL_ADM_VGK122.pdf" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
                      <i class="mdi mdi-file"></i> Unduh
                    </a> 
                  </td>
                  <td>
                    <a href="/assets/pdf/HASIL_ADM_VGK122.pdf" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
                      <i class="mdi mdi-file"></i> Unduh
                    </a> 
                  </td>
                  <td>MINOR/MAYOR</td>
                  <td>MINOR/MAYOR</td>
                  <td>MINOR/MAYOR</td>
                  <td>
                    <a href="/assets/pdf/HASIL_ADM_VGK122.pdf" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
                      <i class="mdi mdi-file"></i> Unduh
                    </a> 
                  </td>
                  <td>  
                    <a href="/assets/pdf/HASIL_ADM_VGK122.pdf" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
                      <i class="mdi mdi-file"></i> Unduh
                    </a> 
                  </td>
                  <td>  
                    <a href="/assets/pdf/HASIL_ADM_VGK122.pdf" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
                      <i class="mdi mdi-file"></i> Unduh
                    </a> 
                  </td>
                  <td>dkjlasjndklasdasdas</td>
                  <td>dasdashdas</td>
                  <td>Internal</td>
                </tr>
              </tbody>
            </table>
          </div>
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
  <script src="{{ url('assets/js/forms-editors.js') }}"></script>

  <!-- Bootstrap Switch -->
  <script src="{{ url('dist2/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
@endsection