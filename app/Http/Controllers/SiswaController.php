<?php

namespace App\Http\Controllers;

use App\Exports\SiswasExport;
use App\Models\Siswa;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();
        return view('siswa.index', compact('siswas'));
    }

    public function export()
    {
        return Excel::download(new SiswasExport, 'DATA SISWA - SMK TARUNA BHAKTI 2025.xlsx');
    }
}