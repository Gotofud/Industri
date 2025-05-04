<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Kategori;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Artikel::all();
        $kategori = Kategori::all();
        $artikel = Artikel::take(2)->get();
        $utama = Artikel::take(1)->get();
        return view('berita.index', compact('berita', 'artikel','utama','kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('berita.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'cover' => 'required|string',
        //     'judul' => 'required|string|max:255',
        //     'isi' => 'required|string', 
        //     'tanggal' => 'required|date',
        //     'id_kategori' => 'required|exist:id_kategori'
        //     ]);
    
            $berita = new Artikel();
            $berita->judul = $request->judul;
            $berita->isi = $request->isi;
            $berita->tanggal = $request->tanggal;
            $berita->id_kategori = $request->id_kategori;
    
            if ($request->hasFile('cover')) {
                $berita->deleteImage();
                $img = $request->file('cover');
                $name = rand(1000, 9999) . '_' . $img->getClientOriginalName();
                $img->move('covers/berita', $name);
        
                $berita->cover = $name;
            } else {
    
                $berita->cover = null;
            }
    
            $berita->save();
            return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $kategori = Kategori::all();
        return view('berita.create', compact('kategori'));
    }
    public function read($id)
    {
        $berita = Artikel::findOrFail($id);
        $kategori = Kategori::all();
        return view('tampilan', compact('berita','kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Artikel::findOrFail($id);
        $kategori = Kategori::all();
        return view('berita.edit', compact('berita','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $berita = Artikel::findOrFail($id);
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->tanggal = $request->tanggal;
        $berita->id_kategori = $request->id_kategori;

        if ($request->hasFile('cover')) {
            $berita->deleteImage();
            $img = $request->file('cover');
            $name = rand(1000, 9999) . '_' . $img->getClientOriginalName();
            $img->move('covers/berita', $name);
    
            $berita->cover = $name;
        } else {

            $berita->cover = null;
        }

        $berita->save();
        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Artikel::findOrFail($id);
        $berita->delete();
        return redirect()->route('berita.index');
    }
}
