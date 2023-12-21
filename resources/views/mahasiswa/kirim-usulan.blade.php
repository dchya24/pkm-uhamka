@extends('mahasiswa.template.layout')
@section("title", "Sertifikat | Mahasiswa")

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
              <form onSubmit="return false">
                <!-- Proposal Details -->
                <div id="data-usulan" class="content">
                  <div class="content-header mb-3">
                    <h5 class="mb-0 pb-3">Data usulan </h6>    
                                                  
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
                    <form>
                      <div class="row mb-3">
                          <label class="col-xl-2 col-form-label fw-bold" for="basic-default-email">Ketua Pengusul</label>
                          <div class="col-xl-6">
                            <div class="input-group pt-2">
                              <p>:&nbsp</p>
                              <p>1803015016</p>
                              <p>&nbsp /&nbsp</p>
                              <p>Iwan Mahyudin</p> 
                              <p>&nbsp /&nbsp</p>
                              <p>FKIP</p>
                              <p>&nbsp /&nbsp</p>
                              <p>Teknik Informatika</p>                                        
                            </div>
                          </div>
                          <div class="col-xl-8 d-flex pt-2">
                              
                          </div>
                      </div>           
                      
                      <div class="row mb-3">
                        <label class="col-xl-2 col-form-label fw-bold" for="basic-default-email">Anggota 1</label>
                        <div class="col-xl-2">
                          <div class="input-group input-group-merge">
                            <input
                              type="number"
                              id="basic-default-email"
                              class="form-control"
                              placeholder="NIM Ketua Pengusul" 
                              value="1803021231"/>
                          </div>
                        </div>
                        <div class="col-xl-8 d-flex pt-2">
                            <p>Iwan Mahyudin</p> 
                            <p>&nbsp /&nbsp</p>
                            <p>FKIP</p>
                            <p>&nbsp /&nbsp</p>
                            <p>Teknik Informatika</p>
                        </div>
                      </div>  
                      <div class="row mb-3">
                        <label class="col-xl-2 col-form-label fw-bold" for="basic-default-email">Anggota 2</label>
                        <div class="col-xl-2">
                          <div class="input-group input-group-merge">
                            <input
                              type="number"
                              id="basic-default-email"
                              class="form-control"
                              placeholder="NIM Ketua Pengusul" 
                              value="1803021231"/>
                          </div>
                        </div>
                        <div class="col-xl-8 d-flex pt-2">
                            <p>Iwan Mahyudin</p> 
                            <p>&nbsp /&nbsp</p>
                            <p>FKIP</p>
                            <p>&nbsp /&nbsp</p>
                            <p>Teknik Informatika</p>
                        </div>
                      </div>  
                      <div class="row mb-3">
                        <label class="col-xl-2 col-form-label fw-bold" for="basic-default-email">Anggota 3</label>
                        <div class="col-xl-2">
                          <div class="input-group input-group-merge">
                            <input
                              type="number"
                              id="basic-default-email"
                              class="form-control"
                              placeholder="NIM Ketua Pengusul" 
                              value="1803021231"/>
                          </div>
                        </div>
                        <div class="col-xl-8 d-flex pt-2">
                            <p>Iwan Mahyudin</p> 
                            <p>&nbsp /&nbsp</p>
                            <p>FKIP</p>
                            <p>&nbsp /&nbsp</p>
                            <p>Teknik Informatika</p>
                        </div>
                      </div>  
                      <div class="row mb-3">
                        <label class="col-xl-2 col-form-label fw-bold" for="basic-default-email">Anggota 4</label>
                        <div class="col-xl-2">
                          <div class="input-group input-group-merge">
                            <input
                              type="number"
                              id="basic-default-email"
                              class="form-control"
                              placeholder="NIM Ketua Pengusul" 
                              value="1803021231"/>
                          </div>
                        </div>
                        <div class="col-xl-8 d-flex pt-2">
                            <p>Iwan Mahyudin</p> 
                            <p>&nbsp /&nbsp</p>
                            <p>FKIP</p>
                            <p>&nbsp /&nbsp</p>
                            <p>Teknik Informatika</p>
                        </div>
                      </div>  

                      <div class="row mb-3">
                          <label class="col-xl-2 col-form-label fw-bold" for="basic-default-email">Dosem Pembimbing pengusul</label>
                          <div class="col-xl-2">
                            <div class="input-group input-group-merge">
                              <input
                                type="number"
                                id="basic-default-email"
                                class="form-control"
                                placeholder="NIP/NIDN Dosen Pengusul" 
                                value="2312121"/>
                            </div>
                          </div>
                          <div class="col-xl-8 d-flex pt-2">
                            <p>Laksano</p> 
                            <p>&nbsp /&nbsp</p>
                            <p>FT</p>
                            <p>&nbsp /&nbsp</p>
                            <p>TI</p>
                        </div>
                      </div>     

                      <div class="row mb-3">
                        <label class="col-xl-2 col-form-label fw-bold"  for="basic-default-company">Skema PKM</label>
                        <div class="col-xl-10">
                          <div class="form-floating form-floating-outline">
                            <select
                              id="select2Basic"
                              class="select2 form-select form-select-lg"
                              data-allow-clear="true">
                              <option value="AK">Alaska</option>
                              <option value="HI">Hawaii</option>
                              <option value="CA">California</option>
                              <option value="NV">Nevada</option>
                              <option value="OR">Oregon</option>
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
                            type="text"
                            class="form-control"
                            id="dengan-rupiah"
                            placeholder="37000000 (contoh)"
                            step="1" 
                            min="0" 
                            max="4"/>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label class="col-xl-2 col-form-label fw-bold" for="basic-default-message"
                          >Unggah Lembar Bimbingan</label
                        >
                        <div class="col-xl-10">
                          <input class="form-control" type="file" id="formFile" />
                          <label for="">Maks.5 MB | Tipe File : PDF</label>
                        </div>
                      </div>

                      <div class="col-12 d-flex justify-content-between pt-3">
                        <button class="btn btn-outline-secondary btn-prev" disabled>
                          <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                          <span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
                        </button>
                        <button class="btn btn-primary btn-next">
                          <span class="align-middle d-sm-inline-block d-none me-sm-1">Selanjutnya</span>
                          <i class="mdi mdi-arrow-right"></i>
                        </button>
                      </div>
                    </form>
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
                  <div class="row g-4">
                    <form>                                
                      <div class="row mb-3">
                          <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
                            >Judul Proposal
                          </label>
                          <div class="col-xl-10 ">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-name"
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
                              rows="15"
                              placeholder="Isian disesuaikan dengan skema yang diusulkan"></textarea>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <hr>
                          <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
                            >Tugas Ketua Kelompok <p>1803015016 <br> IWAN MAHYUDIN</p>
                          </label>
                          <div class="col-xl-10">
                            <textarea
                              class="form-control"
                              id="exampleFormControlTextarea1"
                              rows="10"
                              placeholder="Jabarkan secara rinci & jelas tugas Ketua Kelompok!"></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
                            >Tugas Anggota 1 <p>1803015016 <br> IWAN MAHYUDIN</p>
                          </label>
                          <div class="col-xl-10">
                            <textarea
                              class="form-control"
                              id="exampleFormControlTextarea1"
                              rows="10"
                              placeholder="Jabarkan secara rinci & jelas tugas anggota 1!"></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
                            >Tugas Anggota 2 <p>1803015016 <br> IWAN MAHYUDIN</p>
                          </label>
                          <div class="col-xl-10">
                            <textarea
                              class="form-control"
                              id="exampleFormControlTextarea1"
                              rows="10"
                              placeholder="Jabarkan secara rinci & jelas tugas anggota 2!"></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
                            >Tugas Anggota 3 <p>1803015016 <br> IWAN MAHYUDIN</p>
                          </label>
                          <div class="col-xl-10">
                            <textarea
                              class="form-control"
                              id="exampleFormControlTextarea1"
                              rows="10"
                              placeholder="Jabarkan secara rinci & jelas tugas anggota 3!"></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
                            >Tugas Anggota 4 <p>1803015016 <br> IWAN MAHYUDIN</p>
                          </label>
                          <div class="col-xl-10">
                            <textarea
                              class="form-control"
                              id="exampleFormControlTextarea1"
                              rows="10"
                              placeholder="Jabarkan secara rinci & jelas tugas anggota 4!"></textarea>
                          </div>
                        </div>
                        <p>Catatan : Apabila anggota sudah cukup, isian tidak perlu diisi</p>
                    </form>
                    <div class="col-12 d-flex justify-content-between">
                      <button class="btn btn-outline-secondary btn-prev">
                        <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                        <span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
                      </button>
                      <button class="btn btn-primary">Kirim</button>
                    </div>
                  </div>
                </div>
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

  <!-- DataTables  & Plugins -->
  <script src="{{ url('dist2/plugins/datatables/jquery.dataTables.js') }}"></script>
  <script src="{{ url('dist2/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ url('dist2/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ url('dist2/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ url('dist2/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ url('dist2/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ url('dist2/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ url('dist2/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ url('dist2/plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ url('dist2/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ url('dist2/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ url('dist2/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ url('dist2/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

  <!-- Page JS -->
  <script src="{{ url('dist2/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
  <script src="{{ url('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>

  <script>
    $(function () {
      $('#example1')
        .DataTable({
          responsive: true,
          lengthChange: false,
          autoWidth: false,
          searching: false
        })
        .buttons()
        .container()
        .appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
@endsection