<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KirimUsulanRequest extends FormRequest
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
            "lembar_bimbingan" => "required|mimes:pdf|max:5120",
            "judul" => "required|string",
            "jenis_pkm_id" => "required|integer",
            "anggaran" => "required|integer|min:5000000|max:12000000",
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array {
        return [
            "lembar_bimbingan.required" => "Lembar bimbingan tidak boleh kosong",
            "lembar_bimbingan.mimes" => "Lembar bimbingan harus berupa file pdf",
            "lembar_bimbingan.max" => "Lembar bimbingan maksimal berukuran 5MB",
            "judul.required" => "Judul tidak boleh kosong",
            "judul.string" => "Judul harus berupa string",
            "jenis_pkm.required" => "Jenis PKM tidak boleh kosong",
            "jenis_pkm.integer" => "Jenis PKM harus berupa integer",
            "anggaran.required" => "Anggaran tidak boleh kosong",
            "anggaran.integer" => "Anggaran harus berupa integer",
            "anggaran.min" => "Anggaran minimal Rp. 5.000.000",
            "anggaran.max" => "Anggaran maksimal Rp. 12.000.000",
        ];
    }
}
