@extends('admin.template.layout')
@section("title", "Admin |  Akun Peninjau")
@section('body')
  <!-- Main Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      <div class="card-header">
        <div class="row pt-3">
          <div class="col-sm">
            <h4 class="">Data Akun Peninjau</h4>
          </div>
          <div class="col-sm">
            
            <button
              type="button"
              class="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#tambah-peninjau"
              style="float: right">
              Tambahkan Akun Peninjau
            </button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="table-peninjau" class="table table-bordered table-striped text-center">
            <thead>
              <tr class="text-center">
                <th>nidn</th>
                <th>Nama Lengkap</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @forelse ($peninjau as $item)
                  <tr>
                    <td>{{$item->username}}</td>
                    <td>{{$item->dosen->nama}}</td>
                    <td>
                      <button
                        type="button"
                        class="btn btn-sm rounded-pill btn-primary waves-effect waves-light"
                        data-bs-toggle="modal"
                        data-bs-target="#modal-edit-peninjau"
                        onclick="openModal(event)"
                        data-id="{{$item->id}}">
                        Edit
                      </button>
    
                      <form 
                        class="d-inline"
                        action="{{ route('admin.manajemen-akun.peninjau.delete', $item->id) }}" 
                        method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-sm rounded-pill btn-danger waves-effect waves-light">
                          Hapus
                        </button>
                      </form>
                    </td>
                  </tr>
              @empty
                  <tr>
                    <td class="text-center font-weight-bold" colspan="3">Empty!</td>
                  </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--/ Content -->

  @include('admin.component.manajemen-akun.modal-add-peninjau')
  @include('admin.component.manajemen-akun.modal-edit-peninjau')

@endsection

@section('javascript')
    
<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/quill/katex.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/quill/quill.js') }}"></script>
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
{{-- <script src="{{ asset('assets/js/ui-modals.js') }}"></script> --}}
<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js') }}"></script>

<!-- Page JS -->

{{-- <script src="{{ asset('assets/js/form-wizard-numbered.js') }}"></script> --}}
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
<script>
  function submitAdd(){
    document.getElementById("add-peninjau").submit();
  }

  function submitEdit(){
    $("#edit_peninjau").submit();
  }

  function openModal(event){
    event.preventDefault();
    const id = event.target.getAttribute('data-id');

    const url = window.BASE_URL + `/administrator/manajemen-akun/peninjau/${id}/update-password`;

    document.forms["edit_peninjau"].action = url;
  }

  $(document).ready(function() {

      $('.select2').select2({
        dropdownParent: $("#tambah-peninjau .modal-body"),
        delay: 250,
        ajax: {
          url: "{{url('api/dosen')}}",
          data: function (params) {
            var query = {
              search: params.term,
              type: 'public'
            }

            // Query parameters will be ?search=[term]&type=public
            return query;
          },
          processResults: function (data) {
            // Transforms the top-level key of the response object from 'items' to 'results'
            return {
                results: $.map(data.data, function (item) {
                    return {
                        text: `${item.nidn} - ${item.nama}`,
                        id: item.nidn
                    }
                })
            };
          }
        }
      });

      
      $('#table-peninjau').DataTable({
        responsive: true,
        lengthChange: false,
        autoWidth: false,
        searching: true,        
        dom: 'Bfrtip',
        buttons: [
            {
              extend: 'excel',
              exportOptions: {
                  columns: [0, 1] // Adjust the column indices as needed
              },
              customizeData: function (data) {
                  // Iterate over the rows in the exported data
                  data.body.forEach(function (row) {
                    console.log(row);
                      // Assuming the column index is 1 (adjust as needed)
                      var columnValue = row[1];

                      // Check if the column value contains a button with <a> tag
                      var match = /<a.*?>(.*?)<\/a>/i.exec(columnValue);

                      // If it's a button with <a> tag, replace it with the href value
                      if (match) {
                          row[1] = match[1];
                      }
                    });
                }
            }
        ]
      });
  });
</script>

@endsection