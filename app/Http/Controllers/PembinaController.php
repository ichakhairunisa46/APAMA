<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

date_default_timezone_set("Asia/Makassar");

class PembinaController extends Controller
{
    public function penilaian()
    {
        return view('pembina.penilaian');
    }

    public function penilaianSave(Request $request)
    {

    }

    public function sertifikat()
    {
        return view('pembina.sertifikat');
    }

    public function sertifikatSave(Request $request)
    {

    }
}
