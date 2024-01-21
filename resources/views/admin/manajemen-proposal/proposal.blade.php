@extends('admin.template.layout')

@section('body')
  <!-- Main Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      <div class="card-header">
        <h3 class="text-center pt-3">DATA PENGAJUAN PROPOSAL</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive text-nowrap">
          <table id="table-proposal" class="table table-bordered table-striped text-center">
            <thead>
              <tr class="text-bold">
                <th>Judul</th>
                <th>Aksi</th>
                <th>Jenis PKM</th>
                <th>Usulan</th>
                <th>Tahun Pengajuan</th>
                <th>Anggran yang diajukan</th>
                <th>Penilai Substansi</th>
                <th>Penilai Administrasi</th>
                <th>Peninjau</th>
                <th>Wakil rektor</th>
                <th>NIDN Dospem</th>
                <th>Dosen Pembimbing</th>
                <th>NIM Ketua Kelompok</th>
                <th>Nama Ketua Kelompok</th>                            
                <th>Tugas Ketua Kelompok</th>
                <th>NIM Anggota 1</th>     
                <th>Nama Angggota 1</th>
                <th>Tugas anggota 1</th>
                <th>NIM Anggota 2</th>
                <th>Nama Angggota 2</th>
                <th>Tugas anggota 2</th>
                <th>NIM Anggota 3</th>
                <th>Nama Angggota 3</th>
                <th>Tugas anggota 3</th>
                <th>NIM anggota 4</th>
                <th>Nama Angggota 4</th>
                <th>Tugas anggota 4</th>
                <th>Pendahuluan usulan</th>                          
                <th>Proposal</th>
                <th>Lembar Bimbingan</th>
                <th>Lembar Biodata Dosen Pembimbing</th>
                <th>Lembar Biodata Ketua & Anggota-anggota</th>                            
                <th>Lembar Pengesahan</th>
                <th>Ket.Substansi</th>
                <th>Ket.Administrasi</th>
                <th>Ket.Peninjau</th>
                <th>Nilai Substansi</th>
                <th>Nilai Administrasi</th>
                <th>Nilai Peninjau</th>
                <th>Komentar peninjau mahasisawa</th>
                <th>Komentar peninjau wakil rektor</th>
                <th>Penyaluran</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($usulan as $item)
                <tr>
                  <td>{{$item->judul}}</td>
                  <td>
                    <a href="{{route('admin.manajemen-proposal.proposal-detail', $item->id)}}" type="button" class="btn rounded-pill btn-primary btn-xs">
                      Detail
                    </a>
                    <form action="{{route('admin.manajemen-proposal.proposal-delete')}}" name="delete-proposal-{{$item->id}}" class="form-inline m-0" method="POST">
                      @csrf
                      @method('DELETE')
                      <input type="hidden" name="id" value="{{$item->id}}">
                    </form>
                    <button class="btn btn-danger rounded-pill btn-xs mt-1" data-form_name="delete-proposal-{{$item->id}}" onclick="confirmDelete(this)">
                      Delete
                    </button>
                  </td>
                  <td>{{$item->jenisPkm->singkatan}}</td>
                  <td>Usulan {{$item->usulan}}</td>
                  <td>{{$item->tahun_pengajuan}}</td>
                  <td>{{formatRupiah($item->anggaran, true)}}</td>
                  <td>
                    @if($item->penilaiSubstansi)
                      {{$item->penilaiSubstansi->nama}}
                    @endif
                  </td>
                  <td>
                    @if($item->penilaiAdministrasi)
                      {{$item->penilaiAdministrasi->nama}}
                    @endif
                  </td>
                  <td>
                    @if($item->penilaiPeninjau)
                      {{$item->penilaiPeninjau->dosen->nama}}
                    @endif
                  </td>
                  <td>
                    @if($item->wakilRektor)
                      {{$item->wakilRektor->nama}}
                    @endif
                  </td>
                  <td>
                    @if($item->pembimbing)
                      {{$item->pembimbing->nidn}}
                    @endif
                  </td>
                  <td>
                    @if($item->pembimbing)
                      {{$item->pembimbing->nama}}
                    @endif
                  </td>
                  <td>
                    @if($item->ketuaKelompok)
                      {{$item->ketuaKelompok->nim}}
                    @endif
                  </td>
                  <td>
                    @if($item->ketuaKelompok)
                      {{$item->ketuaKelompok->nama}}
                    @endif
                  </td>
                  <td>
                      {{$item->tugas_ketua_kelompok}}
                  </td>
                  <td>
                    @if($item->getAnggotaSatu())
                      {{$item->getAnggotaSatu()->nim}}
                    @endif
                  </td>
                  <td>
                    @if($item->getAnggotaSatu())
                      {{$item->getAnggotaSatu()->nama}}
                    @endif
                  </td>
                  <td>
                      {{$item->tugas_anggota_satu}}
                  </td>
                  
                  <td>
                    @if($item->getAnggotaDua())
                      {{$item->getAnggotaDua()->nim}}
                    @endif
                  </td>
                  <td>
                    @if($item->getAnggotaDua())
                      {{$item->getAnggotaDua()->nama}}
                    @endif
                  </td>
                  <td>
                      {{$item->tugas_anggota_dua}}
                  </td>
                  <td>
                    @if($item->getAnggotaTiga())
                      {{$item->getAnggotaTiga()->nim}}
                    @endif
                  </td>
                  <td>
                    @if($item->getAnggotaTiga())
                      {{$item->getAnggotaTiga()->nama}}
                    @endif
                  </td>
                  <td>
                      {{$item->tugas_anggota_tiga}}
                  </td>
                  <td>
                    @if($item->getAnggotaTiga())
                      {{$item->getAnggotaEmpat()->nim}}
                    @endif
                  </td>
                  <td>
                    @if($item->getAnggotaEmpat())
                      {{$item->getAnggotaEmpat()->nama}}
                    @endif
                  </td>
                  <td>
                      {{$item->tugas_anggota_empat}}
                  </td>
                  <td>{{$item->pendahuluan}}</td>
                  <td>
                    <a href=
                      "@if($item->lembar_proposal) {{url($item->lembar_proposal)}} @else # @endif" 
                      target="_blank" rel="noopener noreferrer">
                      Unduh
                    </a>
                  </td>
                  <td>
                    <a href=
                      "@if($item->lembar_bimbingan) {{url($item->lembar_bimbingan)}} @else # @endif" 
                      target="_blank" rel="noopener noreferrer">
                      Unduh
                    </a>
                  </td>
                  <td>
                    <a href=
                      "@if($item->lembar_biodata_dospem) {{url($item->lembar_biodata_dospem)}} @else # @endif" 
                      target="_blank" rel="noopener noreferrer">
                      Unduh
                    </a>
                  </td>
                  <td>
                    <a href=
                      "@if($item->lembar_biodata_kelompok) {{url($item->lembar_biodata_kelompok)}} @else # @endif" 
                      target="_blank" rel="noopener noreferrer">
                      Unduh
                    </a>
                  </td>
                  <td>
                    <a href=
                      "@if($item->lembar_pengesahan) {{url($item->lembar_pengesahan)}} @else # @endif" 
                      target="_blank" rel="noopener noreferrer">
                      Unduh
                    </a>
                  </td>
                  <td>
                    {{$item->status_penilaian_substansi}}
                  </td>
                  <td>
                    {{$item->status_penilaian_administrasi}}
                  </td>
                  <td>
                    {{$item->status_penilaian_peninjau}}
                  </td>
                  <td>
                    <a href=
                      "@if($item->form_penilaian_substansi) {{url($item->form_penilaian_substansi)}} @else # @endif" 
                      target="_blank" rel="noopener noreferrer">
                      Unduh
                    </a>
                  </td>
                  <td>
                    <a href=
                      "@if($item->form_penilaian_administrasi) {{url($item->form_penilaian_administrasi)}} @else # @endif" 
                      target="_blank" rel="noopener noreferrer">
                      Unduh
                    </a>
                  </td>
                  <td>
                    <a href=
                      "@if($item->form_penilaian_peninjau) {{url($item->form_penilaian_peninjau)}} @else # @endif" 
                      target="_blank" rel="noopener noreferrer">
                      Unduh
                    </a>
                  </td>
                  <td>
                    {{$item->komentar_ke_mahasiswa}}
                  </td>
                  <td>
                    {{$item->komentar_ke_warek}}
                  </td>
                  <td>
                    {{$item->status_rekomendasi}}
                  </td>
                </tr>
            @empty
                <tr>
                  <td class="fw-bold" colspan="12">
                    Belum ada usulan!
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
      function confirmDelete(e){
        // e.preventDefault()

        form_name = e.attributes['data-form_name'].value

        Swal.fire({
          title: 'Apakah anda yakin?',
          text: "Data yang dihapus tidak dapat dikembalikan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Ya, hapus!',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.isConfirmed) {
            document.forms[form_name].submit()
          }
        
        })
      }

      $(document).ready(function(){
        window.array = []
        for(var i = 2; i <= 41; i++){
          window.array.push(i);
        }
        $('#table-proposal').DataTable({
          responsive: true,
          lengthChange: false,
          autoWidth: false,
          searching: true,        
          dom: 'Bfrtip',
          buttons: [
              {
                extend: 'excel',
                exportOptions: {
                    columns: [0, ...window.array], // Adjust the column indices as needed
                    format: {
                        body: function ( data, row, column, node ) {
                            // Strip $ from salary column to make it numeric
                            var match = /<a.*?>(.*?)<\/a>/i.exec(node);

                            if(match){
                              console.log(match);
                              return match[1]
                            }
                            
                            return data
                        }
                    }
                },
                customizeData: function (data) {
                    // Iterate over the rows in the exported data
                    data.body.forEach(function (row) {
                      const linkArrayIndex = [27,28,29,30,31,35,36,37];

                      linkArrayIndex.forEach(function(index){
                        
                        // Assuming the column index is 1 (adjust as needed)
                        var htmlString = row[index];
                        var parser = new DOMParser();

                        // Parse the string into a DOM document
                        var doc = parser.parseFromString(htmlString, 'text/html');

                        // Get the first element in the document
                        var element = doc.body.firstChild;

                        // Now 'element' is a DOM element that you can use
                        console.log(element.attributes.href.value.trim());
                        row[index] = element.attributes.href.value.trim();
                      })

                    });
                  }
              }
          ]
        })
        .buttons()
        .container()
        .appendTo('#table-sertifikat_wrapper .col-md-6:eq(0)');
      })
    </script>
  @endsection
@endsection