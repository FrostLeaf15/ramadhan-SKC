<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePuasaRequest extends FormRequest
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
            'tanggal_input' => 'required|date',
            'status' => 'required|in:saya berpuasa,saya berhalangan,saya sakit',
        ];
    }
}
