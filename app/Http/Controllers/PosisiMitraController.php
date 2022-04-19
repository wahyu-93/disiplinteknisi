<?php

namespace App\Http\Controllers;

use App\Models\PosisiMitra;
use Illuminate\Http\Request;

class PosisiMitraController extends Controller
{
    public function index()
    {
        $posisis = PosisiMitra::get();
        return view('master.posisiMitra.index', compact('posisis'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
           'posisi'    => 'required|unique:posisi_mitras'
        ]);

        PosisiMitra::create([
           'posisi'    => $request->posisi
        ]);

        return redirect()->back();
    }

    public function edit($id)
    {
        $posisi = PosisiMitra::findOrFail($id);
        return view('master.posisiMitra.edit', compact('posisi'));
    }

    public function update(Request $request, PosisiMitra $posisi)
    {
        $this->validate($request, [
           'posisi'    => 'required|unique:posisi_mitras,posisi,' .$posisi->id
        ]);

        $posisi->update([
           'posisi'    => $request->posisi
        ]);

        return redirect()->route('mitra.index');
    }

    public function destroy($id)
    {
        $posisi = PosisiMitra::findOrfail($id);
        $posisi->delete();

        return redirect()->back();
    }
}
