<?php

namespace App\Http\Controllers;

use App\Models\Direktorat;
use App\Models\Mitra;
use App\Models\Naker;
use App\Models\Pendidikan;
use App\Models\PosisiMitra;
use Illuminate\Http\Request;

class NikNakerController extends Controller
{
    public function index()
    {
        $nakers = Naker::with('pendidikan')
                    ->with('direktorat')
                    ->with('mitra')
                    ->with('posisiMitra')
                    ->get();
                                                                                                                                                                                                                                                                                                                                                                                                                                                            ;
        return view('transaksi.nikNaker.index', compact('nakers'));
    }

    public function create()
    {
        $pendidikans = Pendidikan::get();
        $direktorats = Direktorat::get();
        $mitras = Mitra::get();
        $posisis = PosisiMitra::get();

        return view('transaksi.nikNaker.create', compact('pendidikans', 'direktorats', 'mitras', 'posisis'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'kelamin' => 'required',
            'alamat' => 'required',
            'no_ktp' => 'required|unique:nakers',
            'kk' => 'required',
            'no_kartu_bpjs' => 'nullable|unique:nakers',
            'no_npwp' => 'nullable|unique:nakers',
            'noHp' => 'required',
            'nama_keluarga' => 'required',
            'noHpKeluarga' => 'required',
            'email' => 'required||unique:nakers',
            'witel' => 'required',
            'pendidikan' => 'required',
            'direktorat' => 'required',
            'posisi' => 'required',
            'mitra' => 'required',
            'tgl_pengajuan' => 'required',
            'nik_waspang' => 'required',
            'regional' => 'required',
        ]);

        $naker = Naker::create([
            'nama'          => $request->nama,
            'tgl_lahir'     => $request->tgl_lahir,
            'tempat_lahir'  => $request->tmp_lahir,
            'jenis_kelamin' => $request->kelamin,
            'alamat'        => $request->alamat,
            'no_ktp'        => $request->no_ktp,
            'no_kk'         => $request->kk,
            'no_kartu_bpjs' => $request->no_kartu_bpjs,
            'no_npwp'       => $request->no_npwp,
            'no_hp'         => $request->noHp,
            'no_hp_keluarga'=> $request->noHpKeluarga,
            'nama_keluarga' => $request->nama_keluarga,
            'email'         => $request->email,
            'witel'         => $request->witel,
            'pendidikan_id' => $request->pendidikan,
            'direktorat_id' => $request->direktorat,
            'posisi_id'     => $request->posisi,
            'mitra_id'      => $request->mitra,
            'tgl_pengajuan' => $request->tgl_pengajuan,
            'nik_waspang'   => $request->nik_waspang,
            'regional'      => $request->regional,
        ]);

        return redirect()->route('nik.naker.index');
    }
}
