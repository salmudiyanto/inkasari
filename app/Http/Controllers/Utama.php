<?php

namespace App\Http\Controllers;

use App\Models\m_mobil;
use Illuminate\Http\Request;

class Utama extends Controller
{
    public function mobil(){
        // $nama = Session::get('name');
        $mobil = m_mobil::select()->get();
        return view('mobil', ['mobil' => $mobil]);
    }
    public function simpanmobil(Request $request){
        $file  = $request->file('gambar');
        $file->move('images', $file->getClientOriginalName());
        $data = [
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'plat' => $request->plat,
            'stat' => 'Tersedia',
            'gambar' => $file->getClientOriginalName()
        ];
        m_mobil::create($data);
        return redirect('mobil');
    }
}

