<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $datas = Mapel::get();
        return view('murid.landingPage', [
            'datas' => $datas
        ]);
    }
}
