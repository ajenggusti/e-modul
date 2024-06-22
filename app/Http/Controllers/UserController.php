<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = User::get();
        $tab = "kelola user";
        return view('guru.kelolaUser.index', [
            'datas' => $datas,
            'tab' => $tab
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('guru.kelolaUser.editAdmin', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'sometimes|nullable|min:8',
            'level' => 'required',
            'absen' => 'required',
            'nip' => 'required',
        ]);
    
        $user = User::find($id);
        $user->name = $request->nama;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->level = $request->level;
        $user->absen = $request->absen;
        $user->nip = $request->nip;
        $user->save();
    
        return redirect()->route('kelUser.index')->with('success', 'User updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('kelUser.index')->with('success', 'User deleted successfully');
    }
}
