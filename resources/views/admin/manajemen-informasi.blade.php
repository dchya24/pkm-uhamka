@extends('admin.template.layout')

@section('body')
  <!-- Content -->
  
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="app-ecommerce">
      <div class="row">
        <!-- First column-->
        <div class="col-sm">
          <div class="card mb-4">
            <div class="card-header">
              <div class="row ml-3 mt-3">
                <div class="col-sm">
                  <h4 class="card-tile mb-0">Pengelolaan data distribusi Informasi</h5>
                </div>
                <div class="col-sm">                            
                  <button
                    type="button"
                    class="btn btn-primary waves-effect waves-light"
                    data-bs-toggle="modal"
                    data-bs-target="#Tambah_Informasi"
                    style="float: right">
                    Tambahkan Informasi
                  </button>
                </div>
              </div>
            </div>

            <div class="card-body">
              <div class="">
                <table id="example1" class="table table-bordered table-striped text-center pt-3">
                  <thead>
                    <tr class="text-bold">
                      <th>Judul</th>
                      <th>Dikirim kepada</th>
                      <th>Isi</th>
                      <th>File</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Pemberitahuan Usulan 2</td>
                      <td>Mahasiswa, Penilai Substasni, Penilai Administrasi, Peninjau, Wakil Rektor</td>
                      <td>iwanslowajj@gmail.com</td>
                      <td>
                        <a href="/assets/pdf/HASIL_ADM_VGK122.pdf" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
                          <i class="mdi mdi-file"></i> Unduh
                        </a> 
                      </td>
                      <td class="d-flex">
                        <button
                          type="button"
                          class="btn btn-sm rounded-pill btn-info waves-effect waves-light"
                          data-bs-toggle="modal"
                          data-bs-target="#Edit_Informasi">
                          Ubah
                        </button>
                        <a href="A_Buatinformasi.html">
                        <button
                          type="button"
                          class="btn btn-sm rounded-pill btn-danger waves-effect waves-light">
                          Hapus
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
      </div>
    </div>
  </div>
  <!--/ Content -->

  @include('admin.component.modal-add-informasi')
  @include('admin.component.modal-edit-informasi')

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
  @endsection
@endsection