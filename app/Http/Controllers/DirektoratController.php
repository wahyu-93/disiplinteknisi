<?php

namespace App\Http\Controllers;

use App\Models\Direktorat;
use Illuminate\Http\Request;

class DirektoratController extends Controller
{
    public function index()
    {
        $direktorats = Direktorat::get();
        return view('master.direktorat.index', compact('direktorats'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'direktorat'    => 'required|unique:direktorats'
        ]);

        Direktorat::create([
            'direktorat'    => $request->direktorat
        ]);

        return redirect()->back();
    }

    public function edit($id)
    {
        $direktorat = Direktorat::findOrFail($id);
        return view('master.direktorat.edit', compact('direktorat'));
    }

    public function update(Request $request, Direktorat $direktorat)
    {
        $this->validate($request, [
            'direktorat'    => 'required|unique:direktorats,direktorat,' .$direktorat->id
        ]);

        $direktorat->update([
            'direktorat'    => $request->direktorat
        ]);

        return redirect()->route('direktorat.index');
    }

    public function destroy($id)
    {
        $direktorat = Direktorat::findOrfail($id);
        $direktorat->delete();

        return redirect()->back();
    }
}
