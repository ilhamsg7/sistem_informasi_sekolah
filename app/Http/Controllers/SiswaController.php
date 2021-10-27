<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //Menampilkan data menggunakan pagination
        $siswas = Siswa::all(); // Mengambil semua isi tabel
        $posts = Siswa::orderBy('nilai', 'desc')->paginate(5);
        return view('siswa',['title' => 'Siswa' ],
            compact('siswas'))
        ->with('i', (request()->input('page', 1)-1)* 5);
    }
}
