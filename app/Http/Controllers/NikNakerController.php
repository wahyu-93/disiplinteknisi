<?php

namespace App\Http\Controllers;

use App\Models\Naker;
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
        return view('transaksi.nikNaker.create');
    }
}
