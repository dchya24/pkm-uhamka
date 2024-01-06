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
							@if($detail->status_penilaian_substansi === "minor")
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
							@if(in_array($detail->status_penilaian_administrasi, ['done', 'rejected']))
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
							@if(in_array($detail->status_penilaian_peninjau, ['done', 'rejected']))
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
											@if($detail->status_penilaian_substansi === 'sedang dinilai') 
												<span class="badge rounded-pill bg-label-primary text-md-end text-dark">Sedang dinilai</span>
											@elseif($detail->status_penilaian_substansi === 'minor') 
												<span class="badge rounded-pill bg-label-danger text-md-end text-dark">MINOR</span> 
												<span class="badge rounded-pill bg-label-success text-md-end text-dark">Lanjut ke tahap administrasi</span>
											@elseif($detail->status_penilaian_substansi === 'mayor')
												<span class="badge rounded-pill bg-label-success text-md-end text-dark">MAYOR</span>
											@endif
										</p>
										@if(!$detail->status_penilaian_substansi && $detail->status_penilaian_substansi !== "sedang_dinilai") 
											<label class="fw-bold">Unduh nilai : 
												<a href="{{url($detail->form_penilaian_substansi)}}" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
													<i class="mdi mdi-file"></i> Unduh
												</a> 
											</label>
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

										@if($detail->status_penilaian_substansi === "minor")
											<button class="btn btn-primary btn-next">
												<span class="align-middle d-sm-inline-block d-none me-sm-1" >Selanjutnya</span>
												<i class="mdi mdi-arrow-right"></i>
											</button>
										@endif
									</div>
							</div>

							<!-- Administrasi Info -->
							@if($detail->status_penilaian_administrasi === "not_submited" || $detail->status_penilaian_administrasi === null)
								<div id="administrasi-usulan" class="content">
									<div class="content-header mb-3">
										<h5 class="mb-3">Administrasi usulan </h6>   
										<p>Status : <span class="badge rounded-pill bg-label-info text-md-end">Belum mengirim usulan</span> </p>
										<br>
										<label  class="pt-1 fw-bold d-flex">Catatan : 
											<p class="fw-normal"> Tolong diperhatikan ketentuan nama file yang ingin diupload</p>
										</label>
										
										<hr>                                  
									</div>
									<div class="row g-4">                        
									<div class="row g-4">
										<form action="{{route('mahasiswa.usulan.administrasi', $detail->id)}}" method="POST" name="pengajuan_administrasi" enctype="multipart/form-data">                                
											<div class="row mb-3">
												<label class="col-sm-2 col-form-label fw-bold" for="basic-default-name"
													>Upload proposal
												</label>
												<div class="col-sm-10">
													<input class="form-control" type="file"  name="lembar_proposal" id="formFile" />
													<label >Maks.5 MB | Tipe File : PDF | </label>
													<br>
													<label class="fw-bold">Nama File : Proposal_NIMKetua_Usulan 1/2/3/4</label>
													<br>
													<label class="">Contoh : Proposal_1802121211_Usulan1</label>
												</div>
											</div>
											<br>
			
											<div class="row mb-3">
												<label class="col-sm-2 col-form-label fw-bold" for="basic-default-name"
												>Upload lembar biodata dosen pembimbing
												</label>
												<div class="col-sm-10">
												<input class="form-control" type="file" name="lembar_biodata_dospem" id="formFile" />
												<label for="">Maks.5 MB | Tipe File : PDF -> Wajib TTD basah</label>
												<br>
													<label class="fw-bold">Nama File : Biodatadosen_NIMKetua_Usulan 1/2/3/4</label>
													<br>
													<label class="">Contoh : Biodatadosen_1802121211_Usulan1</label>
												</div>
											</div>
											<br>
			
											<div class="row mb-3">
												<label class="col-sm-2 col-form-label fw-bold" for="basic-default-name"
													>Upload lembar biodata ketua & semua anggota
												</label>
												<div class="col-sm-10">
													<input class="form-control" type="file" id="formFile" name="lembar_biodata_kelompok" />
													<label for="">Maks.5 MB | Tipe File : PDF -> Wajib TTD basah & jadikan 1 file saja (digabung)</label>
													<br>
														<label class="fw-bold">Nama File : Biodatakelompok_NIMKetua_Usulan 1/2/3/4</label>
														<br>
														<label class="">Contoh : Biodatakelompok_1802121211_Usulan1</label>
												</div>
											</div>
			
											<div class="row mb-3 pt-3">
												<label class="col-sm-2 col-form-label fw-bold" for="basic-default-name"
													>Upload lembar pengesahan
												</label>
												<div class="col-sm-10">
													<input class="form-control" type="file" name="lembar_pengesahan" id="formFile" />
													<label for="">Maks.5 MB | Tipe File : PDF -> Wajib TTD basah (Cukup sampai TTD Dekan)</label>
												</div>
											</div>
											@csrf
										</form>
										<div class="col-12 d-flex justify-content-between">
										<button class="btn btn-outline-secondary btn-prev">
											<i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
											<span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
										</button>
										<button class="btn btn-primary btn-next" onclick="document.forms['pengajuan_administrasi'].submit()">
											<span class="align-middle d-sm-inline-block d-none me-sm-1" >Kirim usulan</span>
											
										</button>
										</div>
									</div>
									</div>
								</div>
							@else
								<div id="administrasi-usulan" class="content">
									<div class="content-header mb-3">
										<h5 class="mb-1 pb-2 fw-bold">Administrasi usulan </h5>
										<p class="fw-bold">
											Status :
											<?php $disabled = "disabled"; ?>
											@if(in_array($detail->status_penilaian_administrasi, ['submited', 'waiting'])) 
												<span class="badge rounded-pill bg-label-primary text-md-end text-dark">Sedang dinilai</span>
											@elseif($detail->status_penilaian_administrasi === 'done') 
												<?php $disabled = ""; ?>
												<span class="badge rounded-pill bg-label-success text-md-end text-dark">Lanjut ke tahap Tinjauan</span>
											@elseif($detail->status_penilaian_administrasi === 'rejected')
												<span class="badge rounded-pill bg-label-danger text-md-end text-dark">Tertolak</span>
											@endif
										</p>
										@if(in_array($detail->status_penilaian_administrasi, ['done', 'rejected']))
											<Label class="fw-bold">Unduh nilai : 
												<a href="{{url($detail->form_penilaian_administrasi)}}" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
													<i class="mdi mdi-file"></i> Unduh
												</a> 
											</Label> 
										@endif
										<hr>
									</div>                  
										<div class="row g-4">
											<form>                                
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
														: <a  class="btn rounded-pill btn-primary btn-sm" type="button" href="{{ url($detail->lembar_biodata_dospem)}}" target="_blank" title="Read PDF">
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
											<button class="btn btn-primary btn-next {{$disabled}}">
												<span class="align-middle d-sm-inline-block d-none me-sm-1" >Selanjutnya</span>
												<i class="mdi mdi-arrow-right"></i>
											</button>
										</div>
								</div>
							@endif

							<!-- tinjauan info -->
							<div id="tinjauan-usulan" class="content">
								<div class="content-header mb-3">
									<h5 class="mb-1 pb-2">Tinjauan usulan </h6>
									<p class="fw-bold">
										Status : 
										@if($detail->status_penilaian_peninjau === "waiting")
											<span class="badge rounded-pill bg-label-primary text-md-end text-dark">Sedang dinilai</span>
										@elseif($detail->status_penilaian_peninjau === "done")
											<span class="badge rounded-pill bg-label-success text-md-end text-dark">Lanjut ke tahap rekomendasi</span>
										@endif
									</p>

									@if($detail->status_penilaian_peninjau === "done")
										<label for="">
											Unduh Nilai
											<a  class="btn rounded-pill btn-primary btn-sm" type="button" href="{{url($detail->form_penilaian_peninjau)}}" target="_blank" title="Read PDF">
												<i class="mdi mdi-file"></i> Unduh
											</a>
										</label>
										<br>
										<Label class="fw-bold mt-1">Komentar peninjau: </Label> 
										<p>
											{{$detail->komentar_ke_mahasiswa}}
										</p>
									@endif
									<hr>
								</div>
								<div class="row g-4">                        
									<div class="d-flex flex-column align-items-center">
										@php
											$disabled = 'disabled';
										@endphp 
										@if($detail->status_penilaian_peninjau === 'done')
											<?php $disabled = ''; ?>
											<img
												src="{{asset('assets/img/illustrations/tinjau_succes.png')}}"
												alt="misc-under-maintenance"
												class="img-fluid zindex-1"
												width="400" />
										@else
											<img
												src="{{asset('assets/img/illustrations/tinjau_delay.png')}}"
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
									<button class="btn btn-primary btn-next " {{$disabled}}>
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
													<p class="fw-bold">
														Status : 
														@if($detail->satus_rekomendasi === null)
															<span class="badge rounded-pill bg-label-primary text-md-end text-dark">Sedang Diputuskan</span> 
														@elseif($detail->status_rekomendasi === 'internal')
															<span class="badge rounded-pill bg-label-info text-md-end text-dark">Internal</span> 
														@elseif($detail->status_rekomendasi === 'belmawa')
															<span class="badge rounded-pill bg-label-success text-md-end text-dark">Belmawa</span> 
														@endif
													</p>
												</div> 

												<!-- grup Rekomendasi internal-->

												<div>
													@if($detail->status_rekomendasi === 'internal')
														{{-- Grup rekomendasi Internal --}}
														<Label class="fw-bold">Tautan grup whatsapp Rekomendasi internal :
															<a href="https://youtu.be/XSo-6TAcKlA?si=UabjN8-qs1zBLlHo" target="_blank"  type="button" class="btn rounded-pill btn-primary btn-sm">
																<i class="mdi mdi-whatsapp"></i> Grup Whatsapp
															</a> 
														</Label> 
													@elseif($detail->status_rekomendasi === 'belmawa')
														{{-- Grup rekomendasi ke belmawa --}}
														<Label class="fw-bold">Tautan grup whatsapp Rekomendasi kemendikbudristek :
															<a href="https://youtu.be/XSo-6TAcKlA?si=UabjN8-qs1zBLlHo" target="_blank"  type="button" class="btn rounded-pill btn-primary btn-sm">
																<i class="mdi mdi-whatsapp"></i> Grup Whatsapp
															</a> 
														</Label>  
													@endif
												</div>

												<div>                                      
														<hr>
														<p class="fw-bold">Nilai substansi :
															<a href="{{url($detail->form_penilaian_substansi)}}" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
																<i class="mdi mdi-file"></i> Unduh
															</a>                                         
														</p>
												</div>
												
												<div>
													<p class="fw-bold">Nilai administrasi : 
														<a href="{{url($detail->form_penilaian_administrasi)}}" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
															<i class="mdi mdi-file"></i> Unduh
														</a> 
													</p>
												</div>

												<div>
													<p class="fw-bold">Nilai tinjauan : 
														<a href="{{url($detail->form_penilaian_peninjau)}}" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
															<i class="mdi mdi-file"></i> Unduh
														</a> 
													</p>
													
													<p class="fw-bold">Komentar peninjau : </p>
													<p class="fst-italic">
														"{{$detail->komentar_ke_mahasiswa}}"
													</p>
												</div>
												
												<hr>
									</div>
									<div class="row g-4">                        
											<div class="d-flex flex-column align-items-center">
												@if($detail->status_rekomendasi !== null)
													<?php $disabled = ''; ?>
													<img
														src="{{asset('assets/img/illustrations/tinjau_succes.png')}}"
														alt="misc-under-maintenance"
														class="img-fluid zindex-1"
														width="400" />
												@else
													<img
														src="{{asset('assets/img/illustrations/tinjau_delay.png')}}"
														alt="misc-under-maintenance"
														class="img-fluid zindex-1"
														width="400" />
												@endif
												</div>
									</div>
									<div class="col-12 d-flex justify-content-between">
											<button class="btn btn-outline-secondary" onclick="stepper3.prev()">
												<i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
												<span class="align-middle d-sm-inline-block d-none">Sebelumnya</span>
											</button>
									</div>
							</div>
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