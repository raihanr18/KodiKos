<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function main(){
        $menu = Kategori::all();
        
        return view('menu', compact('menu'));
    }
}
