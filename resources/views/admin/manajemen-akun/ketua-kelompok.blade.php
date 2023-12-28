@extends('admin.template.layout')

@section('body')
  <!-- Main Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      <div class="card-header">
        <div class="row pt-3">
          <div class="col-sm">
            <h4 class="">Data Akun Mahasiswa</h4>
          </div>
          <div class="col-sm">
            
            <button
              type="button"
              class="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#tambah-ketua-kelompok"
              style="float: right">
              Tambahkan Akun Mahasiswa
            </button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
              <tr class="text-center">
                <th>NIM</th>
                <th>Nama</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @forelse ($ketuaKelompok as $item)
                  <tr>
                    <td>{{$item->nim}}</td>
                    <td>{{$item->mahasiswa->nama}}</td>
                    <td>
                      <button
                        type="button"
                        class="btn btn-sm rounded-pill btn-primary waves-effect waves-light"
                        data-bs-toggle="modal"
                        data-bs-target="#modal-edit-ketua"
                        onclick="openModal(event)"
                        data-id="{{$item->id}}">
                        Edit
                      </button>
    
                      <form 
                        class="d-inline"
                        action="{{ route('admin.manajemen-akun.ketua-kelompok.delete', $item->id) }}" 
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

  @include('admin.component.manajemen-akun.modal-add-ketua')
  @include('admin.component.manajemen-akun.modal-edit-ketua')
@endsection
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
<script>
  function submitAdd(){
    document.getElementById("add-ketua-kelompok").submit();
  }

  function submitEdit(){
    $("#edit_ketua_kelompok").submit();
  }

  function openModal(event){
    event.preventDefault();
    const id = event.target.getAttribute('data-id');

    const url = window.BASE_URL + `/admin/manajemen-akun/ketua-kelompok/${id}/update-password`;

    document.forms["edit_ketua_kelompok"].action = url;
  }

  $(document).ready(function() {

      $('.select2').select2({
        dropdownParent: $("#tambah-ketua-kelompok .modal-body"),
        delay: 250,
        ajax: {
          url: "{{url('api/mahasiswa')}}",
          data: function (params) {
            var query = {
              search: params.term,
            }

            // Query parameters will be ?search=[term]&type=public
            return query;
          },
          processResults: function (data) {
            // Transforms the top-level key of the response object from 'items' to 'results'
            return {
                results: $.map(data.data, function (item) {
                    return {
                        text: `${item.nim} - ${item.nama}`,
                        id: item.nim
                    }
                })
            };
          }
        }
      });
  });
</script>
@endsection