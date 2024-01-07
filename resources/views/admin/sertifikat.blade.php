@extends('admin.template.layout')
@section("title", "Admin | Tambah Sertifikat")

@section('body')
  @include('admin.component.modal-add-sertifikat')
  <!-- Main Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      <div class="card-header">
        <div class="row pt-3">
          <div class="col-sm">
            <h4 class="">Unggah sertifikat</h4>
          </div>
          <div class="col-sm">
            <button
              type="button"
              class="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#largeModal"
              style="float: right">
              Tambahkan sertifikat
            </button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
              <tr class="text-center">
                <th>Sertifikat</th>
                <th>Unduh</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @forelse ($sertifikat as $item)
                  <tr>
                    <td>{{$item->nama}}</td>
                    <td>
                      <a href="{{url($item->file)}}" class="btn btn-primary btn-sm rounded-pill waves-effect waves-light" target="_blank">
                        Unduh
                      </a>
                    </td>
                    <td>
                      <form 
                        action="{{route('admin.sertifikat.destroy', $item->id)}}"
                        method="POST"
                        class="form form-inline my-0">
                        @csrf
                        @method('DELETE')

                        <button 
                          type="submit" 
                          class="btn btn-danger btn-sm rounded-pill waves-effect waves-light">
                          Hapus
                        </button>
                      </form>
                    </td>
                  </tr>
              @empty
                  <tr>
                    <td class="text-center fw-bold" colspan="3">Tidak ada Sertifikat!</td>
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