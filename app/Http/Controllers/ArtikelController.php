<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

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
        $artikel = Artikel::take(2)->get();
        return view('welcome', compact('berita', 'artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                $berita->deletecover();
                $img = $request->file('cover');
                $name = rand(1000, 9999) . '_' . $img->getClientOriginalName();
                $img->move('covers/berita', $name);
        
                $berita->cover = $name;
            } else {
    
                $berita->cover = null;
            }
    
            $berita->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
