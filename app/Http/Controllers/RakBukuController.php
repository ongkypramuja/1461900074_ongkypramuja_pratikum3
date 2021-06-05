<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RakBukuController extends Controller
{
    public function index(Request $request)
    {
        $data = DB::table("rak_buku")
            ->join("buku", "buku.id", "rak_buku.id_buku")  
            ->join("jenis_buku", "jenis_buku.id", "rak_buku.id_jenis_buku")  
            ->get();

        // dd($data);

        return view("dashboard",compact('data'));
    }
}
