@extends('admin.template.layout')

@section('body')
<!-- Main Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header">
      <a href="javascript:history.back()" class="btn btn-primary" type="button">
        Kembali
      </a>
      <h3 class="text-center pt-3">Penambahan Penilai Administrasi pada Usulan </h3>                 
        <Label>Nama Penilai Administrasi : (Nama Penilai) </Label>
        <br>
        <label for="">Jumlah Usulan yang dinilai : (129)</label>
        <br>
      
    </div>
    <div class="card-body">
      <div class="table-responsive text-nowrap">
        <table id="example1" class="table table-bordered table-striped text-center">
          <thead>
            <tr class="text-bold">
              <th>Judul</th>
              <th>Skema PKM</th>
              <th>Usulan</th>
              <th>Penilai Administrasi</th>
              <th>Dosen Pembimbing</th>
              <th>Ketua Kelompok</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>                          
              <td>Pembingaaadsadsa dajdsadas dasd as</td>                         
              <td>PKM-TD</td>
              <td>Usulan 1</td>
              
              <td>Ahamad Darto</td>
              <td>Suinta Golo</td>
              <td>Utung Ketopa</td>
             
              <td>
                <a href="" type="button" class="btn rounded-pill btn-danger btn-xs" >
                  Hapus
                </a> 
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <!-- TABEL TAMBAH-->
  <div class="card mt-3">
    <div class="card-header mt-3">
      <a href="" class="btn btn-primary btn" style="float: right;"> 
        Tambahkan 
      </a>
    </div>
    <div class="card-body">
      <table id="example2" class="table table-bordered table-striped text-center">
        <thead>
          <tr class="text-bold">
            <th>Judul</th>
            <th>Skema PKM</th>
            <th>Usulan</th>
            <th>Penilai Administrasi</th>
            <th>Dosen Pembimbing</th>
            <th>Ketua Kelompok</th>                        
            <th>Check</th>
          </tr>
        </thead>
        <tbody>
          <tr>                                              
            <td>Pembingaaadsadsa dajdsadas dasd as</td>                         
            <td>PKM-TD</td>
            <td>Usulan 1</td>                        
            <td></td>
            <td>Suinta Golo</td>
            <td>Utung Ketopa</td>    
            <td>
              <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault" 
                  />
            </td>                       
          </tr>

          <tr>                                              
            <td>Pembingaaadsadsa dajdsadas dasd as</td>                         
            <td>PKM-TD</td>
            <td>Usulan 1</td>                        
            <td></td>
            <td>Suinta Golo</td>
            <td>Utung Ketopa</td>    
            <td>
              <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault" 
                  />
            </td>                       
          </tr>

          <tr>                                              
            <td>Pembingaaadsadsa dajdsadas dasd as</td>                         
            <td>PKM-TD</td>
            <td>Usulan 1</td>                        
            <td></td>
            <td>Suinta Golo</td>
            <td>Utung Ketopa</td>    
            <td>
              <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault" 
                  />
            </td>                       
          </tr>

          <tr>                                              
            <td>Pembingaaadsadsa dajdsadas dasd as</td>                         
            <td>PKM-TD</td>
            <td>Usulan 1</td>                        
            <td></td>
            <td>Suinta Golo</td>
            <td>Utung Ketopa</td>    
            <td>
              <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault" 
                  />
            </td>                       
          </tr>

          <tr>                                              
            <td>Pembingaaadsadsa dajdsadas dasd as</td>                         
            <td>PKM-TD</td>
            <td>Usulan 1</td>                        
            <td></td>
            <td>Suinta Golo</td>
            <td>Utung Ketopa</td>    
            <td>
              <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault" 
                  />
            </td>                       
          </tr>

          <tr>                                              
            <td>Pembingaaadsadsa dajdsadas dasd as</td>                         
            <td>PKM-TD</td>
            <td>Usulan 1</td>                        
            <td></td>
            <td>Suinta Golo</td>
            <td>Utung Ketopa</td>    
            <td>
              <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault" 
                  />
            </td>                       
          </tr>
          
        </tbody>
      </table>
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