<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usulan extends Model
{
    use HasFactory;

    protected $table = "usulan";

    protected $fillable = [
        "judul",
        "pendahuluan",
        "usulan",
        "jenis_pkm_id",
        "anggaran",
        "tahun_pengajuan",
        "ketua_kelompok_id",
        "tugas_ketua_kelompok",
        "anggota_satu_id",
        "tugas_anggota_satu",
        "anggota_dua_id",
        "tugas_anggota_dua",
        "anggota_tiga_id",
        "tugas_anggota_tiga",
        "anggota_empat_id",
        "tugas_anggota_empat",
        "pembimbing_id",
        "lembar_bimbingan",
        "lembar_proposal",
        "lembar_biodata_dospem",
        "lembar_pengesahan",
        "penilai_substansi_id",
        "form_penilaian_substansi",
        "status_penilaian_substansi",
        "penilai_administrasi_id",
        "form_penilaian_administrasi",
        "status_penilaian_administrasi",
        "peninjau_id",
        "form_penilaian_peninjau",
        "status_penilaian_peninjau",
        "wakil_rektor_id",
        "status_rekomendasi",
        "komentar_ke_mahasiswa",
        "komentar_ke_warek"
    ];

    public function jenisPkm(){
        return $this->belongsTo(JenisPkm::class, "jenis_pkm_id");
    }

    public function ketuaKelompok(){
        return $this->belongsTo(DataMahasiswa::class, "ketua_kelompok_id");
    }

    public function anggotaSatu(){
        return $this->belongsTo(DataMahasiswa::class, "anggota_satu_id");
    }

    public function getAnggotaSatu(){
        $nullData =  [
            "id" => null,
            "nama" => null,
            "nim" => null,
            "fakultas" => null,
            "prodi" => null,
            "keterangan" => null,
        ];

        return $this->anggotaSatu ? $this->anggotaSatu : $nullData;
    }

    public function anggotaDua(){
        return $this->belongsTo(DataMahasiswa::class, "anggota_dua_id");
    }

    public function getAnggotaDua(){
        $nullData =  [
            "id" => null,
            "nama" => null,
            "nim" => null,
            "fakultas" => null,
            "prodi" => null,
            "keterangan" => null,
        ];

        return $this->anggotaDua ? $this->anggotaDua : (object) $nullData;
    }

    public function anggotaTiga(){
        return $this->belongsTo(DataMahasiswa::class, "anggota_tiga_id");
    }

    public function getAnggotaTiga(){
        $nullData =  [
            "id" => null,
            "nama" => null,
            "nim" => null,
            "fakultas" => null,
            "prodi" => null,
            "keterangan" => null,
        ];

        return $this->anggotaTiga ? $this->anggotaTiga : (object) $nullData;
    }

    public function anggotaEmpat(){
        return $this->belongsTo(DataMahasiswa::class, "anggota_empat_id");
    }

    public function getAnggotaEmpat(){
        $nullData =  [
            "id" => null,
            "nama" => null,
            "nim" => null,
            "fakultas" => null,
            "prodi" => null,
            "keterangan" => null,
        ];

        return $this->anggotaEmpat ? $this->anggotaEmpat : (object) $nullData;
    }
    

    public function pembimbing(){
        return $this->belongsTo(DataDosen::class, "pembimbing_id");
    }

    public function penilaiSubstansi(){
        return $this->belongsTo(Penilai::class, "penilai_substansi_id");
    }

    public function penilaiAdministrasi(){
        return $this->belongsTo(Penilai::class, "penilai_administrasi_id");
    }

    public function penilaiPeninjau(){
        return $this->belongsTo(Peninjau::class, "peninjau_id");
    }

    public function wakilRektor(){
        return $this->belongsTo(Administrator::class, "wakil_rektor_id");
    }
}
