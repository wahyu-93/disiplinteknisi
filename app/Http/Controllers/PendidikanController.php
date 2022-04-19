<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index()
    {
        $pendidikans = Pendidikan::get();
        return view('master.pendidikan.index', compact('pendidikans'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'pendidikan'    => 'required|unique:pendidikans'
        ]);

        Pendidikan::create([
            'pendidikan'    => $request->pendidikan
        ]);

        return redirect()->back();
    }

    public function edit($id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        return view('master.pendidikan.edit', compact('pendidikan'));
    }

    public function update(Request $request, Pendidikan $pendidikan)
    {
        $this->validate($request, [
            'pendidikan'    => 'required|unique:pendidikans,pendidikan,' .$pendidikan->id
        ]);

        $pendidikan->update([
            'pendidikan'    => $request->pendidikan
        ]);

        return redirect()->route('pendidikan.index');
    }

    public function destroy($id)
    {
        $pendidikan = Pendidikan::findOrfail($id);
        $pendidikan->delete();

        return redirect()->back();
    }
}
