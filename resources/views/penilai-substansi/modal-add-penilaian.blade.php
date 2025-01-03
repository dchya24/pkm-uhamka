<div class="modal fade" id="add-penilaian-substansi" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="backDropModalTitle">
          @if($detail->status_penilaian_substansi === 'sedang dinilai') 
            Kirim nilai
          @else
            Ubah Nilai
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
                <a href="{{url($detail->jenisPkm->form_substansi)}}" type="button" class="btn rounded-pill btn-primary btn-sm" target="_blank">
                  <i class="mdi mdi-file"></i> Unduh
                </a> 
              </p>                             
          </div>

          <form action="{{route('penilai-substansi.penilaian.tambah-penilaian', $detail->id)}}" enctype="multipart/form-data" name="form-tambah-penilaian" method="POST">
              @csrf
              <div class="row mb-4">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">
                      Upload form penilaian  
                  </label>
                  <div class="col-sm-9">
                      <input 
                        class="form-control" 
                        type="file" 
                        name="form_penilaian_substansi" 
                        id="formFile" 
                        accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                        required/>
                      <label for="">Maks.5 MB | Tipe File : .csv, .xls, .xslx</label>
                      <p>
                        @if($detail->form_penilaian_substansi)
                          <a href="{{ $detail->form_penilaian_substansi ? url($detail->form_penilaian_substansi): '#'}}" target="_blank">
                            <?php 
                              $file = explode("/", $detail->form_penilaian_substansi);  
                            ?>
                            {{$file[3]}}
                          </a> 
                        @endif
                      </p>
                  </div>
              </div>
          
              <div class="row mb-4">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">
                      Hasil penilaian
                  </label>
                  <div class="col-sm-9">
                      <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <?php
                          $status_penilaian = $detail->status_penilaian_substansi;
                          $checkedMinor = $status_penilaian === 'minor' ? 'checked' : '';
                          $checkedMayor = $status_penilaian === 'mayor' ? 'checked' : '';
                        ?>
                          <input 
                            type="radio" 
                            class="btn-check" 
                            value="minor" 
                            name="status_penilaian" 
                            id="status_penilaian1" {{$checkedMinor}}/>
                          <label class="btn btn-outline-success" for="status_penilaian1">Minor</label>

                          <input type="radio" 
                            class="btn-check" 
                            value='mayor' 
                            name="status_penilaian" 
                            id="status_penilaian2" {{$checkedMayor}} />
                          <label class="btn btn-outline-danger" for="status_penilaian2">Mayor</label>
                      </div>
                  </div>
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" ">
          Tutup
        </button>
        <button type="button" onclick="submitPenilaian()" class="btn btn-primary">
          @if($detail->status_penilaian_substansi === 'sedang dinilai') 
            Kirim nilai
          @else
            Ubah Nilai
          @endif
        </button>

      </div>
    </div>
  </div>
</div>