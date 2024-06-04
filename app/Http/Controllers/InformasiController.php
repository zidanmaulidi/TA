<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Kegiatan;
use App\Models\Keuangan;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index()
    {
        $informations = Informasi::all();
        $kegiatans = Kegiatan::all();
        $keuangans = Keuangan::all();
        return view('landing-page.index', compact('informations', 'kegiatans', 'keuangans'));
    }
}
