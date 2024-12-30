@extends('admin.template.layout')
@section("title", "Admin | Data Mahasiswa Sistem PKM")

@section("body")
  @include('admin.component.data-mahasiswa.add')
  @include('admin.component.data-mahasiswa.import')
  @include('admin.component.data-mahasiswa.update')

  <!-- Main Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      <div class="card-header">
        <div class="row pt-3">
          <div class="col-sm">
            <h4 class="">Data mahasiswa sistem PKM</h4>
          </div>
          <div class="col-sm">                      
            <button
              type="button"
              class="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#Tambah_Akunmahasiswa"
              style="float: right">
              Tambahkan Data Mahasiswa
            </button>

            <button
              type="button"
              class="btn btn-dark "
              data-bs-toggle="modal"
              data-bs-target="#importdatamahasiswa"
              style="float: right">
              Import Data Mahasiswa
            </button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="data-mahasiswa" class="table table-bordered table-striped text-center">
            <thead>
              <tr class="text-center">
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Fakultas</th>
                <th>Program Studi</th>
                <th>Keterangan</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              {{-- @forelse ($mahasiswa as $item)
                  <tr class="text-center">
                    <td>{{$item->nim }}</td>
                    <td> {{$item->nama}} </td>
                    <td> {{$item->fakultas}} </td>
                    <td> {{$item->prodi}} </td>
                    <td>
                      @if ($item->keterangan == 1)
                          Aktif
                      @else
                          Tidak Aktif
                      @endif 
                    </td>
                    <td>
                      <button
                        type="button"
                        class="btn btn-sm rounded-pill btn-primary waves-effect waves-light"
                        onclick="openModal(event)"
                        data-bs-toggle="modal"
                        data-bs-target="#edit_mahasiswa"
                        data-nim="{{$item->nim}}"
                        data-nama="{{$item->nama}}"
                        data-fakultas="{{$item->fakultas}}"
                        data-prodi="{{$item->prodi}}"
                        data-keterangan="{{$item->keterangan}}"
                      >
                        Edit
                      </button>

                      <form 
                        action="{{route('admin.data-mahasiswa.delete', $item->nim)}}" 
                        method="POST"
                        id="delete-mahasiswa-{{$item->id}}">
                        {{ csrf_field() }}
                        @method('delete')
                        <button type="button" onclick="confirm({{$item->id}})" class="btn btn-sm rounded-pill btn-danger waves-effect waves-light mt-1">
                            Hapus
                        </button>
                      </form>
                    </td>
                    
                  </tr>
              @empty
                  <tr>
                    <td colspan="5" class="text-center"> No Data! </td>
                  </tr>
              @endforelse --}}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--/ Content -->
@endsection

@section("javascript")
    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
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
    
    <!-- Page JS -->
  <script src="{{ asset('assets/js/forms-editors.js') }}"></script>
  <script src="{{ asset('assets/js/forms-file-upload.js') }}"></script>
  <script src="{{ asset('dist2/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
  
  <script>
    function confirm(id){
      Swal.fire({
        title: "Apakah yakin menghapus data mahasiswa ini?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: "Hapus"
      })
      .then((result) => {
        if(result.isConfirmed){
          document.getElementById(`delete-mahasiswa-${id}`).submit();
          return true;
        }
        else{
          return false;
        }
      })
    }

    function openModal(event){
      event.preventDefault();
      const nim = event.target.getAttribute('data-nim');
      const nama = event.target.getAttribute('data-nama');
      const fakultas = event.target.getAttribute('data-fakultas');
      const prodi = event.target.getAttribute('data-prodi');
      const keterangan = event.target.getAttribute('data-keterangan');

      document.getElementById("edit_nim").value = nim;
      document.getElementById("edit_nama").value = nama;
      document.getElementById("edit_fakultas").value = fakultas;
      document.getElementById("edit_prodi").value = prodi;
      document.getElementById("edit_keterangan").value = keterangan;
      const url = window.BASE_URL + `/administrator/data-mahasiswa/${nim}/update`;

      document.forms["form-edit"].action = url;
    }

    function submitAdd(e){
      e.preventDefault();
      e.target.disabled = true;

      if(document.getElementById("form-add").checkValidity()){
        document.getElementById("form-add").submit();
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

      if(document.forms["form-edit"].checkValidity()){
        document.forms["form-edit"].submit();
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

    function importData(e){
      e.preventDefault();
      e.target.disabled = true;

      if(document.forms['import-mahasiswa'].checkValidity()){
        document.forms['import-mahasiswa'].submit()
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

    $(document).ready(function() {
      $('#data-mahasiswa').DataTable({
        "serverSide": true,
        "ajax": {
          "url": "{{ route('api.data.mahasiswa') }}",
          "dataSrc": function ( json ) {      
            return json.data.data;
          }
        },
        "columns": [
          { "data": "nim" },
          { "data": "nama" },
          { "data": "fakultas" },
          { "data": "prodi" },
          { "data": "keterangan" },
          { "data": "keterangan" }
        ],
        "paging": true,
        "processing": true,
        "searching": true,
        "ordering": true,
        "language": {
          "paginate": {
            "next": '<span class="p-1">Selanjutnya</span>',
            "previous": '<span class="p-1">Sebelumnya</span>'
          }
        }
      });
    });
  </script>

  @endsection