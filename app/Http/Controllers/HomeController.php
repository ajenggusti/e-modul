<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Materi;
use App\Models\Pretest;
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

    public function detailMapel()
    {
        $datas = Materi::get();
        // $mapel = Mapel::get();
        // dd($data);
        if (!$datas) {
            abort(404, 'Materi not found');
        }
            return view('murid.detailMapel', [
                'datas' => $datas,
            ]);
    }
    public function preMateriPost($id)
    {
        $data = Materi::findOrFail($id);
        $userId = auth()->id();
        $pretestCompleted = Pretest::where('id_materi', $id)
            ->where('id_user', $userId)
            ->exists();
        // dd($pretestCompleted);
        return view('murid.materi', [
            'data' => $data,
            'pretestCompleted' => $pretestCompleted
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
    public function menuMateri(){
        return view('murid.menuMateri');
    }
    
}
