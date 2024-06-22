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
        $datas = Posttest::get();
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
        // dd($request);
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

        foreach ($request->questions as $question) {
            Posttest::create([
                'id_materi' => $request->materi,
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
        $posttest = Posttest::findOrFail($id);
        return view('guru.kelolaPostTest.show', [
            'posttest' => $posttest
        ]);
    }


    public function edit(string $id)
    {
        $posttest = Posttest::findOrFail($id);
        $mapels = Mapel::all();
        $materi = Materi::where('id_mapel', $posttest->materi->id_mapel)->get();

        return view('guru.kelolaPostTest.edit', [
            'posttest' => $posttest,
            'mapels' => $mapels,
            'materi' => $materi
        ]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'mapel' => 'required',
            'materi' => 'required',
            'question' => 'required|string',
            'a' => 'required|string',
            'b' => 'required|string',
            'c' => 'required|string',
            'd' => 'required|string',
            'e' => 'required|string',
            'kunci' => 'required|string',
        ]);

        $posttest = Posttest::findOrFail($id);
        $posttest->update([
            'id_materi' => $request->materi,
            'pertanyaan' => $request->question,
            'a' => $request->a,
            'b' => $request->b,
            'c' => $request->c,
            'd' => $request->d,
            'e' => $request->e,
            'kunci' => $request->kunci,
        ]);

        return redirect('/kelPosttest')->with('success', 'Post Test updated successfully.');
    }

    public function destroy($id)
    {
        $posttest = Posttest::findOrFail($id);
        $posttest->delete();
        return redirect('/kelPosttest')->with('success', 'Post Test deleted successfully.');
    }

    public function getMateri($id_mapel)
    {
        $materi = Materi::where('id_mapel', $id_mapel)->get();
        return response()->json($materi);
    }
}
