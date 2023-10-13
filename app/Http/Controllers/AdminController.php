<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

date_default_timezone_set("Asia/Makassar");

class AdminController extends Controller
{
    public function instansi()
    {
        $data = DB::table('tb_instansi')->get();

        return view('admin.instansi', compact('data'));
    }

    public function instansiSave(Request $request)
    {

    }

    public function level()
    {
        $data = DB::table('tb_level')->get();

        return view('admin.level', compact('data'));
    }

    public function levelSave(Request $request)
    {

    }

    public function users()
    {
        $data = DB::table('tb_user AS tu')
        ->leftJoin('tb_user AS tu2', 'tu.user_id', '=', 'tu2.created_by')
        ->leftJoin('tb_user AS tu3', 'tu.user_id', '=', 'tu3.updated_by')
        ->leftJoin('tb_instansi AS ti', 'tu.id_instansi', '=', 'ti.instansi_id')
        ->leftJoin('tb_level AS tl', 'tu.id_level', '=', 'tl.level_id')
        ->select('ti.instansi_jenis', 'ti.instansi_nama', 'ti.instansi_alamat', 'ti.instansi_notelp', 'tl.level_nama', 'tu2.nama AS created_nama', 'tu3.nama AS updated_nama', 'tu.*')
        ->get();

        return view('admin.users', compact('data'));
    }

    public function userSave(Request $request)
    {

    }
}
