<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Materi;
use App\Models\Pretest;
use App\Models\Feedback;
use Illuminate\Http\Request;

class PretestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Pretest::get();
        return view('guru.kelolaPretest.index', [
            'datas' => $datas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // dd($request);
        $id = $request->query('id');
        $data = Materi::find($id);

        return view('guru.kelolaPretest.form', [
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jawaban' => 'required|string',
            'id_materi' => 'required|integer',
        ]);
    
        $data = new Pretest();
        $data->jawaban = $validatedData['jawaban'];
        $data->id_materi = $validatedData['id_materi'];
        $data->id_user = auth()->id();
    
        $data->save();
    
        // Fetch a random message from feedback table
        $randomFeedback = Feedback::inRandomOrder()->first();
        if ($randomFeedback) {
            $randomFeedbackMessage = $randomFeedback->kata_semangat;
        } else {
            $randomFeedbackMessage = 'Semangat belajar!!'; // Default message if no feedback found
        }    
        return redirect()->route('preMateriPost', ['id' => $validatedData['id_materi']])
            ->with('success', $randomFeedbackMessage);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pretest = Pretest::findOrFail($id);
            $pretest->delete();
            return redirect('/kelPretest')->with('success', 'Pre-test berhasil dihapus!');
    }
    
}
