<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getberita(){
        $data_berita = Artikel::all();
        return response()->json([
            'data' => $data_berita,
        ]);
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
        // 'cover' => 'required|string',
        // 'judul' => 'required|string|max:255',
        // 'isi' => 'required|string', 
        // 'tanggal' => 'required|date',
        // 'id_kategori' => 'required|exist:id_kategori'
        // ]);

        $berita = new Artikel();
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->tanggal = $request->tanggal;
        $berita->id_kategori = $request->id_kategori;

        if ($request->hasFile(key: 'cover')) {
            $berita->deleteImage();
            $img = $request->file('cover');
            $name = rand(1000, 9999) . '_' . $img->getClientOriginalName();
            $img->move('covers/berita', $name);
    
            $berita->cover = $name;
        } else {

            $berita->cover = null;
        }

        $berita->save();

        return response()->json([
            'success' => true,
            'message' => 'Berita berhasil di tambahkan.'
        ], 201);

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
