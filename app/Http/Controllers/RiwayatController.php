<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Nilai;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    public function index() {
        $userId = Auth::id();

        $nilais = Nilai::where('id_user', $userId)->get();

        return view('murid.riwayat', compact('nilais'));
    }
}

