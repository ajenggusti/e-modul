<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Materi;
use App\Models\Posttest;
use Illuminate\Http\Request;

class PosttestController extends Controller
{
    public function index()
    {
        $datas = Posttest::with('questions')->get();
        $mapels = Mapel::all();
        return view('guru.kelolaPostTest.index', [
            'datas' => $datas,
            'mapels' => $mapels
        ]);
    }
    
    public function create()
    {
        $mapels = Mapel::all();
        return view('guru.kelolaPostTest.form', [
            'mapels' => $mapels
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'mapel' => 'required',
            'materi' => 'required',
            'questions.*.question' => 'required|string',
            'questions.*.a' => 'required|string',
            'questions.*.b' => 'required|string',
            'questions.*.c' => 'required|string',
            'questions.*.d' => 'required|string',
            'questions.*.e' => 'required|string',
            'questions.*.kunci' => 'required|string',
        ]);

        $posttest = Posttest::create([
            'id_materi' => $request->materi,
        ]);

        foreach ($request->questions as $question) {
            $posttest->questions()->create([
                'pertanyaan' => $question['question'],
                'a' => $question['a'],
                'b' => $question['b'],
                'c' => $question['c'],
                'd' => $question['d'],
                'e' => $question['e'],
                'kunci' => $question['kunci'],
            ]);
        }

        return redirect('/kelPosttest')->with('success', 'Post Test created successfully.');
    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function getMateri($id_mapel)
    {
        $materi = Materi::where('id_mapel', $id_mapel)->get();
        return response()->json($materi);
    }
}
