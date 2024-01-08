@extends('admin.template.layout')

@section('body')
    <!-- Main Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center pt-3">Manajemen Akses Halaman</h3>
        </div>
        <div class="card-body">
          <span
            >Catatan : Fitur ini untuk Mengaktifkan / non aktif fungsi fungsi yang tersedia untuk mahasiswa /
            tim penilai
          </span>

          <!-- TABLE USULAN-->
          <div class="table-responsive border rounded my-4">
            <table class="table">
              <thead class="table-light text-center">
                <tr>
                  <th class="text-nowrap fw-medium ">Usulan</th>
                  <th class="text-nowrap fw-medium ">Buka usulan</th>
                  <th class="text-nowrap fw-medium ">Ubah Nilai Substansi</th>
                  <th class="text-nowrap fw-medium ">Ubah Nilai Administrasi</th>
                  <th class="text-nowrap fw-medium ">Ubah nilai peninjauan</th>
                  <th class="text-nowrap fw-medium ">Ubah nilai rekomendasi</th>
                </tr>
              </thead>
              <tbody class="justify-content-center align-middle text-center">
                <form action="{{route('admin.akses-halaman.update')}}" method="POST" name="akses-halaman">
                  @foreach ($aksesHalaman as $item)
                      <tr>
                        <td>
                          {{ $item->usulan }}
                        </td>
                        <td>
                          <input
                            class="form-check-input"
                            type="checkbox" value="1"
                            name="{{$item->slug}}__buka_usulan"
                            id="flexCheckDefault" 
                            {{ $item->buka_usulan == 1 ? 'checked' : '' }} />
                        </td>
                        <td>
                          <input
                            class="form-check-input"
                            type="checkbox" value="1"
                            name="{{$item->slug}}__ubah_nilai_substansi"
                            id="flexCheckDefault" 
                            {{ $item->ubah_nilai_substansi == 1 ? 'checked' : '' }} />
                        </td>
                        <td>
                          <input
                            class="form-check-input"
                            type="checkbox" value="1"
                            name="{{$item->slug}}__ubah_nilai_administrasi"
                            id="flexCheckDefault" 
                            {{ $item->ubah_nilai_administrasi == 1 ? 'checked' : '' }} />
                        </td>
                        <td>
                          <input
                            class="form-check-input"
                            type="checkbox" value="1"
                            name="{{$item->slug}}__ubah_nilai_peninjauan"
                            id="flexCheckDefault" 
                            {{ $item->ubah_nilai_peninjauan == 1 ? 'checked' : '' }} />
                        </td>
                        <td>
                          <input
                            class="form-check-input"
                            type="checkbox" value="1"
                            name="{{$item->slug}}__ubah_rekomendasi"
                            id="flexCheckDefault" 
                            {{ $item->ubah_rekomendasi == 1 ? 'checked' : '' }} />
                        </td>
                      </tr>
                  @endforeach
                  @csrf
                </form>
              </tbody>
            </table>
          </div>                  
          <div class="pb-5">
            <button 
              type="button" 
              class="btn rounded-pill btn-primary" 
              style="float: right;"
              onclick="document.forms['akses-halaman'].submit()">
              Ubah Akses
            </button> 
          </div>
        </div>
          <br>
          <hr>
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
@endsection