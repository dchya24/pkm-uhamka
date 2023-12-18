@extends('admin.template.layout')

@section('body')
  <!-- Main Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      <div class="card-header">
        <h3 class="text-center pt-3">DATA PENGAJUAN PROPOSAL</h3>
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
                  <a href="/Admin/ManajemenUsulan/A_IDProposaledit.html" type="button" class="btn rounded-pill btn-primary btn-xs" target="_blank">
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
  <!--/ Content -->



  @section('javascript')
    
    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/quill/katex.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/quill/quill.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/app-ecommerce-product-add.js') }}"></script>


    <!-- endbuild -->

    <!-- Page JS -->
    <script src="{{ asset('assets/js/ui-modals.js') }}"></script>
    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js') }}"></script>

    <!-- Page JS -->

    <script src="{{ asset('assets/js/form-wizard-numbered.js') }}"></script>
    <script src="{{ asset('assets/js/form-wizard-validation.js') }}"></script>
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

    <!-- DataTables  & Plugins -->
    <script src="{{ asset('dist2/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('dist2/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dist2/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dist2/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('dist2/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dist2/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('dist2/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dist2/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('dist2/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('dist2/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('dist2/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('dist2/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('dist2/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{asset('assets/js/forms-file-upload.js')}}"></script>
  @endsection
@endsection