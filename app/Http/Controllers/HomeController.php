<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\ProfileSekolah;
use App\Models\Kontak;
use App\Models\Sambutan;
use App\Models\Sejarah;



class HomeController extends Controller
{
    public function index()
    {
        $sambutan = Sambutan::first();
        return view('home.index',compact('sambutan'));
    }    
    public function kontak()
    {
        return view('home.kontak');
    }    

    public function sejarah()
    {
        $sejarah = Sejarah::first();
        return view('informasi_sekolah.sejarah', compact('sejarah'));
    }

    public function berita()
    {
        $berita = Berita::latest()->get();
        return view('home.berita', compact('berita'));
    }


}
