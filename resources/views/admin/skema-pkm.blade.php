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
                <h5 class="card-tile mb-0">Manajemen Skema PKM</h5>
              </div>
              <div class="col-sm">
                <button
                  type="button"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#largeModal"
                  style="float: right">
                  Tambahkan Skema Pkm
                </button>
              </div>
            </div>
          </div>

          <div class="card-body">
            <div class="">
              <table id="example1" class="table table-bordered table-striped text-center pt-3">
                <thead>
                  <tr class="text-bold">
                    <th>Skema Pkm</th>
                    <th>Singkatan</th>
                    <th>Form substansi</th>
                    <th>Form Administrasi</th>
                    <th>Form peninjau</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Artificial Intelegent</td>
                    <td>PKM-KT</td>
                    <td>
                      <a  class="btn rounded-pill btn-primary btn-sm" type="button" href="/assets/pdf/HASIL_SUB_VGK122.pdf" target="_blank" title="Read PDF">
                        <i class="mdi mdi-file"></i> Unduh
                      </a>
                    </td>
                    <td>
                      <a  class="btn rounded-pill btn-primary btn-sm" type="button" href="/assets/pdf/HASIL_SUB_VGK122.pdf" target="_blank" title="Read PDF">
                        <i class="mdi mdi-file"></i> Unduh
                      </a>
                    </td>
                    <td>
                      <a  class="btn rounded-pill btn-primary btn-sm" type="button" href="/assets/pdf/HASIL_SUB_VGK122.pdf" target="_blank" title="Read PDF">
                        <i class="mdi mdi-file"></i> Unduh
                      </a>
                    </td>
                    <td>
                      <button
                        type="button"
                        class="btn btn-sm rounded-pill btn-info waves-effect waves-light"
                        data-bs-toggle="modal"
                        data-bs-target="#editModal">
                        Edit
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm rounded-pill btn-danger waves-effect waves-light">
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


@include('admin.component.modal-add-pkm')
@include('admin.component.modal-edit-pkm')
@endsection

@section('javascript')
       <!-- Vendors JS -->
       <script src="{{url('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
       <script src="{{url('assets/vendor/libs/swiper/swiper.js')}}"></script>
   
       <!-- Main JS -->
       <script src="{{url('assets/js/main.js')}}"></script>
   
       <!-- Page JS -->
       <script src="{{url('assets/js/dashboards-analytics.js')}}"></script>
   
       <!-- DataTables  & Plugins -->
       <script src="{{url('dist2/plugins/datatables/jquery.dataTables.js')}}"></script>
       <script src="{{url('dist2/plugins/datatables/jquery.dataTables.min.js')}}"></script>
       <script src="{{url('dist2/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
       <script src="{{url('dist2/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
       <script src="{{url('dist2/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
       <script src="{{url('dist2/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
       <script src="{{url('dist2/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
       <script src="{{url('dist2/plugins/jszip/jszip.min.js')}}"></script>
       <script src="{{url('dist2/plugins/pdfmake/pdfmake.min.js')}}"></script>
       <script src="{{url('dist2/plugins/pdfmake/vfs_fonts.js')}}"></script>
       <script src="{{url('dist2/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
       <script src="{{url('dist2/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
       <script src="{{url('dist2/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
   
     
   
       <!-- Vendors JS -->
       <script src="{{url('assets/vendor/libs/dropzone/dropzone.js')}}"></script>
   
   
       <!-- Page JS -->
       <script src="{{url('assets/js/forms-file-upload.js')}}"></script>
@endsection