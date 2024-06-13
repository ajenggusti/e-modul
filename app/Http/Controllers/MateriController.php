<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Materi::get();
        return view('guru.kelolaMateri.index', [
            'datas' => $datas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mapels = Mapel::get();
        return view('guru.kelolaMateri.form', [
            'mapels' => $mapels
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namaMateri' => 'required|string|max:255',
            'linkYt' => 'required|string',
            'category' => 'required',
            'materi' => 'nullable|string',
            'file' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);
    
        if ($request->hasFile('file')) {
            $filePath = public_path('storage/files/' . $request->file);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
    
            $fileName = time() . '-' . uniqid() . '.' . $request->file->getClientOriginalExtension();
            $filePath = $request->file->move(public_path('storage/files'), $fileName);
        }
    
        $materi = new Materi();
        $materi->nama_materi = $validatedData['namaMateri'];
        $materi->link_yt = $validatedData['linkYt'];
        $materi->id_mapel = $validatedData['category'];
        $materi->materi = $validatedData['materi'];
        $materi->file = 'files/' . $fileName; 
        $materi->save();
    
        return redirect('/kelMateri')->with('success', 'Materi created successfully!');
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
