<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Materi;
use App\Models\Pretest;
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
        // Validate the request data
        $validatedData = $request->validate([
            'jawaban' => 'required|string',
            'id_materi' => 'required|integer',
        ]);

        // Create a new instance of the model and fill it with the validated data
        $data = new Pretest();
        $data->jawaban = $validatedData['jawaban'];
        $data->id_materi = $validatedData['id_materi'];
        $data->id_user = 2;

        // Save the model to the database
        $data->save();

        // Redirect to the appropriate route with a success message
        return redirect()->route('preMateriPost', ['id' => $validatedData['id_materi']])
            ->with('success', 'Materi created successfully!');
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
        //
    }
}
