@extends('admin.template.layout')
@section("title", "Admin | Data Dosen Sistem PKM")

@section('body')
  @include('admin.component.data-dosen.add')
  @include('admin.component.data-dosen.import')
  @include('admin.component.data-dosen.update')
  <!-- Main Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      <div class="card-header">
        <div class="row pt-3">
          <div class="col-sm">
            <h4 class="">Data dosen sistem PKM</h4>
          </div>
          <div class="col-sm">                      
            <button
              type="button"
              class="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#Tambah_Akunmahasiswa"
              style="float: right">
              Tambahkan Data Dosen
            </button>

            <button
              type="button"
              class="btn btn-dark "
              data-bs-toggle="modal"
              data-bs-target="#importdatamahasiswa"
              style="float: right">
              Import Data Dosen
            </button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
              <tr class="text-center">
                <th>NIDN/NIP</th>
                <th>Nama Lengkap</th>
                <th>Fakultas</th>
                <th>Program Studi</th>
                <th>Keterangan</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @forelse ($data as $item)
                  <tr>
                    <td>{{$item->nidn}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->fakultas}}</td>
                    <td>{{$item->prodi}}</td>
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
                        data-bs-target="#edit_dosen"
                        data-nidn="{{$item->nidn}}"
                        data-nama="{{$item->nama}}"
                        data-fakultas="{{$item->fakultas}}"
                        data-prodi="{{$item->prodi}}"
                        data-keterangan="{{$item->keterangan}}"
                      >
                        Edit
                      </button>

                      <form action=" {{route('admin.data-dosen.delete', $item->nidn)}}" method="POST" onsubmit="confirm()">
                        {{ csrf_field() }}
                        @method('delete')
                        <button type="submit" class="btn btn-sm rounded-pill btn-danger waves-effect waves-light mt-1">
                            Hapus
                        </button>
                      </form>
                    </td>
                  </tr>
              @empty
                  <tr>
                    <td class="text-center">
                      Empty!
                    </td>
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

  <!-- Bootstrap Switch -->
  <script src="{{ asset('dist2/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>

  <script>
      function openModal(event){
        event.preventDefault();
        const nidn = event.target.getAttribute('data-nidn');
        const nama = event.target.getAttribute('data-nama');
        const fakultas = event.target.getAttribute('data-fakultas');
        const prodi = event.target.getAttribute('data-prodi');
        const keterangan = event.target.getAttribute('data-keterangan');

        document.getElementById("edit_nidn").value = nidn;
        document.getElementById("edit_nama").value = nama;
        document.getElementById("edit_fakultas").value = fakultas;
        document.getElementById("edit_prodi").value = prodi;
        document.getElementById("edit_keterangan").value = keterangan;
        const url = window.BASE_URL + `/administrator/data-dosen/${nidn}/update`;

        document.forms["edit_dosen"].action = url;
      }

      function submitAdd(e){
        e.preventDefault();
        e.target.disabled = true;

        if(document.getElementById("add-dosen").checkValidity()){
          document.getElementById("add-dosen").submit();
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
  </script>
@endsection