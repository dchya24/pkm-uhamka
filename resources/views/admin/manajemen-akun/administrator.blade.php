@extends('admin.template.layout')
@section("title", "Admin |  Akun Administrator")

@section('body')
  <!-- Main Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      <div class="card-header">
        <div class="row pt-3">
          <div class="col-sm">
            <h4 class="">Data Akun Administrator</h4>
          </div>
          <div class="col-sm">

            <button
              type="button"
              class="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#Tambah_Akunadmin"
              style="float: right">
              Tambahkan Akun Administrator
            </button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="table-admin" class="table table-bordered table-striped text-center">
            <thead>
              <tr class="text-center">
                <th>Username</th>
                <th>Nama</th>
                <th width="25%">Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @forelse ($data as $item)
                  <tr>
                    <td class="text-center">{{ $item->username }}</td>
                    <td class="text-center">{{ $item->nama }}</td>
                    <td>
                      <button
                        onclick="openModal(event)"
                        type="button"
                        class="btn btn-sm rounded-pill btn-primary waves-effect waves-light"
                        data-bs-toggle="modal"
                        data-bs-target="#edit-administrator"
                        data-id="{{$item->id}}"
                        data-nama="{{$item->nama}}"
                        data-username="{{$item->username}}">
                        Edit
                      </button>
    
                      <form action="{{ route('admin.manajemen-akun.administrator.delete', $item->id) }}" method="POST" class="d-inline">
                        {{csrf_field()}}
                        @method('delete')
                        <button type="submit" class="btn btn-sm rounded-pill btn-danger waves-effect waves-light">
                          Hapus
                        </button>
                      </form>
                    </td>
                  </tr>
              @empty
                  <tr>
                    <td colspan="3">Empty!</td>
                  </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--/ Content -->

  @include('admin.component.manajemen-akun.modal-add-administrator')
  @include('admin.component.manajemen-akun.modal-edit-administrator')
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
      function submitAdd(e){
        e.preventDefault();
        e.target.disabled = true;

        if(document.getElementById("add-administrator").checkValidity()){
          document.getElementById("add-administrator").submit();
        }
        else {
          Swal.fire({
            title: "Oops!",
            text: "Tidak Boleh Ada Data Yang Kosong",
            icon: "error",
          });
          e.target.disabled = false;
        }
      }

      function submitEdit(e){
        e.preventDefault();
        e.target.disabled = true;
        if(document.getElementById("edit_administrator").checkValidity()){
          document.getElementById("edit_administrator").submit();
        }
        else {
          Swal.fire({
            title: "Oops!",
            text: "Tidak Boleh Ada Data Yang Kosong",
            icon: "error",
          });
          e.target.disabled = false;
        }
      }

      function openModal(event){
        event.preventDefault();
        const username = event.target.getAttribute('data-username');
        const id = event.target.getAttribute('data-id');
        const nama = event.target.getAttribute('data-nama');

        document.getElementById("edit_username").value = username;
        document.getElementById("edit_nama").value = nama;
        const url = window.BASE_URL + `/administrator/manajemen-akun/administrator/${id}/update`;

        document.forms["edit_administrator"].action = url;
      }

      $(function () {
        $('#table-admin').DataTable({
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
      })
    </script>
@endsection