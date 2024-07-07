<?php

namespace App\Http\Controllers;
use App\Exports\NilaiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Nilai::with(['user', 'materi.mapel'])->get(); // Eager load relationships
        return view('guru.kelolaNilai.index', [
            'datas' => $datas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $nilai = Nilai::findOrFail($id); // Find the record by ID or fail

        // Delete the record
        $nilai->delete();

        // Redirect back to the index with a success message
        return redirect()->route('laporan.index')->with('success', 'Nilai berhasil dihapus.');
    }
    public function export()
    {
        return Excel::download(new NilaiExport, 'laporan-nilai.xlsx');
    }
    
}
