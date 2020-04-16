<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ApiController extends Controller
{
    public function biodata()
    {
        $biodata = DB::table('biodata')->get();

        return $biodata;
    }
    
    public function biodatasearch(Request $request)
    {
        $nama_siswa = $request->nama_siswa;
        $biodata = DB::table('biodata')
                   ->where('nama_siswa', 'LIKE', '%'.$nama_siswa.'%')
                   ->get();

        return $biodata;
    }
}
