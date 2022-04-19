<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index()
    {
        $mitras = Mitra::get();
        return view('master.mitra.index', compact('mitras'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'mitra'    => 'required|unique:mitras'
        ]);

        Mitra::create([
            'mitra'    => $request->mitra
        ]);

        return redirect()->back();
    }

    public function edit($id)
    {
        $mitra = Mitra::findOrFail($id);
        return view('master.mitra.edit', compact('mitra'));
    }

    public function update(Request $request, mitra $mitra)
    {
        $this->validate($request, [
            'mitra'    => 'required|unique:mitras,mitra,' .$mitra->id
        ]);

        $mitra->update([
            'mitra'    => $request->mitra
        ]);

        return redirect()->route('mitra.index');
    }

    public function destroy($id)
    {
        $mitra = Mitra::findOrfail($id);
        $mitra->delete();

        return redirect()->back();
    }
}
