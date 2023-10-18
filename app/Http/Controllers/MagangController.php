<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Model\MagangModel;

date_default_timezone_set("Asia/Makassar");

class MagangController extends Controller
{
    public function absensi()
    {
        $data = MagangModel::data_absensi();

        return view('magang.absensi', compact('data'));
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
