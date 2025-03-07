<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCeramahRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Atur sesuai auth kalau dibutuhkan
    }

    public function rules(): array
    {
        return [
            'nama_user' => 'required|string|max:255',
            'kelas_user' => 'required|string|max:255',
            'jurusan_user' => 'required|string|max:255',
            'tanggal_input' => 'required|date',
            'tipe_isi' => 'required|in:teks,gambar,dokumen',
            'isi_teks' => 'nullable|required_if:tipe_isi,teks|string|max:5000',
            'isi_gambar' => 'nullable|required_if:tipe_isi,gambar|image|mimes:jpg,jpeg,png|max:2048',
            'isi_dokumen' => 'nullable|required_if:tipe_isi,dokumen|file|mimes:pdf,doc,docx|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'nama_user.required' => 'Nama user wajib diisi.',
            'kelas_user.required' => 'Kelas user wajib diisi.',
            'jurusan_user.required' => 'Jurusan user wajib diisi.',
            'tanggal_input.required' => 'Tanggal input wajib diisi.',
            'tanggal_input.date' => 'Tanggal input harus berupa tanggal yang valid.',
            'tipe_isi.required' => 'Tipe isi wajib dipilih.',
            'tipe_isi.in' => 'Tipe isi harus salah satu dari: teks, gambar, dokumen.',
            'isi_teks.required_if' => 'Isi ceramah wajib diisi saat tipe isi adalah teks.',
            'isi_teks.string' => 'Isi ceramah harus berupa teks.',
            'isi_gambar.required_if' => 'File gambar wajib diunggah saat tipe isi adalah gambar.',
            'isi_gambar.image' => 'File gambar harus berupa gambar.',
            'isi_gambar.mimes' => 'Format gambar yang diperbolehkan hanya: jpg, jpeg, png.',
            'isi_gambar.max' => 'Ukuran gambar maksimal 2MB.',
            'isi_dokumen.required_if' => 'File dokumen wajib diunggah saat tipe isi adalah dokumen.',
            'isi_dokumen.file' => 'File dokumen harus berupa file.',
            'isi_dokumen.mimes' => 'Format dokumen yang diperbolehkan hanya: pdf, doc, docx.',
            'isi_dokumen.max' => 'Ukuran dokumen maksimal 2MB.',
        ];
    }
}
