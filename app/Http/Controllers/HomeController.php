<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Artikel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $berita = Artikel::all();
        $kategori = Kategori::all();
        $artikel = Artikel::take(2)->get();
        $utama = Artikel::take(1)->get();
        return view('welcome', compact('berita', 'artikel','utama','kategori'));
    }
}
