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
            <h5 class="pt-3 text-center">Jumlah usulan yang ditinjau oleh Wakil Rektor</h5>
          </div>
          <div class="card-body">
            <div class="">
              <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                  <tr class="text-bold">
                    <th>No</th>
                    <th>Nama Wakil Rektor</th>
                    <th>Jumlah Proposal yang dinilai</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Suryo Putro, S.T, M.T</td>
                    <td>4</td>
                    <td>
                      <a href="A_IDPemilihanwakilrektor.html">
                        <button
                          type="button"
                          class="btn btn-sm rounded-pill btn-info waves-effect waves-light">
                          Detail
                        </button>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="card ">
          <div class="card-header">
            <div class="row pt-3">
              <div class="col-sm">
                <h4 class="">Link grup rekomendasi usulan</h4>
              </div>
              <div class="col-sm">                      
                <button
                  type="button"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#Tambah_Akunmahasiswa"
                  style="float: right">
                  Tambahkan Link
                </button>      
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                  <tr class="text-center">
                    <th>Link grup</th>
                    <th>Rekomendasi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <tr class="text-center">
                    <td>
                      <a href="https://youtu.be/XSo-6TAcKlA?si=UabjN8-qs1zBLlHo" target="_blank">
                        Www.dasdasdsadasdasdas.com
                      </a>
                    </td>
                    <td>Internal</td>
                    <td>
                      <button
                        type="button"
                        class="btn btn-sm rounded-pill btn-primary waves-effect waves-light"
                        data-bs-toggle="modal"
                        data-bs-target="#largeModal">
                        Edit
                      </button>

                      <button type="button" class="btn btn-sm rounded-pill btn-danger waves-effect waves-light">
                        Hapus
                      </button>
                    </td>
                  </tr>
                  <tr class="text-center">
                    <td>
                      <a href="https://youtu.be/XSo-6TAcKlA?si=UabjN8-qs1zBLlHo" target="_blank">
                        Www.dasdasdsadasdasdas.com
                      </a>
                    </td>
                    <td>Belmawa</td>
                    <td>
                      <button
                        type="button"
                        class="btn btn-sm rounded-pill btn-primary waves-effect waves-light"
                        data-bs-toggle="modal"
                        data-bs-target="#largeModal">
                        Edit
                      </button>

                      <button type="button" class="btn btn-sm rounded-pill btn-danger waves-effect waves-light">
                        Hapus
                      </button>
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

@include('admin.manajemen-proposal.component.link-group-modal-add')
@include('admin.manajemen-proposal.component.link-group-modal-edit')

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