<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Materi;
use App\Models\User;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function showMateri(){
        $materi = Materi::all();

        return view('materi.masterMateri', compact('materi'));
    }

    public function kategori($id_kategori){
        $materiKategori = Materi::where('kategori', $id_kategori)->get();
        $kategori = Kategori::where('id_kategori', $id_kategori)->first();
        $idMentor = Materi::where('id_materi', $id_kategori)->pluck('id_mentor')->first();
        $mentor = User::find($idMentor);

        return view('materi.materiKategori', compact('materiKategori', 'kategori', 'mentor'));
    }

    public function materi($id_materi){
        $materi = Materi::where('id_materi', $id_materi)->first();
        $idMentor = Materi::where('id_materi', $id_materi)->pluck('id_mentor')->first();
        $mentor = User::where('id', $idMentor)->first();

        return view('materi.materi', compact('materi', 'mentor'));
    }
}
