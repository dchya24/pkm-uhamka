@extends('reviewer.template.layout')
@section("title", "Penilaian | Reviewer")

@section('body')
 <!-- Content -->
 <div class="container-xxl flex-grow-1 container-p-y">
    <!-- Header -->
    {{-- <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="user-profile-header-banner">
            <img src="../../assets/img/pages/profile-banner.png" alt="Banner image" class="rounded-top" />
          </div>
          <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
            <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
              <img
                src="../../assets/img/avatars/1.png"
                alt="user image"
                class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" />
            </div>
            <div class="flex-grow-1 mt-3 mt-sm-5">
              <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                <div class="user-profile-info">
                  <h4>Satria Eka Dawongso</h4>
                  <p>Status : <span class="badge rounded-pill bg-label-primary text-md-end text-dark">Menunggu peninjauan anda</span> </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!--/ Header -->

    <!-- Navbar pills -->
    <div class="row">
			<div class="col-md-12">
				<ul class="nav nav-pills flex-column flex-sm-row mb-4 justify-content-center">
					<li class="nav-item">
						<a class="nav-link active"><i class="mdi me-1 mdi-20px"></i>USULAN 1</a>
					</li>
				</ul>
			</div>
		</div>

    <!--Modal tinjauan-->
    <!-- Modal -->
    <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="backDropModalTitle">Tinjau usulan</h4>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col mb-4 mt-2">   
								<form 
									action="{{route('reviewer.penilaian.tambah-penilaian', $detail->id)}}" 
									method="POST" 
									enctype="multipart/form-data" 
									name="add-tinjauan">
									<h5>
										Unduh format nilai : 
                    <a href="{{url($detail->jenisPkm->form_peninjau)}}" target="_blank">
											<i class="mdi mdi-file"></i> Unduh
										</a> 
									</h5>                        
									<h5>Komentar usulan : (dikirim ke mahasiswa)</h5>
									<textarea
										class="form-control"
										id="exampleFormControlTextarea1"
										rows="5"
										name="komentar_ke_mahasiswa"
										placeholder="Berikan komentar terhadap usulan ini"></textarea>    
									<hr>
									<h5>Komentar usulan : (dikirim ke Wakil Rektor Kemahasiswaan)</h5>
									<textarea
										class="form-control"
										id="exampleFormControlTextarea1"
										rows="5"
										name="komentar_ke_warek"
										placeholder="Berikan komentar terhadap usulan ini"></textarea>   
									<br>   
									<h5>Upload nilai </h5>
									<input class="form-control" type="file" id="formFile" name="form_penilaian_peninjau"/>
									<Label>Form penilaian -> excel only</Label>
									@csrf
								</form>    
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
              Tutup
            </button>
            <button 
							type="button" 
							class="btn btn-primary"
							onclick="document.forms['add-tinjauan'].submit()">
							Kirim tinjauan
						</button>
          </div>
        </div>
      </div>
    </div>

      <!-- Main Content -->
    <div class="row">
      <div class="col-md-12">
        
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
                <div class="line"></div>
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

                <div class="line"></div>
                <div class="step" data-target="#tinjauan-usulan">
                  <button type="button" class="step-trigger">
                    <span class="bs-stepper-circle"><i class="mdi mdi-check"></i></span>
                    <span class="bs-stepper-label">
                      <span class="bs-stepper-number">04</span>
                      <span class="d-flex flex-column gap-1 ms-2">
                        <span class="bs-stepper-title">Tinjauan usulan</span>
                        <span class="bs-stepper-subtitle">Tahap 3</span>
                      </span>
                    </span>
                  </button>
                </div>
              </div>
              <div class="bs-stepper-content">
								<!-- Proposal Details -->
								<div id="data-usulan" class="content">
									<div class="content-header mb-3">
										<h5 class="mb-0 fw-bold">Data usulan </h5>
										<hr>
									</div>
									<div class="card-body">
											<div class="row mb-3">
													<label class="col-xl-2 fw-bold">Ketua Pengusul</label>
													<div class="col-xl-10 d-flex">
														<p>:&nbsp;{{$detail->ketuaKelompok->nim}} &nbsp;</p>
														<p>/&nbsp; {{$detail->ketuaKelompok->nama}} &nbsp;</p>
														<p>/&nbsp; {{$detail->ketuaKelompok->fakultas}} &nbsp;</p>
														<p>/&nbsp; {{$detail->ketuaKelompok->prodi}} &nbsp;</p>
													</div>
											</div>                                  
											
											<div class="row mb-3">
													<label class="col-xl-2 fw-bold" for="basic-default-email">Anggota 1 Pengusul</label>
													<div class="col-xl-10 d-flex">
														<p>:&nbsp;{{$detail->anggotaSatu->nim}} &nbsp;</p>
														<p>/&nbsp; {{$detail->anggotaSatu->nama}} &nbsp;</p>
														<p>/&nbsp; {{$detail->anggotaSatu->fakultas}} &nbsp;</p>
														<p>/&nbsp; {{$detail->anggotaSatu->prodi}} &nbsp;</p>
													</div>
											</div>                                
											
											<div class="row mb-3">
													<label class="col-xl-2 fw-bold" for="basic-default-email">Anggota 2 Pengusul</label>
													<div class="col-xl-10 d-flex">
														<p>:&nbsp;{{$detail->anggotaDua->nim}} &nbsp;</p>
														<p>/&nbsp; {{$detail->anggotaDua->nama}} &nbsp;</p>
														<p>/&nbsp; {{$detail->anggotaDua->fakultas}} &nbsp;</p>
														<p>/&nbsp; {{$detail->anggotaDua->prodi}} &nbsp;</p>
													</div>
											</div>
											
											<div class="row mb-3">
													<label class="col-xl-2 fw-bold" for="basic-default-email">Anggota 3 Pengusul</label>
													<div class="col-xl-10 d-flex">
														<p>:&nbsp;{{$detail->anggotaTiga->nim}} &nbsp;</p>
														<p>/&nbsp; {{$detail->anggotaTiga->nama}} &nbsp;</p>
														<p>/&nbsp; {{$detail->anggotaTiga->fakultas}} &nbsp;</p>
														<p>/&nbsp; {{$detail->anggotaTiga->prodi}} &nbsp;</p>
													</div>
											</div>

											<div class="row mb-3">
												<label class="col-xl-2 fw-bold" for="basic-default-email">Anggota 4 Pengusul</label>
												<div class="col-xl-10 d-flex">
													<p>:&nbsp;{{$detail->anggotaEmpat->nim}} &nbsp;</p>
													<p>/&nbsp; {{$detail->anggotaEmpat->nama}} &nbsp;</p>
													<p>/&nbsp; {{$detail->anggotaEmpat->fakultas}} &nbsp;</p>
													<p>/&nbsp; {{$detail->anggotaEmpat->prodi}} &nbsp;</p>
												</div>
											</div>

											<div class="row mb-3">
												<label class="col-xl-2 fw-bold" for="basic-default-email">Dosem Pembimbing pengusul</label>
												<div class="col-xl-10 d-flex">
													<p>:&nbsp;{{$detail->pembimbing->nidn}} &nbsp;</p>
													<p>/&nbsp; {{$detail->pembimbing->nama}} &nbsp;</p>
													<p>/&nbsp; {{$detail->pembimbing->fakultas}} &nbsp;</p>
													<p>/&nbsp; {{$detail->pembimbing->prodi}} &nbsp;</p>
												</div>
											</div>     

											<div class="row mb-3">
												<label class="col-xl-2 fw-bold" for="basic-default-company">Skema PKM</label>
												<div class="col-xl-8">
													<p>: Artificial Intelegent</p>
												</div>
											</div>

											<div class="row mb-3">
												<label class="col-xl-2 fw-bold" for="basic-default-email">
													Tahun Pengajuan
												</label>
												<div class="col-xl-8">
													<p>: {{$detail->tahun_pengajuan}}</p>
												</div>
											</div>

											<div class="row mb-3">
												<label class="col-xl-2 fw-bold" for="basic-default-name">
													Anggaran yang diajukan
												</label>
												<div class="col-xl-8">
													<p>: {{$detail->anggaran}}</p>
												</div>
											</div>

											<div class="row mb-3">
												<label class="col-xl-2 fw-bold pt-2" for="basic-default-message">
													Lembar Bimbingan
												</label>
												<div class="col-xl-10">
													<a  class="btn rounded-pill btn-primary btn-sm" type="button" href="{{url($detail->lembar_bimbingan)}}" target="_blank" title="Read PDF">
														<i class="mdi mdi-file"></i> Unduh
													</a>
												</div>
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
								</div>
								<!-- Substansi Info -->
								<div id="substansi-usulan" class="content">
									<div class="content-header mb-3">
										<h5 class="mb-0 fw-bold">Substansi usulan </h5>
										<hr>
										<p class="fw-bold">
											Status :
											<?php $disabled = "disabled"; ?>
											@if($detail->status_penilaian_substansi === 'sedang dinilai' || $detail->penilaian_substansi_id !== null) 
												<?php $disabled = ""; ?>
												<span class="badge rounded-pill bg-label-primary text-md-end text-dark">Sedang dinilai</span>
											@elseif($detail->status_penilaian_substansi === 'minor')
												<span class="badge rounded-pill bg-label-success text-md-end text-dark">MINOR</span>
											@elseif($detail->status_penilaian_substansi === 'mayor')
												<span class="badge rounded-pill bg-label-danger text-md-end text-dark">MAYOR</span>
											@endif
										</p>
										
										@if($detail->status_penilaian_substansi !== 'sedang dinilai' && $detail->penilai_substansi_id !== null) 
											<Label class="fw-bold">Unduh nilai : 
												<a href="/assets/pdf/HASIL_SUB_VGK122.pdf" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
													<i class="mdi mdi-file"></i> Unduh
												</a> 
											</Label>
										@endif
										<hr>
									</div>
									<div class="row g-4 mt-2">
										<div class="row mb-3">
												<label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
													>Judul Proposal
												</label>
												<div class="col-xl-10">
													<input
														type="text"
														class="form-control"
														id="basic-default-name"
														value="{{$detail->judul}}"
														disabled
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
													rows="15"
													disabled
													placeholder="Isian disesuaikan dengan skema yang diusulkan">{{$detail->pendahuluan}}</textarea>
											</div>
										</div>

										<div class="row mb-3">
											<hr>
											<label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
												>Tugas Ketua Kelompok <p> {{$detail->ketuaKelompok->nim}} <br> {{$detail->ketuaKelompok->nama}}</p>
											</label>
											<div class="col-xl-10">
												<textarea
													class="form-control"
													id="exampleFormControlTextarea1"
													rows="10"
													disabled>{{ $detail->tugas_ketua_kelompok }}</textarea>
											</div>
										</div>
										<div class="row mb-3">
											<label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
												>Tugas Anggota 1 <p> {{$detail->anggotaSatu->nim}} <br> {{$detail->anggotaSatu->nama}}</p>
											</label>
											<div class="col-xl-10">
												<textarea
													class="form-control"
													id="exampleFormControlTextarea1"
													rows="10"
													disabled>{{ $detail->tugas_anggota_satu }}</textarea>
											</div>
										</div>
										<div class="row mb-3">
											<label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
												>Tugas Anggota 2 <p> {{$detail->anggotaDua->nim}} <br> {{$detail->anggotaDua->nama}}</p>
											</label>
											<div class="col-xl-10">
												<textarea
													class="form-control"
													id="exampleFormControlTextarea1"
													rows="10"
													disabled>{{ $detail->tugas_anggota_dua }}</textarea>
											</div>
										</div>
										<div class="row mb-3">
											<label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
												>Tugas Anggota 3 <p> {{$detail->anggotaTiga->nim}} <br> {{$detail->anggotaTiga->nama}}</p>
											</label>
											<div class="col-xl-10">
												<textarea
													class="form-control"
													id="exampleFormControlTextarea1"
													rows="10"
													disabled>{{ $detail->tugas_anggota_tiga }}</textarea>
											</div>
										</div>
										<div class="row mb-3">
											<label class="col-xl-2 col-form-label fw-bold" for="basic-default-name"
												>Tugas Anggota 4  <p> {{$detail->anggotaEmpat->nim}} <br> {{$detail->anggotaEmpat->nama}}</p>
											</label>
											<div class="col-xl-10">
												<textarea
													class="form-control"
													id="exampleFormControlTextarea1"
													rows="10"
													disabled>{{ $detail->tugas_anggota_empat }}</textarea>
											</div>
										</div>
										
									</div>
									<div class="col-12 d-flex justify-content-between">
											<button class="btn btn-outline-secondary btn-prev">
												<i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
												<span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
											</button>

											<button class="btn btn-primary btn-next">
												<span class="align-middle d-sm-inline-block d-none me-sm-1" >Selanjutnya</span>
												<i class="mdi mdi-arrow-right"></i>
											</button>
										</div>
								</div>

								<!-- Administrasi Info -->
								<div id="administrasi-usulan" class="content">
									<div class="content-header mb-3">
										<h5 class="mb-1 pb-2 fw-bold">Administrasi usulan </h6>
										<p class="fw-bold">
											Status : 
											<?php $disabled = ""; ?>
											@if($detail->status_penilaian_administrasi == 'waiting')
												<span class="badge rounded-pill bg-label-primary text-md-end text-dark">Belum dinilai</span> 
											@elseif($detail->status_penilaian_administrasi == 'done')
											<?php $disabled = "disabled"; ?>
											<span class="badge rounded-pill bg-label-success text-md-end text-dark">Sudah dinilai</span>
											@endif
										</p>
										<Label class="fw-bold">Unduh nilai : 
											&nbsp; <a  class="btn rounded-pill btn-primary btn-sm" type="button" href="{{ url($detail->form_penilaian_administrasi)}}" target="_blank" title="Read PDF">
												<i class="mdi mdi-file"></i> Unduh
											</a>
										</Label> 
										<hr>
									</div>               
									<div class="row g-4 mt-1">
										<div class="row mb-3">
											<label class="col-xl-2 fw-bold pt-2" for="basic-default-message">
												Proposal
											</label>
											<div class="col-xl-10 ">
												: <a  class="btn rounded-pill btn-primary btn-sm" type="button" href="{{url($detail->lembar_proposal)}}" target="_blank" title="Read PDF">
													<i class="mdi mdi-file"></i> Unduh
												</a>
											</div>
										</div>
										<br>
		
										<div class="row mb-3">
											<label class="col-xl-2 fw-bold pt-2" for="basic-default-message">
												Lembar biodata dosen pembimbing
											</label>
											<div class="col-xl-10 ">
												: <a  class="btn rounded-pill btn-primary btn-sm" type="button" href="{{url($detail->lembar_biodata_dospem)}}" target="_blank" title="Read PDF">
													<i class="mdi mdi-file"></i> Unduh
												</a>
											</div>
										</div>
										<br>
		
										<div class="row mb-3 ">
												<label class="col-xl-2 fw-bold pt-2" for="basic-default-message">
													Lembar biodata ketua & semua anggota
												</label>
												<div class="col-xl-10 ">
													: <a  class="btn rounded-pill btn-primary btn-sm" type="button" href="{{url($detail->lembar_biodata_kelompok)}}" target="_blank" title="Read PDF">
														<i class="mdi mdi-file"></i> Unduh
													</a>
												</div>
										</div>
		
										<div class="row mb-3">
												<label class="col-xl-2 fw-bold pt-2" for="basic-default-message">
													Lembar Pengesahan
												</label>
												<div class="col-xl-10 ">
													: <a  class="btn rounded-pill btn-primary btn-sm" type="button" href="{{url($detail->lembar_pengesahan)}}" target="_blank" title="Read PDF">
														<i class="mdi mdi-file"></i> Unduh
													</a>
												</div>
										</div>
										</form>       
										<hr>                         
									</div>
									<div class="col-12 d-flex justify-content-between ">
										<button class="btn btn-outline-secondary btn-prev">
											<i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
											<span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
										</button>
										<button class="btn btn-primary btn-next">
											<span class="align-middle d-sm-inline-block d-none me-sm-1" >Selanjutnya</span>
											<i class="mdi mdi-arrow-right"></i>
										</button>
									</div>
								</div>

                  <!-- tinjauan info -->
                  <div id="tinjauan-usulan" class="content">
                      <div class="content-header mb-3">
                          <h5 class="mb-1 pb-2">Tinjauan usulan </h6>
                            <p class="fw-bold">
															Status :
															@if($detail->status_penilaian_peninjau == 'waiting')
																<span class="badge rounded-pill bg-label-primary text-md-end text-dark">Menunggu penilaian anda</span>
															@elseif($detail->status_penilaian_peninjau == 'done')
																<span class="badge rounded-pill bg-label-success text-md-end text-dark">Sudah dinilai</span>
															@endif
														</p>
														@if($detail->status_penilaian_peninjau === "done")
															<Label class="fw-bold">Komentar anda: (Mahasiswa) </Label> 
															<p class="fst-italic">
																{{$detail->komentar_ke_mahasiswa}}
															</p>
															<Label class="fw-bold">Komentar anda: (Wakil Rektor) </Label> 
															<p class="fst-italic">
																{{$detail->komentar_ke_warek}}
															</p>
														@endif
                            <hr>
                      </div>
                      <div class="row g-4">                        
                          <div class="d-flex flex-column align-items-center">
														@if($detail->status_penilaian_peninjau !== "done")
															<img
																src="{{asset('assets/img/illustrations/tinjau_delay.png')}}"
																alt="misc-under-maintenance"
																class="img-fluid zindex-1"
																width="400" />
														@else
															<img
																src="{{asset('assets/img/illustrations/tinjau_succes.png')}}"
																alt="misc-under-maintenance"
																class="img-fluid zindex-1"
																width="400" />
														@endif
                            </div>
                      </div>
                      <div class="col-12 d-flex justify-content-between">
                        <button class="btn btn-outline-secondary btn-prev">
                          <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
                          <span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
                        </button>
                        
                        @if($detail->status_penilaian_peninjau !== "done")
													<button
														type="button"
														class="btn btn-primary"
														data-bs-toggle="modal"
														data-bs-target="#backDropModal">
														Tinjau Usulan
													</button>
												@elseif($detail->status_penilaian_peninjau === "done")
													<button class="btn btn-primary btn-next" disabled>
														<span class="align-middle d-sm-inline-block d-none me-sm-1" >Selanjutnya</span>
														<i class="mdi mdi-arrow-right"></i>
													</button>
												@endif
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
</div>
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