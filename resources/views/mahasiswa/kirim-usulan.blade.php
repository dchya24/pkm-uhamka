@extends('mahasiswa.template.layout')
@section("title", "Kirim Usulan | Mahasiswa")

@section('body')
  <!-- Main Content -->
  <div class="container-xxl flex-grow-0 container-p-y">
    <div class="col-md-12">
      
    <!-- stepper usulan -->
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-sm-row mb-4 justify-content-center">
          <li class="nav-item">
            <a class="nav-link active" href="M_Substansi_status.html"><i class="mdi me-1 mdi-20px"></i>USULAN 1</a>
          </li>
        </ul>
      </div>
    </div>

    <!--main-->
      <div class="h-100">
        <div class="col-12 mb-4">
          <div class="bs-stepper wizard-numbered mt-2">
            <div class="bs-stepper-header">
              <div class="step" data-target="#data-usulan">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle"><i class="mdi mdi-check"></i></span>
                  <span class="bs-stepper-label">
                    <span class="bs-stepper-number">01</span>
                    <span class="d-flex flex-column gap-1 ms-2">
                      <span class="bs-stepper-title">Data usulan</span>
                      <span class="bs-stepper-subtitle">Pastikan tidak salah</span>
                    </span>
                  </span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#substansi-usulan">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle"><i class="mdi mdi-check"></i></span>
                  <span class="bs-stepper-label">
                    <span class="bs-stepper-number">02</span>
                    <span class="d-flex flex-column gap-1 ms-2">
                      <span class="bs-stepper-title">Substansi usulan</span>
                      <span class="bs-stepper-subtitle">Tahap 1</span>
                    </span>
                  </span>
                </button>
              </div>
            </div>
            <div class="bs-stepper-content">
              <form action="{{ route('mahasiswa.usulan.store')}}" method="POST" enctype="multipart/form-data">
                <!-- Proposal Details -->
                <div id="data-usulan" class="content">
                  <div class="content-header mb-3">
                    <h5 class="mb-0 pb-3">Data usulan </h5>    
                                                  
                    <p class="font-weight-bold my-3">
                        Catatan : <br />1. Batas anggaran usulan
                        Rp.5.000.000 - Rp.12.000.000
                        <br />
                        2. Lembar bimbingan wajib tanda tangan basah <br />
                        3. Kosongkan data anggota berikutnya, jika data anggota sudah cukup
                    </p>   
                    <hr>                                
                  </div>
                  <div class="card-body">
                      <div class="row mb-3">
                          <label class="col-xl-2 col-form-label fw-bold" for="basic-default-email">Ketua Pengusul</label>
                          <div class="col-xl-6">
                            <div class="input-group pt-2">
                              <p>{{$user->mahasiswa->nim}}</p>
                              <p> &nbsp; / &nbsp; </p>
                              <p>{{$user->mahasiswa->nama}}</p>
                              <p> &nbsp; / &nbsp; </p>
                              <p>{{$user->mahasiswa->fakultas}}</p>
                              <p> &nbsp; / &nbsp; </p>
                              <p>{{$user->mahasiswa->prodi}}</p>
                            </div>
                          </div>
                          <div class="col-xl-8 d-flex pt-2">
                              
                          </div>
                      </div>           
                      
                      <div class="row mb-3">
                        <label class="col-xl-2 col-form-label fw-bold" for="basic-default-email">Anggota 1</label>
                        <div class="col-xl-2">
                          <div class="form-floating form-floating-outline">
                            <select
                              name="anggota_kelompok[]"
                              class="select2-nim form-select form-select-sm"
                              onchange="selectAnggota(event)"
                              id="anggota-1">
                              <option value="">NIM - NAMA</option>
                              @foreach ($dataMahasiswa as $item)
                                  <option
                                    value="{{$item->id}}"
                                    data-fakultas="{{$item->fakultas}}"
                                    data-prodi="{{$item->prodi}}"> 
                                    {{$item->nim}} - {{$item->nama}}
                                  </option>
                              @endforeach
                            </select>
                            <label>NIM</label>
                          </div>
                        </div>
                        <div class="col-xl-8 d-flex pt-2" id="result-anggota-1">
                        </div>
                      </div>  
                      <div class="row mb-3">
                        <label class="col-xl-2 col-form-label fw-bold" for="basic-default-email">Anggota 2</label>
                        <div class="col-xl-2">
                          <div class="form-floating form-floating-outline">
                            <select
                              name="anggota_kelompok[]"
                              class="select2-nim form-select form-select-sm"
                              onchange="selectAnggota(event)"
                              id="anggota-2">
                              <option value="">NIM - NAMA</option>
                              @foreach ($dataMahasiswa as $item)
                                  <option
                                    value="{{$item->id}}"
                                    data-fakultas="{{$item->fakultas}}"
                                    data-prodi="{{$item->prodi}}"> 
                                    {{$item->nim}} - {{$item->nama}}
                                  </option>
                              @endforeach
                            </select>
                            <label>NIM</label>
                          </div>
                        </div>
                        <div class="col-xl-8 d-flex pt-2" id="result-anggota-2">
                        </div>
                      </div>  
                      <div class="row mb-3">
                        <label class="col-xl-2 col-form-label fw-bold" for="basic-default-email">Anggota 3</label>
                        <div class="col-xl-2">
                          <div class="form-floating form-floating-outline">
                            <select
                              name="anggota_kelompok[]"
                              class="select2-nim form-select form-select-sm"
                              onchange="selectAnggota(event)"
                              id="anggota-3">
                              <option value="">NIM - NAMA</option>
                              @foreach ($dataMahasiswa as $item)
                                  <option
                                    value="{{$item->id}}"
                                    data-fakultas="{{$item->fakultas}}"
                                    data-prodi="{{$item->prodi}}"> 
                                    {{$item->nim}} - {{$item->nama}}
                                  </option>
                              @endforeach
                            </select>
                            <label>NIM</label>
                          </div>
                        </div>
                        <div class="col-xl-8 d-flex pt-2" id="result-anggota-3">
                        </div>
                      </div>  
                      <div class="row mb-3">
                        <label class="col-xl-2 col-form-label fw-bold" for="basic-default-email">Anggota 4</label>
                        <div class="col-xl-2">
                          <div class="form-floating form-floating-outline">
                            <select
                              name="anggota_kelompok[]"
                              class="select2-nim form-select form-select-sm"
                              onchange="selectAnggota(event)"
                              id="anggota-4">
                              <option value="">NIM - NAMA</option>
                              @foreach ($dataMahasiswa as $item)
                                  <option
                                    value="{{$item->id}}"
                                    data-fakultas="{{$item->fakultas}}"
                                    data-prodi="{{$item->prodi}}"> 
                                    {{$item->nim}} - {{$item->nama}}
                                  </option>
                              @endforeach
                            </select>
                            <label>NIM</label>
                          </div>
                        </div>
                        <div class="col-xl-8 d-flex pt-2" id="result-anggota-4">
                        </div>
                      </div>  

                      <div class="row mb-3">
                          <label class="col-xl-2 col-form-label fw-bold" for="basic-default-email">Dosem Pembimbing pengusul</label>
                          <div class="col-xl-2">
                            <div class="form-floating form-floating-outline">
                              <select
                                name="pembimbing_id"
                                class="select2-nim form-select form-select-sm"
                                onchange="selectPembimbing(event)"
                                id="anggota-5">
                                <option value="">NIDN - NAMA</option>
                                @foreach ($dataDosen as $item)
                                  <option
                                    value="{{$item->id}}"
                                    data-fakultas="{{$item->fakultas}}"
                                    data-prodi="{{$item->prodi}}"> 
                                    {{$item->nidn}} - {{$item->nama}}
                                  </option>
                              @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="col-xl-8 d-flex pt-2" id="result-pembimbing">
                        </div>
                      </div>     

                      <div class="row mb-3">
                        <label class="col-xl-2 col-form-label fw-bold"  for="basic-default-company">Skema PKM</label>
                        <div class="col-xl-10">
                          <div class="form-floating form-floating-outline">
                            <select
                              id="skema_pkm"
                              class="form-select form-select-xl w-25"
                              name="jenis_pkm_id"
                              data-allow-clear="true">
                              <option value="" selected>Singkatan - Jenis PKM</option>
                              @foreach ($jenisPkm as $item)
                                  <option value="{{$item->id}}">{{$item->singkatan}} - {{$item->nama_skema}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-xl-2 col-form-label fw-bold" for="basic-default-email"
                          >Tahun Pengajuan</label
                        >
                        <div class="col-xl-10">
                          <div class="input-group input-group-merge">
                            <input
                              type="text"
                              id="basic-default-email"
                              class="form-control"
                              name="tahun_pengajuan"
                              placeholder="Tahun Pengajuan"
                              value="2024"
                              disabled />
                          </div>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
                          >Anggaran yang diajukan</label
                        >
                        <div class="col-xl-10">
                          <input                                 
                            type="number"
                            name="anggaran"
                            class="form-control"
                            id="anggaran"
                            min="5000000"
                            max="12000000"
                            placeholder="37000000 (contoh)"/>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-xl-2 col-form-label fw-bold" for="basic-default-message"
                          >Unggah Lembar Bimbingan</label
                        >
                        <div class="col-xl-10">
                          <input class="form-control" type="file" id="formFile" name="lembar_bimbingan" />
                          <label for="">Maks.5 MB | Tipe File : PDF</label>
                        </div>
                      </div>

                      <div class="col-12 d-flex justify-content-between pt-3">
                        <button class="btn btn-outline-secondary btn-prev" type="button" disabled>
                          <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                          <span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
                        </button>
                        <button class="btn btn-primary btn-next" type="button">
                          <span class="align-middle d-sm-inline-block d-none me-sm-1">Selanjutnya</span>
                          <i class="mdi mdi-arrow-right"></i>
                        </button>
                      </div>
                  </div>
                </div>
                <!-- Substansi Info -->
                <div id="substansi-usulan" class="content">
                  <div class="content-header mb-3">
                      <h5 class="mb-0">Substansi usulan </h6>
                        <p class="pt-3">Status : <span class="badge rounded-pill bg-label-info text-md-end text-dark">Belum diusulkan</span> </p>
                        <Label>Unduh nilai : 
                        </Label>   
                        <hr>
                          <p class="font-weight-bold my-3">
                            Catatan : <br />1. Judul tidak boleh lebih dari 20 kata
                            <br />
                            2. Isian dari pendahuluan usulan terdiri dari : Masalah yang diangkat, tujuan, manfaat, dan inovasi dari usulan (Lebih ditekankan deskripsi usulan kamu)<br/>
                            3. Jabarkan secara rinci & jelas tugas setiap anggota dalam kinerja tim (Saran : Beban kerja setiap anggota sama)
                          </p>
                          <hr>
                  </div>
                  <div class="row mt-1">
                      <div class="row mb-3">
                          <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
                            >Judul Proposal
                          </label>
                          <div class="col-xl-10 ">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-name"
                              name="judul"
                              placeholder="Masukan Judul Proposal (Tidak boleh lebih dari 20 Kata)" />
                          </div>
                      </div>

                        <div class="row mb-3">
                          <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
                            >Pendahuluan usulan
                          </label>
                          <div class="col-xl-10">
                            <textarea
                              class="form-control"
                              id="exampleFormControlTextarea1"
                              name="pendahuluan"
                              rows="15"
                              placeholder="Isian disesuaikan dengan skema yang diusulkan"></textarea>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <hr>
                          <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
                            >Tugas Ketua Kelompok <p>{{$user->mahasiswa->nim}} <br>{{$user->mahasiswa->nama}}</p>
                          </label>
                          <div class="col-xl-10">
                            <textarea
                              class="form-control"
                              id="exampleFormControlTextarea1"
                              rows="10"
                              name="tugas_ketua"
                              placeholder="Jabarkan secara rinci & jelas tugas Ketua Kelompok!"></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
                            >Tugas Anggota 1 <p id="tugas-anggota-1"></p>
                          </label>
                          <div class="col-xl-10">
                            <textarea
                              class="form-control"
                              id="textarea-tugas-anggota-1"
                              rows="10"
                              name="tugas_anggota[]"
                              placeholder="Jabarkan secara rinci & jelas tugas anggota 1!" disabled></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
                            >Tugas Anggota 2 <p id="tugas-anggota-2"></p>
                          </label>
                          <div class="col-xl-10">
                            <textarea
                              class="form-control"
                              id="textarea-tugas-anggota-2"
                              rows="10"
                              name="tugas_anggota[]"
                              placeholder="Jabarkan secara rinci & jelas tugas anggota 2!" disabled></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
                            >Tugas Anggota 3 <p id="tugas-anggota-3"></p>
                          </label>
                          <div class="col-xl-10">
                            <textarea
                              class="form-control"
                              id="textarea-tugas-anggota-3"
                              rows="10"
                              name="tugas_anggota[]"
                              placeholder="Jabarkan secara rinci & jelas tugas anggota 3!" disabled></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
                            >Tugas Anggota 4 <p id="tugas-anggota-4"></p>
                          </label>
                          <div class="col-xl-10">
                            <textarea
                            class="form-control"
                            id="textarea-tugas-anggota-4"
                            rows="10"
                            name="tugas_anggota[]"
                              placeholder="Jabarkan secara rinci & jelas tugas anggota 4!" disabled></textarea>
                          </div>
                        </div>
                        <p>Catatan : Apabila anggota sudah cukup, isian tidak perlu diisi</p>
                    <div class="col-12 d-flex justify-content-between">
                      <button class="btn btn-outline-secondary btn-prev" type="button">
                        <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                        <span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
                      </button>
                      <button class="btn btn-primary">Kirim</button>
                    </div>
                  </div>
                </div>
                @csrf
              </form>
            </div>
          </div>
        </div>
        <!-- /Default Wizard -->
      </div>
    </div>
  </div>
  <!--/ Content -->


@endsection

@section('javascript')
  <!-- Vendors JS -->
  <script src="{{ url('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
  <script src="{{ url('assets/vendor/libs/swiper/swiper.js') }}"></script>

  <!-- Main JS -->
  <script src="{{ url('assets/js/main.js') }}"></script>

  <!-- Page JS -->
  <script src="{{ url('assets/js/dashboards-analytics.js') }}"></script>


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
  <!-- Vendors JS -->
  <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>

  <script>
    Swal.fire({
      title: "Info",
      text: "Batas anggaran usulan adalah Rp.5.000.000 - Rp.12.000.000",
      icon: "warning",
      showDenyButton: false,
      showCancelButton: false,
    });

    function selectAnggota(event){
      const resultId = event.srcElement.getAttribute('id');
      const target = event.target[event.target.selectedIndex];
      const id = target.getAttribute('data-id');
      const fakultas = target.getAttribute('data-fakultas');
      const prodi = target.getAttribute('data-prodi');
      const text = target.text.split("-")
      const nim = text[0].trim();
      const nama = text[1].trim();

      const preview = `${nama} / ${fakultas} / ${prodi}`;
      console.log(resultId, preview)

      document.getElementById(`result-${resultId}`).innerHTML = preview;
      document.getElementById(`tugas-${resultId}`).innerHTML = `${nim} <br> ${nama}`;
      document.getElementById(`textarea-tugas-${resultId}`).disabled = false;
    }

    function selectPembimbing(event){
      const target = event.target[event.target.selectedIndex];
      const id = target.getAttribute('data-id');
      const fakultas = target.getAttribute('data-fakultas');
      const prodi = target.getAttribute('data-prodi');
      const text = target.text.split("-")
      const nidn = text[0].trim();
      const nama = text[1].trim();

      const preview = `${nama} / ${fakultas} / ${prodi}`;
      console.log(preview)

      document.getElementById(`result-pembimbing`).innerHTML = preview;
    }

    // $(document).ready(function() {
      // FIXME Select 2 NIM Mahasiswa
      // TODO Select2 dosen
    //   $('.select2-nim').select2({
    //     dropdownParent: $(document.body),
    //     delay: 250,
    //     ajax: {
    //       url: "{{url('api/mahasiswa')}}",
    //       data: function (params) {
    //         var query = {
    //           search: params.term,
    //         }

    //         // Query parameters will be ?search=[term]&type=public
    //         return query;
    //       },
    //       processResults: function (data) {
    //         // Transforms the top-level key of the response object from 'items' to 'results'
    //         return {
    //             results: $.map(data.data, function (item) {
    //                 return {
    //                     text: `${item.nim} - ${item.nama}`,
    //                     id: item.nim
    //                 }
    //             })
    //         };
    //       }
    //     }
    //   });
    // });
  </script>
@endsection