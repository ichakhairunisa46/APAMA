<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

date_default_timezone_set("Asia/Makassar");

class MagangController extends Controller
{
    public function absensi()
    {
        return view('magang.absensi');
    }

    public function absensiSave(Request $request)
    {

    }

    public function laporanHarian()
    {
        return view('magang.laporanHarian');
    }

    public function laporanHarianSave(Request $request)
    {

    }

    public function judulMagang()
    {
        return view('magang.judulMagang');
    }

    public function judulMagangSave(Request $request)
    {

    }
}
