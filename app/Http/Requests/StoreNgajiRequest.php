<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNgajiRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Sesuaikan kalau butuh auth
    }

    public function rules(): array
    {
        return [
            'nama_user' => 'required|string|max:255',
            'kelas_user' => 'required|string|max:255',
            'jurusan_user' => 'required|string|max:255',
            'nama_surat' => 'required|string|max:255',
            'ayat_quran' => 'required|string|max:255',
        ];
    }
}
