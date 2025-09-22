<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    public function index()
    {
        $dokumen = Dokumen::paginate(3);
        return view('welcome', compact('dokumen'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file_00' => 'required|image|max:4028',
            'file_50' => 'required|image|max:4028',
            'file_100' => 'required|image|max:4028',
            'lokasi'    => 'required',
            'kegiatan'  => 'required',
            'keterangan'    => 'required'
        ]);

        $file_00  = $request->file('file_00')->store('uploads', 'public');
        $file_50  = $request->file('file_50')->store('uploads', 'public');
        $file_100 = $request->file('file_100')->store('uploads', 'public');

        $kode = Str::upper(Str::random(6));

        Dokumen::create([
            'file_00'   => $file_00,
            'kode'      => $kode,
            'file_50'   => $file_50,
            'file_100'  => $file_100,
            'lokasi'    => $request->lokasi,
            'kegiatan'  => $request->kegiatan,
            'keterangan'=> $request->keterangan
        ]);

        return redirect()->route('index')->with(['success'  => 'Data berhasil ditambahkan']);
    }

    public function destroy($id){
        $dokumen = Dokumen::findOrFail($id);
        $dokumen->delete();
        return redirect()->route('index')->with(['success' => 'Data berhasil dihapus']);
    }
}
