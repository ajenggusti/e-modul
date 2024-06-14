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
    public function edit($id)
    {
        $materi = Materi::findOrFail($id);
        $mapels = Mapel::get();

        return view('guru.kelolaMateri.edit', [
            'materi' => $materi,
            'mapels' => $mapels,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'namaMateri' => 'required|string|max:255',
            'linkYt' => 'required|string',
            'category' => 'required',
            'materi' => 'nullable|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $materi = Materi::findOrFail($id);

        $materi->nama_materi = $validatedData['namaMateri'];
        $materi->link_yt = $validatedData['linkYt'];
        $materi->id_mapel = $validatedData['category'];
        $materi->materi = $validatedData['materi'];

        if ($request->hasFile('file')) {
            $fileName = time() . '-' . uniqid() . '.' . $request->file->getClientOriginalExtension();
            $filePath = $request->file->move(public_path('storage/files'), $fileName);
            $materi->file = 'files/' . $fileName;
        }

        $materi->save();

        return redirect('/kelMateri')->with('success', 'Materi updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $materi = Materi::findOrFail($id);
    
        $filePath = public_path('storage/' . $materi->file);
    
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    
        $materi->delete();
    
        return redirect('/kelMateri')->with('success', 'Materi deleted successfully!');
    }
}
