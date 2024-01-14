<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KirimAdministrasiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "lembar_proposal" => "required|mimes:pdf|max:5120",
            "lembar_biodata_dospem" => "required|mimes:pdf|max:5120",
            "lembar_biodata_kelompok" => "required|mimes:pdf|max:5120",
            "lembar_pengesahan" => "required|mimes:pdf|max:5120",
        ];
    }

    public function messages(): array {
        return [
            "lembar_proposal.required" => "Lembar proposal tidak boleh kosong",
            "lembar_proposal.mimes" => "Lembar proposal harus berupa file pdf",
            "lembar_proposal.max" => "Lembar proposal maksimal berukuran 5MB",
            "lembar_biodata_dospem.required" => "Lembar biodata dosen pembimbing tidak boleh kosong",
            "lembar_biodata_dospem.mimes" => "Lembar biodata dosen pembimbing harus berupa file pdf",
            "lembar_biodata_dospem.max" => "Lembar biodata dosen pembimbing maksimal berukuran 5MB",
            "lembar_biodata_kelompok.required" => "Lembar biodata kelompok tidak boleh kosong",
            "lembar_biodata_kelompok.mimes" => "Lembar biodata kelompok harus berupa file pdf",
            "lembar_biodata_kelompok.max" => "Lembar biodata kelompok maksimal berukuran 5MB",
            "lembar_pengesahan.required" => "Lembar pengesahan tidak boleh kosong",
            "lembar_pengesahan.mimes" => "Lembar pengesahan harus berupa file pdf",
            "lembar_pengesahan.max" => "Lembar pengesahan maksimal berukuran 5MB",
        ];
    }
}
