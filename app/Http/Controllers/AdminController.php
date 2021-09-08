<?php

namespace App\Http\Controllers;

use App\Adress;
use App\Anggota;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin ()
    {
        $adress = Adress::all();

        return view ('admin', compact('adress'));
    }

    public function alamatbaru()
    {
        return view ('alamatbaru');
    }

    public function detail_alamat($id)
    {
        $adress = Adress::findOrFail($id);
        $anggota = DB::table('anggotas')->where('adress_id', $adress["id"])->get();

        return view('detailAlamat', compact('adress', 'anggota'));
    }

    public function tambah_data_alamat(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
            'lokasi' => 'required',
        ]);
            
            // dd($request->all());
            $adress = new Adress();
            $adress ->nama = $request->input('nama');
            $adress ->longitude = $request->input('longitude');
            $adress ->latitude = $request->input('latitude');
            $adress ->lokasi = $request->input('lokasi');
            
            $adress ->save();
            
            
            return redirect()->route('admin');
    }

    public function tambah_anggota(Request $request, $id)
    {
        $this->validate($request, [
            'jumlah' => 'required',
            'sudah_vaksin' => 'required',
            'belum_vaksin' => 'required',
        ]);

        $anggota = new Anggota();
        $anggota ->adress_id = $id;
        $anggota ->jumlah = $request->input('jumlah');
        $anggota ->sudah_vaksin = $request->input('sudah_vaksin');
        $anggota ->belum_vaksin = $request->input('belum_vaksin');
        
        $anggota ->save();
        
        
        return redirect()->route('admin');
    }
}
