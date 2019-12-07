<?php

namespace App\Http\Controllers;
use App\Artikel;
use App\Kategori;

use Illuminate\Http\Request;

class artikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();

        return view('artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

   
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tampilkan()
    {
        $artikel = Artikel::all();

        return view('artikel.dashboard',compact('artikel'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|min:4',
            'konten'=> 'required',
        ]);
        Artikel::create($request->all());
        return redirect()->route('kategori.index')->with('pesan','berhasil di masukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $artikel=Artikel::findOrFail($id);
     return view('artikel.edit',compact('artikel'));
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
        $request->validate([
            'judul' => 'required|min:4',
            'konten'=> 'required',
        ]);
        $artikel =Artikel::find($id);
        $artikel->update($request->all());

        return redirect()->route('artikel.index')->with('pesan','berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel=Artikel::find($id)->delete();
        
        return redirect()->route('artikel.index')->with('pesan','berhasil di hapus');
    }
}
