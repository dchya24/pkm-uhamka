@extends('admin.template.layout')

@section('body')
<!-- Main Content -->
<div class="container-xxl flex-grow-0 container-p-y">
  <div class="col-md-12">
    <!-- stepper usulan -->
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-sm-row mb-4 justify-content-center">
          <li class="nav-item">
            <a class="nav-link active"><i class="mdi me-1 mdi-20px"></i>USULAN 1</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="h-100">
      <div class="col-12 mb-4">
        <div class="bs-stepper wizard-numbered mt-2">
          <div class="bs-stepper-header">
            {{-- Data Usulan --}}
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
            {{-- Subtansi Usulan --}}
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
            <div class="line"></div>
            {{-- Administrasi --}}
            <div class="step" data-target="#administrasi-usulan">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="mdi mdi-check"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-number">03</span>
                  <span class="d-flex flex-column gap-1 ms-2">
                    <span class="bs-stepper-title">Administrasi usulan</span>
                    <span class="bs-stepper-subtitle">Tahap 2</span>
                  </span>
                </span>
              </button>
            </div>
          </div>
          <div class="bs-stepper-content">
            <form 
            method="POST" 
            action="{{route('admin.manajemen-proposal.proposal-update', $usulan->id)}}" 
            name="form-usulan"
            enctype="multipart/form-data">    

              <!-- Proposal Details -->
              {{-- Data Usulam --}}
              <div id="data-usulan" class="content">
                <div class="content-header mb-3">
                  <h5 class="mb-0 pb-3">Data usulan </h6>                                                             
                                      
                </div>
                <div class="card-body">
                  <div class="row mb-3">
                      <label class="col-xl-2 col-form-label fw-bold" for="basic-default-email">Ketua Pengusul</label>
                      <div class="col-xl-6">
                        <div class="col-xl-10 d-flex">
                          <p>:&nbsp;{{$usulan->ketuaKelompok->nim}} &nbsp;</p>
                          <p>/&nbsp; {{$usulan->ketuaKelompok->nama}} &nbsp;</p>
                          <p>/&nbsp; {{$usulan->ketuaKelompok->fakultas}} &nbsp;</p>
                          <p>/&nbsp; {{$usulan->ketuaKelompok->prodi}} &nbsp;</p>
                        </div>
                      </div>
                  </div>           
                  
                  <div class="row mb-3">
                    <label class="col-xl-2 col-form-label fw-bold" for="basic-default-email">Anggota 1</label>
                    <div class="col-xl-2">
                      <select
                            name="anggota_kelompok[]"
                            class="select2-nim form-select"
                            onchange="selectAnggota(event)"
                            id="anggota-1">
                            <option value="">NIM - NAMA</option>
                            @foreach ($dataMahasiswa as $item)
                                <option
                                  value="{{$item->id}}"
                                  data-fakultas="{{$item->fakultas}}"
                                  data-nim="{{$item->nim}}"
                                  data-prodi="{{$item->prodi}}"
                                  @if($item->id == $usulan->getAnggotaSatu()->id)
                                  selected @endif> 
                                  {{$item->nim}} - {{$item->nama}}
                                </option>
                            @endforeach
                          </select>
                    </div>
                    <div class="col-xl-8 d-flex"  id="result-anggota-1">
                      :
                      @if($usulan->anggota_satu_id)
                        <p>&nbsp;{{$usulan->getAnggotaSatu()->nim}} &nbsp;</p>
                        <p>/&nbsp; {{$usulan->getAnggotaSatu()->nama}} &nbsp;</p>
                        <p>/&nbsp; {{$usulan->getAnggotaSatu()->fakultas}} &nbsp;</p>
                        <p>/&nbsp; {{$usulan->getAnggotaSatu()->prodi}} &nbsp;</p>
                      @endif
                    </div>
                  </div>  
                  <div class="row mb-3">
                    <label class="col-xl-2 col-form-label fw-bold" for="basic-default-email">Anggota 2</label>
                    <div class="col-xl-2">
                      <div class="input-group input-group-merge">
                        <select
                            name="anggota_kelompok[]"
                            class="select2-nim form-select"
                            onchange="selectAnggota(event)"
                            id="anggota-2">
                            <option value="">NIM - NAMA</option>
                            @foreach ($dataMahasiswa as $item)
                                <option
                                  value="{{$item->id}}"
                                  data-fakultas="{{$item->fakultas}}"
                                  data-nim="{{$item->nim}}"
                                  data-prodi="{{$item->prodi}}"
                                  @if($item->id == $usulan->getAnggotaDua()->id)
                                  selected @endif> 
                                  {{$item->nim}} - {{$item->nama}}
                                </option>
                            @endforeach
                          </select>
                      </div>
                    </div>
                    <div class="col-xl-8 d-flex" id="result-anggota-2">
                      :
                      @if($usulan->anggota_dua_id)
                        <p>&nbsp;{{$usulan->getAnggotaDua()->nim}} &nbsp;</p>
                        <p>/&nbsp; {{$usulan->getAnggotaDua()->nama}} &nbsp;</p>
                        <p>/&nbsp; {{$usulan->getAnggotaDua()->fakultas}} &nbsp;</p>
                        <p>/&nbsp; {{$usulan->getAnggotaDua()->prodi}} &nbsp;</p>
                      @endif
                    </div>
                  </div>  
                  <div class="row mb-3">
                    <label class="col-xl-2 col-form-label fw-bold" for="basic-default-email">Anggota 3</label>
                    <div class="col-xl-2">
                      <div class="input-group input-group-merge">
                        <select
                            name="anggota_kelompok[]"
                            class="select2-nim form-select"
                            onchange="selectAnggota(event)"
                            id="anggota-3">
                            <option value="">NIM - NAMA</option>
                            @foreach ($dataMahasiswa as $item)
                                <option
                                  value="{{$item->id}}"
                                  data-fakultas="{{$item->fakultas}}"
                                  data-nim="{{$item->nim}}"
                                  data-prodi="{{$item->prodi}}"
                                  @if($item->id == $usulan->getAnggotaTiga()->id)
                                  selected @endif> 
                                  {{$item->nim}} - {{$item->nama}}
                                </option>
                            @endforeach
                          </select>
                      </div>
                    </div>
                    <div class="col-xl-8 d-flex" id="result-anggota-3">
                      :
                      @if($usulan->anggota_tiga_id)
                        <p>&nbsp;{{$usulan->getAnggotaTiga()->nim}} &nbsp;</p>
                        <p>/&nbsp; {{$usulan->getAnggotaTiga()->nama}} &nbsp;</p>
                        <p>/&nbsp; {{$usulan->getAnggotaTiga()->fakultas}} &nbsp;</p>
                        <p>/&nbsp; {{$usulan->getAnggotaTiga()->prodi}} &nbsp;</p>
                      @endif
                    </div>
                  </div>  
                  <div class="row mb-3">
                    <label class="col-xl-2 col-form-label fw-bold" for="basic-default-email">Anggota 4</label>
                    <div class="col-xl-2">
                      <div class="input-group input-group-merge">
                        <select
                            name="anggota_kelompok[]"
                            class="select2-nim form-select"
                            onchange="selectAnggota(event)"
                            id="anggota-4">
                            <option value="">NIM - NAMA</option>
                            @foreach ($dataMahasiswa as $item)
                                <option
                                  value="{{$item->id}}"
                                  data-fakultas="{{$item->fakultas}}"
                                  data-nim="{{$item->nim}}"
                                  data-prodi="{{$item->prodi}}"
                                  @if($item->id == $usulan->getAnggotaEmpat()->id)
                                  selected @endif> 
                                  {{$item->nim}} - {{$item->nama}}
                                </option>
                            @endforeach
                          </select>
                      </div>
                    </div>
                    <div class="col-xl-8 d-flex" id="result-anggota-4">
                      :
                      @if($usulan->anggota_empat_id)
                        <p>&nbsp;{{$usulan->getAnggotaEmpat()->nim}} &nbsp;</p>
                        <p>/&nbsp; {{$usulan->getAnggotaEmpat()->nama}} &nbsp;</p>
                        <p>/&nbsp; {{$usulan->getAnggotaEmpat()->fakultas}} &nbsp;</p>
                        <p>/&nbsp; {{$usulan->getAnggotaEmpat()->prodi}} &nbsp;</p>
                      @endif
                    </div>
                  </div>  

                  <div class="row mb-3">
                      <label class="col-xl-2 col-form-label fw-bold" for="basic-default-email">Dosem Pembimbing pengusul</label>
                      <div class="col-xl-2">
                        <div class="input-group input-group-merge">
                          <select
                                name="pembimbing_id"
                                class="select2-nim form-select "
                                onchange="selectPembimbing(event)"
                                id="anggota-5">
                                <option value="">NIDN - NAMA</option>
                                @foreach ($dataDosen as $item)
                                  <option
                                    value="{{$item->id}}"
                                    data-fakultas="{{$item->fakultas}}"
                                    data-prodi="{{$item->prodi}}"
                                    @if($item->id == $usulan->pembimbing_id)
                                    selected @endif> 
                                    {{$item->nidn}} - {{$item->nama}}
                                  </option>
                              @endforeach
                              </select>
                        </div>
                      </div>
                      <div class="col-xl-8 d-flex pt-2" id="result-pembimbing">
                        <p>:&nbsp;{{$usulan->pembimbing->nidn}} &nbsp;</p>
                        <p>/&nbsp; {{$usulan->pembimbing->nama}} &nbsp;</p>
                        <p>/&nbsp; {{$usulan->pembimbing->fakultas}} &nbsp;</p>
                        <p>/&nbsp; {{$usulan->pembimbing->prodi}} &nbsp;</p>
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
                          @foreach ($jenisPkm as $item)
                              <option 
                                value="{{$item->id}}"
                                @if($item->id == $usulan->jenis_pkm_id) selected @endif>{{$item->singkatan}} - {{$item->nama_skema}}</option>
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
                          value="{{$usulan->tahun_pengajuan}}"
                          disabled />
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
                      >Anggaran yang diajukan</label
                    >
                    <div class="col-xl-10">
                      <div class="input-group">
                        <div class="input-group-text">Rp.</div>
                        <input                                 
                          type="text"
                          oninput="formatCurrency(event)"
                          class="form-control"
                          id="anggaran"
                          value="{{formatRupiah($usulan->anggaran)}}"
                          name="anggaran"
                          step="1" 
                          min="5000000" 
                          max="12000000"/>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-xl-2 col-form-label fw-bold" for="basic-default-message"
                      >Unggah Lembar Bimbingan</label
                    >
                    <div class="col-xl-10">
                      <input class="form-control" type="file" id="formFile" name="lembar_bimbingan" accept=".pdf" />
                      @if($usulan->lembar_bimbingan)
                        <a href="{{url($usulan->lembar_bimbingan)}}" target="_blank">
                          <?php 
                            $file = explode("/", $usulan->lembar_bimbingan);  
                          ?>
                          {{$file[2]}}
                        </a> 
                      @endif
                    </div>
                  </div>

                  <div class="col-12 d-flex justify-content-between pt-3">
                    <button class="btn btn-outline-secondary btn-prev" disabled>
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
              {{-- Subtansi Usulan --}}
              <div id="substansi-usulan" class="content">
                <div class="content-header mb-3">
                  <h5 class="mb-0 fw-bold">Substansi usulan </h6>
                  <hr>
                  <p class="fw-bold">
                    Status :
                    @if($usulan->status_penilaian_substansi === 'sedang dinilai' ) 
                      <span class="badge rounded-pill bg-label-primary text-md-end text-dark">Sedang dinilai</span>
                    @elseif($usulan->status_penilaian_substansi === 'minor') 
                      <span class="badge rounded-pill bg-label-success text-md-end text-dark">MINOR</span> 
                      <span class="badge rounded-pill bg-label-success text-md-end text-dark">Lanjut ke tahap administrasi</span>
                    @elseif($usulan->status_penilaian_substansi === 'mayor')
                      <span class="badge rounded-pill bg-label-danger text-md-end text-dark">MAYOR</span>
                    @endif
                  </p>
                  @if($usulan->status_penilaian_substansi  !== null && $usulan->status_penilaian_substansi !== "sedang dinilai") 
                    <label class="fw-bold">Unduh nilai : 
                      <a href="{{url($usulan->form_penilaian_substansi)}}" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
                        <i class="mdi mdi-file"></i> Unduh
                      </a> 
                    </label>
                  @endif
                  <hr>
              </div>
                <div class="row g-4">
                    <div class="row mb-3">
                        <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
                          >
                          Judul Proposal
                        </label>
                        <div class="col-xl-10">
                          <input
                            type="text"
                            class="form-control"
                            id="basic-default-name"
                            name="judul"
                            value="{{$usulan->judul}}"                                        
                            placeholder="Masukan Judul Proposal (Tidak boleh lebih dari 20 Kata)" />
                        </div>
                    </div>

                      <div class="row mb-3">
                        <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
                          >Substansi usulan
                        </label>
                        <div class="col-xl-10">
                          <textarea
                            class="form-control"
                            id="exampleFormControlTextarea1"
                            name="pendahuluan"
                            rows="15"
                            placeholder="Isian disesuaikan dengan skema yang diusulkan">{{$usulan->pendahuluan}}</textarea>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <hr>
                        <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
                          >Tugas Ketua Kelompok <p> {{$usulan->ketuaKelompok->nim}} <br> {{$usulan->ketuaKelompok->nama}}</p>
                        </label>
                        <div class="col-xl-10">
                          <textarea
                            class="form-control"
                            id="exampleFormControlTextarea1"
                            name="tugas_ketua"
                            rows="10">{{$usulan->tugas_ketua_kelompok}}</textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
													>Tugas Anggota 1 <p id="tugas-anggota-1"> {{$usulan->getAnggotaSatu()->nim}} <br> {{$usulan->getAnggotaSatu()->nama}}</p>
												</label>
                        <div class="col-xl-10">
                          <textarea
                            class="form-control"
                            id="textarea-tugas-anggota-1"
                            name="tugas_anggota[]"
                            rows="10" 
                            @if($usulan->anggota_satu_id == null) disabled @endif>{{$usulan->tugas_anggota_satu}}</textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
													>Tugas Anggota 2 <p id="tugas-anggota-2"> {{$usulan->getAnggotaDua()->nim}} <br> {{$usulan->getAnggotaDua()->nama}}</p>
												</label>
                        <div class="col-xl-10">
                          <textarea
                            class="form-control"
                            id="textarea-tugas-anggota-2"
                            name="tugas_anggota[]"
                            rows="10"
                            @if($usulan->anggota_dua_id == null) disabled @endif>{{ $usulan->tugas_anggota_dua }}</textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
													>Tugas Anggota 3 <p id="tugas-anggota-3"> {{$usulan->getAnggotaTiga()->nim}} <br> {{$usulan->getAnggotaTiga()->nama}}</p>
												</label>
                        <div class="col-xl-10">
                          <textarea
                            class="form-control"
                            id="textarea-tugas-anggota-3"
                            name="tugas_anggota[]"
                            rows="10"
                            @if($usulan->anggota_tiga_id == null) disabled @endif>{{$usulan->tugas_anggota_tiga}}</textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
													>Tugas Anggota 4  <p id="tugas-anggota-4"> {{$usulan->getAnggotaEmpat()->nim}} <br> {{$usulan->getAnggotaEmpat()->nama}}</p>
												</label>
                        <div class="col-xl-10">
                          <textarea
                            class="form-control"
                            id="textarea-tugas-anggota-4"
                            name="tugas_anggota[]"
                            rows="10"
                            @if($usulan->anggota_empat_id == null) disabled @endif>{{$usulan->tugas_anggota_empat}}</textarea>
                        </div>
                      </div>
                  
                </div>
                <div class="col-12 d-flex justify-content-between">
                    <button class="btn btn-outline-secondary btn-prev">
                      <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                      <span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
                    </button>

                    <button class="btn btn-primary btn-next" type="button">
                      <span class="align-middle d-sm-inline-block d-none me-sm-1" >Selanjutnya</span>
                      <i class="mdi mdi-arrow-right"></i>
                    </button>
                  </div>
              </div>

              <!-- Administrasi Info -->
              {{-- Administrasi Usulan --}}
              <div id="administrasi-usulan" class="content">
                <div class="content-header mb-3">
                    <h5 class="mb-3">Administrasi usulan </h6>  
                      <p class="fw-bold">
                        Status :
                        <?php $disabled = "disabled"; ?>
                        @if(in_array($usulan->status_penilaian_administrasi, ['submited', 'waiting'])) 
                          <span class="badge rounded-pill bg-label-primary text-md-end text-dark">Sedang dinilai</span>
                        @elseif($usulan->status_penilaian_administrasi === 'done') 
                          <?php $disabled = ""; ?>
                          <span class="badge rounded-pill bg-label-success text-md-end text-dark">Lanjut ke tahap Tinjauan</span>
                        @elseif($usulan->status_penilaian_administrasi === 'rejected')
                          <span class="badge rounded-pill bg-label-danger text-md-end text-dark">Tertolak</span>
                        @endif

                        @if(in_array($usulan->status_penilaian_administrasi, ['done', 'rejected']))
                          <Label class="fw-bold">Unduh nilai : 
                            <a href="{{url($usulan->form_penilaian_administrasi)}}" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
                              <i class="mdi mdi-file"></i> Unduh
                            </a> 
                          </Label> 
                        @endif
                      </p>
                    <hr>                                  
                </div>
                <div class="row g-4">                        
                  <div class="row g-4">                            
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label fw-bold" for="basic-default-name"
                          >Upload proposal
                        </label>
                        <div class="col-sm-10">
                          <input class="form-control" name="lembar_proposal" type="file" id="formFile" accept=".pdf" />
                          @if($usulan->lembar_proposal)
                            <a href="{{ $usulan->lembar_proposal ? url($usulan->lembar_proposal): '#'}}" target="_blank">
                              <?php 
                                $file = explode("/", $usulan->lembar_proposal);  
                              ?>
                              {{$file[2]}}
                            </a> 
                          @endif
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label fw-bold" for="basic-default-name"
                          >Upload lembar biodata dosen pembimbing
                        </label>
                        <div class="col-sm-10">
                          <input class="form-control" type="file" name="lembar_biodata_dospem" id="formFile" accept=".pdf" />
                          @if($usulan->lembar_biodata_dospem)
                            <a href="{{url($usulan->lembar_biodata_dospem)}}" target="_blank">
                              <?php 
                                $file = explode("/", $usulan->lembar_biodata_dospem);  
                              ?>
                              {{$file[2]}}
                            @endif
                          </a> 
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label fw-bold" for="basic-default-name"
                        >Upload lembar biodata ketua & semua anggota
                      </label>
                      <div class="col-sm-10">
                        <input class="form-control" type="file" name="lembar_biodata_kelompok" id="formFile" accept=".pdf" />
                        @if($usulan->lembar_biodata_kelompok)
                          <a href="{{url($usulan->lembar_biodata_kelompok)}}" target="_blank">
                            <?php 
                              $file = explode("/", $usulan->lembar_biodata_kelompok);  
                            ?>
                            {{$file[2]}}
                          </a> 
                        @endif
                      </div>
                    </div>

                    <div class="row mb-3 pt-3">
                      <label class="col-sm-2 col-form-label fw-bold" for="basic-default-name"
                        >Upload lembar pengesahan
                      </label>
                      <div class="col-sm-10">
                        <input class="form-control" type="file" name='lembar_pengesahan' id="formFile" accept=".pdf" />
                        @if($usulan->lembar_pengesahan)
                          <a href="{{url($usulan->lembar_pengesahan)}}" target="_blank">
                            <?php 
                              $file = explode("/", $usulan->lembar_pengesahan);  
                            ?>
                            {{$file[2]}}
                          </a>
                        @endif
                      </div>
                    </div>
                    
                  
                    <div class="col-12 d-flex justify-content-between">
                      <button type="button" class="btn btn-outline-secondary btn-prev">
                        <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                        <span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
                      </button>
                      <button class="btn btn-primary btn-next" type="button" onclick="submit(event)">
                        <span class="align-middle d-sm-inline-block d-none me-sm-1" id="kirim-proposal">Edit usulan</span>
                      </button>
                      
                    </div>
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

      function selectAnggota(event){
        const resultId = event.srcElement.getAttribute('id');
        const target = event.target[event.target.selectedIndex];
        const id = target.getAttribute('data-id');
        const fakultas = target.getAttribute('data-fakultas');
        const prodi = target.getAttribute('data-prodi');
        const text = target.text.split("-")
        const nim = text[0].trim();
        const nama = text[1].trim();

        const preview = `${nim} / ${nama} / ${fakultas} / ${prodi}`;

        document.getElementById(`result-${resultId}`).innerHTML = preview;
        document.getElementById(`tugas-${resultId}`).innerHTML = `${nim} <br> ${nama}`;
        document.getElementById(`textarea-tugas-${resultId}`).disabled = false;
        document.getElementById(`textarea-tugas-${resultId}`).required = true;
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

        document.getElementById(`result-pembimbing`).innerHTML = preview;
      }
      
      function formatCurrency(event) {
        event.preventDefault();
          // Remove non-numeric characters
          let value = event.target.value.replace(/[^0-9.]/g, '');

          // Format as currency for Indonesia (IDR)
          const formattedValue = new Intl.NumberFormat('en-US', {
              minimumFractionDigits: 0
          }).format(value);

          // Update the input value
          event.target.value = formattedValue.replace('IDR', '');
      }

      function submit(e){
        e.preventDefault();
        e.target.disabled = true;
        const anggaran = document.getElementById('anggaran');
        const form =  document.forms['form-usulan'];

        const oldAnggaran = anggaran.value
        const intAnggaran = (anggaran.value.replaceAll(",",""));
        anggaran.value = intAnggaran;
        const formValid = form.checkValidity();

        if(!formValid){
          e.target.disabled = false;
          Swal.fire({
            title: "Info",
            text: "Tugas Anggota Tidak boleh kosong",
            icon: "warning",
          });
          return false;
        }

        if(anggaran < 5000000 || anggaran > 12000000){
          Swal.fire({
            title: "Info",
            text: "Batas anggaran usulan adalah Rp.5.000.000 - Rp.12.000.000",
            icon: "warning",
          });

          anggaran.value = oldAnggaran;
          e.target.disabled = false;
          return false;
        }

        document.querySelectorAll("input[type='file']").forEach((item) => {
          var maxSizeInBytes = 1024 * 1024 * 5; // 5 MB
          var allowedExtensions = ['pdf'];

          if(item.files.length !== 0){
            var fileName = item.files[0].name;
            var fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1, fileName.length) || fileName;

            if(!allowedExtensions.includes(fileExtension)){
              Swal.fire({
                title: "Oops!",
                text: "File harus berupa pdf",
                icon: "error",
              });
              anggaran.value = oldAnggaran;
              e.target.disabled = false;
              return;
            }

            if(item.files[0].size > maxSizeInBytes){
              Swal.fire({
                title: "Oops!",
                text: "File tidak boleh lebih dari 5 MB",
                icon: "error",
              });
              anggaran.value = oldAnggaran;
              e.target.disabled = false;
              return;
            }
          }
        })
        document.forms['form-usulan'].submit();

      }
    </script>

  @endsection
@endsection