<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DVDDBController extends Controller
{
    public function index()
    {
        $dvd = DB::table('dvd')->paginate();

        return view('dvd.index', ['dvd' => $dvd]);
    }

    public function tambah()
    {
        return view('dvd.tambah');
    }

    public function store(Request $request)
    {
        $tersedia = ($request->stockdvd > 0) ? 'Y' : 'T';

        DB::table('dvd')->insert([
            'merkdvd' => $request->merkdvd,
            'stockdvd' => $request->stockdvd,
            'tersedia' => $tersedia
        ]);

        return redirect('/dvd');
    }

    public function edit($id)
    {
        $dvd = DB::table('dvd')
            ->where('kodedvd', $id)
            ->get();

        return view('dvd.edit', ['dvd' => $dvd]);
    }

    public function update(Request $request)
    {
        $tersedia = ($request->stockdvd > 0) ? 'Y' : 'T';

        DB::table('dvd')
            ->where('kodedvd', $request->kodedvd)
            ->update([
                'merkdvd' => $request->merkdvd,
                'stockdvd' => $request->stockdvd,
                'tersedia' => $tersedia
            ]);

        return redirect('/dvd');
    }

    public function hapus($id)
    {
        DB::table('dvd')
            ->where('kodedvd', $id)
            ->delete();

        return redirect('/dvd');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $dvd = DB::table('dvd')
            ->where('merkdvd', 'like', "%" . $cari . "%")
            ->paginate();

        return view('dvd.index', ['dvd' => $dvd]);
    }
}
