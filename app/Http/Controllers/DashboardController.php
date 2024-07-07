<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Materi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $tab = 'Dashboard guru';

        $totalSiswa = User::where('level', 'murid')->count();
        $totalGuru = User::where('level', 'guru')->count();
        $totalSemuaPengguna = User::count();
        $totalMateri = Materi::count();

        return view('guru.dashboard', [
            'tab' => $tab,
            'totalSiswa' => $totalSiswa,
            'totalGuru' => $totalGuru,
            'totalSemuaPengguna' => $totalSemuaPengguna,
            'totalMateri'=>$totalMateri
        ]);
    }


}
