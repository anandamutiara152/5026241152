<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EASController extends Controller
{
    public function index()
    {
        $eas = DB::table('tagihan_air')->get();
        return view('eas.index', compact('eas'));
    }

    public function create()
    {
        return view('eas.input');
    }

    public function store(Request $request)
    {
        DB::table('tagihan_air')->insert([
            'NoMeteran' => $request->NoMeteran,
            'MeterAwal' => $request->MeterAwal,
            'MeterAkhir' => $request->MeterAkhir
        ]);

        return redirect('/eas');
    }
}
