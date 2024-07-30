<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class DashboardController extends Controller
{
    public function index()
    {
        $beritaCount = Berita::count();
        return view('dashboard',  compact('beritaCount'));
    }
}
