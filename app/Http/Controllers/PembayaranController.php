<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Str;

class PembayaranController extends Controller
{
    public function viewBayar(){
        return view('premium.pembayaran');
    }

    public function prosesBayar(Request $request){
        $randomPembayaran = Str::random(10);
        $idPengguna = auth()->user()->id;
        $tanggal = Carbon::now();

        User::where('id', $idPengguna)->update([
            'status_premium' => true
        ]);

        Pembayaran::create([
            'kode_pemabayaran' => $randomPembayaran,
            'info_pembayaran' => $request->metode_pembayaran,
            'tgl_aktivasi' => $tanggal,
            'tgl_kadaluarsa' => 10,
            'id_pengguna' => $idPengguna
        ]);

        return view('premium.pembayaranBerhasil');
    }
}
