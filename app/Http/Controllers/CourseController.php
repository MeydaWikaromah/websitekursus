<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['course'] = DB::select('SELECT * FROM course');
        return view('course', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahCourse');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'durasi' => 'required',
        ]);
        
        $judulInput = $request->input('judulInput');
        $deskripsiInput = $request->input('deskripsiInput');
        $durasiInput = $request->input('durasiInput');
        
        
        $query = DB::table('course')->insert([
                'judul' => $judulInput,
                'deskripsi' => $deskripsiInput,
                'durasi' => $durasiInput
        ]);
        if ($query) {
            return redirect()->route('course')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('course')->with('failed', 'Data Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data['course'] = DB::select('SELECT * FROM course');
        return view('home', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['course'] = DB::table('course')->where('id', $id)->first();
        return view('editCourse', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $judulInput = $request->input('judulInput');
        $deskripsiInput = $request->input('deskripsiInput');
        $durasiInput = $request->input('durasiInput');
    
        $query = DB::table('course')->where('id', $id)->update([
            'judul' => $judulInput,
            'deskripsi' => $deskripsiInput,
            'durasi' => $durasiInput
            
        ]);

        if ($query) {
            return redirect()->route('course')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('course')->with('failed', 'Data Gagal Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $query = DB::table('course')->where('id', $id)->delete();
        if ($query) {
            return redirect()->route('course')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('course')->with('failed', 'Data Gagal Dihapus');
        }
    }
}
