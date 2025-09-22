<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;

class GenerateController extends Controller
{
    public function index()
    {
        $dokumen = Dokumen::all();
        return view('generate', compact('dokumen'));
    }
}
