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
        $nakers = Naker::get();
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
        dd($request);
    }
}
