  <!--Modal tinjauan-->
  <!-- Modal -->
  <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="backDropModalTitle">
            @if(!in_array($detail->status_penilaian_administrasi, ["done", "rejected"])) 
              Kirim Nilai Usulan
            @else
              Ubah Nilai Usulan
            @endif
          </h4>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row mb-2">
                <p>Unduh format form penilaian :
                    <a href="{{url($detail->jenisPkm->form_administrasi)}}" target="_blank">
                    <button type="button" class="btn rounded-pill btn-primary btn-sm">
                        <i class="mdi mdi-file"></i> Unduh
                    </button>
                      </a>
                </p> 
                
            </div>

            <form 
							action="{{route('penilai-administrasi.penilaian.tambah-penilaian', $detail->id)}}" 
							method="POST" 
							name='add_penilaian_adm'
							enctype="multipart/form-data">
							@csrf
							<div class="row mb-4">
									<label class="col-sm-2 col-form-label" for="basic-default-name">
											Upload form penilaian  
									</label>
									<div class="col-sm-9">
											
											<input 
												class="form-control" 
												type="file" 
												id="formFile"
												name="form_penilaian_administrasi" 
                        accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                        required />
											<label for="">Maks.5 MB | Tipe File : CSV, XLS, XLSX | <a>ADM_1803015016.xlsx</a></label>
                      <p>
                        @if($detail->form_penilaian_administrasi)
                          <a href="{{ $detail->form_penilaian_administrasi ? url($detail->form_penilaian_administrasi): '#'}}" target="_blank">
                            <?php 
                              $file = explode("/", $detail->form_penilaian_administrasi);  
                            ?>
                            {{$file[3]}}
                          </a> 
                        @endif
                      </p>
									</div>
							</div>
						</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Tutup
          </button>
          <button 
            type="button" 
            class="btn btn-primary" 
            onclick="submitPenilaian()">
            @if(!in_array($detail->status_penilaian_administrasi, ["done", "rejected"])) 
              Kirim Nilai Usulan
            @else
              Ubah Nilai Usulan
            @endif
					</button>
        </div>
      </div>
    </div>
  </div>