<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'link' => 'required',
        ]);
        
        $idInput = $request->input('idInput');
        $judulInput = $request->input('judulInput');
        $deskripsiInput = $request->input('deskripsiInput');
        $linkInput = $request->input('linkInput');
        
        
        $query = DB::table('materi')->insert([
            'id' => $idInput,
            'judul' => $judulInput,
            'deskripsi' => $deskripsiInput,
            'link' => $linkInput
        ]);
        if ($query) {
            return redirect()->route('course')->with('success', 'Data Materi Berhasil Ditambahkan');
        } else {
            return redirect()->route('course')->with('failed', 'Data Materi Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['id_course'] = $id;
        $data['materi'] = DB::table('materi')->where('id', $id)->get();
        return view('detailMateri', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['materi'] = DB::table('materi')->where('id_materi', $id)->first();
        return view('editMateri', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $judulInput = $request->input('judulInput');
        $deskripsiInput = $request->input('deskripsiInput');
        $linkInput = $request->input('linkInput');
    
        $query = DB::table('materi')->where('id_materi', $id)->update([
            'judul' => $judulInput,
            'deskripsi' => $deskripsiInput,
            'link' => $linkInput
            
        ]);

        if ($query) {
            return redirect()->route('course')->with('success', 'Data Materi Berhasil Diupdate');
        } else {
            return redirect()->route('course')->with('failed', 'Data Materi Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $query = DB::table('materi')->where('id_materi', $id)->delete();
        if ($query) {
            return redirect()->route('course')->with('success', 'Data Materi Berhasil Dihapus');
        } else {
            return redirect()->route('course')->with('failed', 'Data Materi Dihapus');
        }
    }
}
