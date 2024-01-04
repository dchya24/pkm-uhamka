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
						<a class="nav-link active"><i class="mdi me-1 mdi-20px"></i>USULAN 1</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="h-100">
			<div class="col-12 mb-4">
				@if($detail)
					<div class="bs-stepper wizard-numbered mt-2">
						<div class="bs-stepper-header">
							{{-- Data Usulan stepper --}}
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

							{{-- Data usulan substansi --}}
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

								{{-- Administrasi usulan steper --}}
								@if($detail->status_penilaian_administrasi && $detail->penilai_administrasi_id !== null)
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
							@endif

							{{-- Step peninjauan --}}
							@if($detail->status_penilai_peninjau && $detail->penilai_peninjau_id !== null)
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
							@endif

							{{-- Step rekomendasi --}}
							@if($detail->status_rekomendasi != null)
								<div class="line"></div>
								<div class="step" data-target="#Rekomendasi-usulan">
									<button type="button" class="step-trigger">
										<span class="bs-stepper-circle"><i class="mdi mdi-check"></i></span>
										<span class="bs-stepper-label">
											<span class="bs-stepper-number">05</span>
											<span class="d-flex flex-column gap-1 ms-2">
												<span class="bs-stepper-title">Rekomendasi</span>
												<span class="bs-stepper-subtitle">Tahap akhir</span>
											</span>
										</span>
									</button>
								</div>
							@endif
						</div>
						<div class="bs-stepper-content">
							<form onSubmit="return false">
								<!-- Proposal Details -->
								<div id="data-usulan" class="content">
									<div class="content-header mb-3">
										<h5 class="mb-0 fw-bold">Data usulan </h6>
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
												<p>: {{$detail->jenisPkm->nama_skema}}</p>
											</div>
										</div>

										<div class="row mb-3">
											<label class="col-xl-2 fw-bold" for="basic-default-email"
												>Tahun Pengajuan</label
											>
											<div class="col-xl-8">
												<p>: {{$detail->tahun_pengajuan}}</p>
											</div>
										</div>

										<div class="row mb-3">
											<label class="col-xl-2 fw-bold" for="basic-default-name"
												>Anggaran yang diajukan</label
											>
											<div class="col-xl-8">
												<p>: {{$detail->anggaran}}</p>
											</div>
										</div>

										<div class="row mb-3">
											<label class="col-xl-2 fw-bold pt-2" for="basic-default-message"
												>Lembar Bimbingan</label
											>
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
											<h5 class="mb-0 fw-bold">Substansi usulan </h6>
												<hr>
												<p class="fw-bold">
													Status :
													@if($detail->status_penilaian_substansi === 'sedang dinilai' || $detail->penilai_substansi_id !== null) 
														<span class="badge rounded-pill bg-label-primary text-md-end text-dark">Sedang dinilai</span>
													@endif
													<span class="badge rounded-pill bg-label-success text-md-end text-dark">MINOR</span> 
													<span class="badge rounded-pill bg-label-success text-md-end text-dark">Lanjut ke tahap administrasi</span>
													<span class="badge rounded-pill bg-label-danger text-md-end text-dark">MAYOR</span>
												</p>
												@if($detail->status_penilaian_substansi && $detail->penilai_substansi_id !== null) 
													<Label class="fw-bold">Unduh nilai : 
														<a href="/assets/pdf/HASIL_SUB_VGK122.pdf" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
															<i class="mdi mdi-file"></i> Unduh
														</a> 
													</Label>
												@endif
												<hr>
									</div>
									<div class="row g-4">
										<form>                                
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
										</form>
										
									</div>
									<div class="col-12 d-flex justify-content-between">
											<button class="btn btn-outline-secondary btn-prev">
												<i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
												<span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
											</button>

											@if($detail->status_penilai_substansi === "minor")
												<button class="btn btn-primary btn-next">
													<span class="align-middle d-sm-inline-block d-none me-sm-1" >Selanjutnya</span>
													<i class="mdi mdi-arrow-right"></i>
												</button>
											@endif
										</div>
								</div>

								<!-- Administrasi Info -->
								<div id="administrasi-usulan" class="content">
									<div class="content-header mb-3">
											<h5 class="mb-1 pb-2 fw-bold">Administrasi usulan </h6>
												<p class="fw-bold">Status : <span class="badge rounded-pill bg-label-success text-md-end text-dark">Lanjut ke tahap peninjauan</span> </p>
												<Label class="fw-bold">Unduh nilai : 
													<a href="/assets/pdf/HASIL_ADM_VGK122.pdf" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
														<i class="mdi mdi-file"></i> Unduh
													</a> 
												</Label> 
												<hr>
									</div>                  
										<div class="row g-4">
											<form>                                
												<div class="row mb-3">
													<label class="col-xl-2 fw-bold pt-2" for="basic-default-message"
													>Proposal</label
												>
													<div class="col-xl-10 ">
														<a  class="btn rounded-pill btn-primary btn-sm" type="button" href="/assets/pdf/HASIL_SUB_VGK122.pdf" target="_blank" title="Read PDF">
															<i class="mdi mdi-file"></i> Unduh
														</a>
													</div>
												</div>
												<br>

												<div class="row mb-3">
													<label class="col-xl-2 fw-bold pt-2" for="basic-default-message"
													>Lembar biodata dosen pembimbing</label
												>
													<div class="col-xl-10 ">
														<a  class="btn rounded-pill btn-primary btn-sm" type="button" href="/assets/pdf/HASIL_SUB_VGK122.pdf" target="_blank" title="Read PDF">
															<i class="mdi mdi-file"></i> Unduh
														</a>
													</div>
											</div>
											<br>

											<div class="row mb-3 ">
													<label class="col-xl-2 fw-bold pt-2" for="basic-default-message"
													>Lembar biodata ketua & semua anggota</label
												>
													<div class="col-xl-10 ">
														<a  class="btn rounded-pill btn-primary btn-sm" type="button" href="/assets/pdf/HASIL_SUB_VGK122.pdf" target="_blank" title="Read PDF">
															<i class="mdi mdi-file"></i> Unduh
														</a>
													</div>
											</div>

											<div class="row mb-3">
													<label class="col-xl-2 fw-bold pt-2" for="basic-default-message"
													>Lembar Pengesahan</label
												>
													<div class="col-xl-10 ">
														<a  class="btn rounded-pill btn-primary btn-sm" type="button" href="/assets/pdf/HASIL_SUB_VGK122.pdf" target="_blank" title="Read PDF">
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
													<p class="fw-bold">Status : <span class="badge rounded-pill bg-label-success text-md-end text-dark">Lanjut ke tahap rekomendasi</span> </p>
													<label for="">Unduh Nilai
														<a  class="btn rounded-pill btn-primary btn-sm" type="button" href="/assets/pdf/HASIL_SUB_VGK122.pdf" target="_blank" title="Read PDF">
															<i class="mdi mdi-file"></i> Unduh
														</a>
													</label>
													<br>
													<Label class="fw-bold">Komentar peninjau: </Label> 
														<p class="fst-italic">"Tolong ketika kamu ke tahap belmawa / internal, perkuat argumentasi terakir kenapa alat2 iot sangat mahal"</p>
													<hr>
										</div>
										<div class="row g-4">                        
												<div class="d-flex flex-column align-items-center">
														<img
															src="../../assets/img/illustrations/tinjau_succes.png"
															alt="misc-under-maintenance"
															class="img-fluid zindex-1"
															width="400" />
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

							<!-- Rekomendasi info -->
								<div id="Rekomendasi-usulan" class="content">
										<div class="content-header mb-3">
												<h5 class="mb-1 pb-2">Rekomendasi usulan </h6>   
													<div>                                
														<p class="fw-bold">Status : <span class="badge rounded-pill bg-label-primary text-md-end text-dark">Sedang dinilai</span> </p>
													</div> 

													<!-- grup Rekomendasi internal-->

													<div class="d-none">
														<Label class="fw-bold">Tautan grup whatsapp Rekomendasi internal :
															<a href="https://youtu.be/XSo-6TAcKlA?si=UabjN8-qs1zBLlHo" target="_blank"  type="button" class="btn rounded-pill btn-primary btn-sm">
																<i class="mdi mdi-whatsapp"></i> Grup Whatsapp
															</a> 
														</Label> 
													</div>

													<!-- grup Rekomendasi kemendikbudristek-->
													<div class="d-none">
														<Label class="fw-bold">Tautan grup whatsapp Rekomendasi kemendikbudristek :
															<a href="https://youtu.be/XSo-6TAcKlA?si=UabjN8-qs1zBLlHo" target="_blank"  type="button" class="btn rounded-pill btn-primary btn-sm">
																<i class="mdi mdi-whatsapp"></i> Grup Whatsapp
															</a> 
														</Label> 
													</div>

													<div>                                      
															<hr>
															<p class="fw-bold">Nilai substansi :
																<a href="/assets/pdf/HASIL_SUB_VGK122.pdf" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
																	<i class="mdi mdi-file"></i> Unduh
																</a>                                         
															</p>
													</div>
													
													<div>
														<p class="fw-bold">Nilai administrasi : 
															<a href="/assets/pdf/HASIL_ADM_VGK122.pdf" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
																<i class="mdi mdi-file"></i> Unduh
															</a> 
														</p>
													</div>

													<div>
														<p class="fw-bold">Nilai tinjauan : 
															<a href="/assets/pdf/HASIL_ADM_VGK122.pdf" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
																<i class="mdi mdi-file"></i> Unduh
															</a> 
														</p>
														
														<p class="fw-bold">Komentar peninjau : </p>
														<p class="fst-italic">"Tolong ketika kamu ke tahap belmawa / internal, perkuat argumentasi terakir kenapa alat2 iot sangat mahal"</p>
													</div>
													
													<hr>
										</div>
										<div class="row g-4">                        
												<div class="d-flex flex-column align-items-center">
														<img
															src="../../assets/img/illustrations/tinjau_succes.png"
															alt="misc-under-maintenance"
															class="img-fluid zindex-1"
															width="400" />
													</div>
										</div>
										<div class="col-12 d-flex justify-content-between">
												<button class="btn btn-outline-secondary" onclick="stepper3.prev()">
													<i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
													<span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
												</button>
										</div>
								</div>
							</form>
						</div>
					</div>
				@else
				<h3>Kamu belum memiliki usulan</h3>
				@endif
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