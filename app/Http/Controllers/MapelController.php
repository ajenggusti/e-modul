<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Mapel::get();
        return view('guru.kelolaMapel.index', [
            'datas' => $datas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.kelolaMapel.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'mapel' => 'required|string|max:255',
            'gbr' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('gbr')) {
                $filePath = public_path('storage/' . $request->gbr);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            $image = "gambars/" . time() . '-' . uniqid() . '.' . $request->gbr->getClientOriginalExtension();
            $request->gbr->move('storage/gambars', $image);
            $mapel=new Mapel();
            $mapel->gambar = $image;
            $mapel->save();
        }

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
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
