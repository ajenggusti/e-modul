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
        return view('guru.kelolaMateri.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namaMateri' => 'required|string|max:255',
            'linkYt' => 'required|string',
            'yt' => 'required|string',
            'file' => 'required|file|mimes:pdf,doc,docx|max:10240', // 10 MB limit
            'gbr' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);

        if ($request->hasFile('file')) {
            $fileName = time() . '-' . uniqid() . '.' . $request->file->getClientOriginalExtension();
            $filePath = $request->file->move(public_path('storage/gbr'), $fileName);
        }

        if ($request->hasFile('gbr')) {
            $gbrName = time() . '-' . uniqid() . '.' . $request->gbr->getClientOriginalExtension();
            $gbrPath = $request->gbr->move(public_path('storage/gbr'), $gbrName);
        }

        $materi = new Materi();
        $materi->nama_materi = $validatedData['namaMateri'];
        $materi->link_yt = $validatedData['linkYt'];
        $materi->yt = $validatedData['yt'];
        $materi->file = 'gbr/' . $fileName;
        $materi->gambar = 'gbr/' . $gbrName;
        $materi->save();

        return redirect('/kelMateri')->with('success', 'Data Materi telah berhasil dibuat!');
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
            'yt' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
            'gbr' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);
    
        $materi = Materi::findOrFail($id);
        $materi->nama_materi = $validatedData['namaMateri'];
        $materi->link_yt = $validatedData['linkYt'];
        $materi->yt = $validatedData['yt'];
    
        if ($request->hasFile('file')) {
            $fileName = time() . '-' . uniqid() . '.' . $request->file->getClientOriginalExtension();
            $filePath = $request->file->storeAs('public/gbr', $fileName);
    
            $oldFile = storage_path('app/public/' . $materi->file);
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }
    
            $materi->file = 'gbr/' . $fileName;
        }
    
        if ($request->hasFile('gbr')) {
            $image = time() . '-' . uniqid() . '.' . $request->gbr->getClientOriginalExtension();
            $filePath = $request->gbr->storeAs('public/gbr', $image);
    
            $oldImage = storage_path('app/public/' . $materi->gambar);
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }
    
            $materi->gambar = 'gbr/' . $image;
        }
    
        $materi->save();
    
        return redirect('/kelMateri')->with('success', 'Data Materi berhasil diedit!');
    }
    
    
    
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $materi = Materi::findOrFail($id);
    
        // Delete the file
        $filePath = public_path('storage/' . $materi->file);
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    
        // Delete the image
        $imagePath = public_path('storage/' . $materi->gambar);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    
        // Delete the materi record
        $materi->delete();
    
        return redirect('/kelMateri')->with('success', 'Data Materi berhasil di hapus');
    }
    
}
