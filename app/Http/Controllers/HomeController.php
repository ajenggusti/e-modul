<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Materi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function detailMapel($id)
    {
        $datas = Materi::where('id_mapel',$id)->get();
        $mapel = Mapel::findOrFail($id);
        // dd($data);
        if (!$datas) {
            abort(404, 'Materi not found');
        }
            return view('murid.detailMapel', [
                'datas' => $datas,
                'mapel'=>$mapel
            ]);
    }
    public function preMateriPost($id)
    {
        // dd($id);
        $data = Materi::findOrFail($id);
        return view('murid.materi', [
            'data'=>$data
        ]);
    }
    public function aksesMateri($id)
    {
        $data = Materi::findOrFail($id);
        // dd($data);
        return view('murid.aksesMateri', [
            'data'=>$data
        ]);
    }
    
}
