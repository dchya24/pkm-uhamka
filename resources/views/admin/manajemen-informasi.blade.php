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
                  <h4 class="card-tile mb-0">Pengelolaan data distribusi Informasi</h5>
                </div>
                <div class="col-sm">                            
                  <button
                    type="button"
                    class="btn btn-primary waves-effect waves-light"
                    data-bs-toggle="modal"
                    data-bs-target="#Tambah_Informasi"
                    style="float: right">
                    Tambahkan Informasi
                  </button>
                </div>
              </div>
            </div>

            <div class="card-body">
              <div class="">
                <table id="example1" class="table table-bordered table-striped text-center pt-3">
                  <thead>
                    <tr class="text-bold">
                      <th>Judul</th>
                      <th>Dikirim kepada</th>
                      <th>Isi</th>
                      <th>File</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($informasi as $item)
                      <tr>
                        <td>{{$item->judul}}</td>
                        <td>{{$item->dikirimKepada()}}</td>
                        <td>{!! $item->description !!}</td>
                        <td>
                          @if($item->file !== "")
                            <a href="{{url($item->file)}}" class="btn rounded-pill btn-primary btn-sm" type="button" download>
                              <i class="mdi mdi-file"></i>
                              Unduh
                            </a>
                          @endif
                        </td>
                        <td class="">
                          <button
                            type="button"
                            class="btn btn-sm rounded-pill btn-info waves-effect waves-light w-100"
                            onclick="openEdit()"
                            data-bs-toggle="modal"
                            data-bs-target="#Edit_Informasi"
                            data-id="{{$item->id}}"
                            data-judul="{{$item->judul}}"
                            data-description="{{$item->description}}"
                            data-untuk_mahasiswa="{{$item->untuk_mahasiswa}}"
                            data-untuk_substansi="{{$item->untuk_substansi}}"
                            data-untuk_administrasi="{{$item->untuk_administrasi}}"
                            data-untuk_peninjau="{{$item->untuk_peninjau}}"
                            data-untuk_warek="{{$item->untuk_warek}}">
                            Ubah
                          </button>
                          <form action="{{route('admin.informasi.delete', $item->id)}}" class="mt-1" method="POST">
                            @method("DELETE")
                            @csrf
                            <button
                            type="submit"
                            class="btn btn-sm rounded-pill btn-danger waves-effect waves-light w-100">
                            Hapus
                          </button>
                        </form>
                        </td>
                      </tr>
                    @empty
                        <tr>
                          <td class="text-center font-weight-bold" colspan="5">
                            Tidak ada Data!
                          </td>
                        </tr>
                    @endforelse
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

  @include('admin.component.modal-add-informasi')
  @include('admin.component.modal-edit-informasi')

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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  function submit(){
    const descriptionText = window.quillDescription.root.innerHTML;
    const description = document.querySelector("input[name='description']");
    const judul = document.getElementById("input_judul").value;
    description.value = descriptionText;

    const arrTo = ["mahasiswa", "penilai_substansi", "penilai_administrasi", "peninjau", "warek"];

    countChecked = 0;
    arrTo.forEach((item) => {
      const checkbox = document.querySelector(`input[name='untuk_${item}']`);;
      if(checkbox.checked){
        countChecked++;
      }
    })

    if(
      (descriptionText === "" || descriptionText === "<p><br></p>")
      || (judul == "" || judul == null || countChecked == 0)
    ){
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Data tidak boleh kosong!',
      })

      return false;
    }

    document.forms['Tambah_Informasi'].submit() ;
  }

  function openEdit(){
    const editDescriptionText = window.quillEditDescription;

    const id = event.target.getAttribute('data-id');
    const judul = event.target.getAttribute('data-judul');
    const description = event.target.getAttribute('data-description');
    const untuk_mahasiswa = event.target.getAttribute('data-untuk_mahasiswa');
    const untuk_substansi = event.target.getAttribute('data-untuk_substansi');
    const untuk_administrasi = event.target.getAttribute('data-untuk_administrasi');
    const untuk_peninjau = event.target.getAttribute('data-untuk_peninjau');
    const untuk_warek = event.target.getAttribute('data-untuk_warek');

    editDescriptionText.root.innerHTML = description;
    document.getElementById("edit_judul").value = judul;
    document.getElementById("edit_untuk_mahasiswa").checked = untuk_mahasiswa;
    document.getElementById("edit_untuk_substansi").checked = untuk_substansi;
    document.getElementById("edit_untuk_administrasi").checked = untuk_administrasi;
    document.getElementById("edit_untuk_peninjau").checked = untuk_peninjau;
    document.getElementById("edit_untuk_warek").checked = untuk_warek;

    const url = window.BASE_URL + `/administrator/informasi/${id}/update`;
    document.forms["update_informasi"].action = url;
  }

  function submitEdit(){
    const descriptionText = window.quillEditDescription.root.innerHTML;
    const description = document.querySelector("#edit_description_value");
    description.value = descriptionText

    document.forms['update_informasi'].submit() ;
  }
</script>
@endsection