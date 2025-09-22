<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PDFController extends Controller
{
    public function generate(Request $request)
    {
        $request->validate([
            'kop_surat' => 'required|image|max:2048',
            'logo_surat' => 'required|image|max:2048',
            'file_01' => 'required',
            'file_02' => 'required',
            'file_03' => 'required',
            'nama_pekerjaan' => 'required',
            'nomor_spk' => 'required',
        ]);

        $kopPath = $request->file('kop_surat')->store('kop_surat', 'public');
        $logoPath = $request->file('logo_surat')->store('logo_surat', 'public');

        $dokumen = Dokumen::whereIn('id', [
            $request->file_01,
            $request->file_02,
            $request->file_03
        ])->get();

        $data = [
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'nomor_spk' => $request->nomor_spk,
            'tanggal_spk' => $request->tanggal_spk,
            'nama_perusahaan' => $request->nama_perusahaan,
            'nama_vendor' => $request->nama_vendor,
            'nama_pengawas' => $request->nama_pengawas,
            'nama_manager' => $request->nama_manager,
            'kop_surat' => $kopPath, // Simpan relative path saja
            'logo_surat' => $logoPath, // Simpan relative path saja
        ];

        if (!Storage::exists('public/' . $kopPath)) {
            Log::error('File kop surat tidak ditemukan', ['path' => $kopPath]);
            abort(500, 'File kop surat tidak ditemukan');
        }

        $pdf = Pdf::loadView('pdf.template', compact('data', 'dokumen'))
            ->setPaper('A4', 'landscape')
            ->setOptions([
                'isRemoteEnabled' => true,
                'chroot' => storage_path('app/public'),
                'enable_php' => true,
                'defaultFont' => 'sans-serif'
            ]);

        return $pdf->download('dokumen-dokumentasi.pdf');
    }
}