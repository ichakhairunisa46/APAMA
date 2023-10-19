<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Model\AdminModel;

date_default_timezone_set("Asia/Makassar");

class AdminController extends Controller
{
    public function instansi()
    {
        $data = AdminModel::data_instansi();

        return view('admin.instansi', compact('data'));
    }

    public function instansiSave(Request $request)
    {
        dd($request->all());
    }

    public function level()
    {
        $data = AdminModel::data_level();

        return view('admin.level', compact('data'));
    }

    public function levelSave(Request $request)
    {
        dd($request->all());
    }

    public function users()
    {
        $get_level    = DB::table('tb_level')->select('level_id AS id', 'level_nama AS text')->get();
        $get_instansi = DB::table('tb_instansi')->select('instansi_id AS id', 'instansi_nama AS text')->get();

        $data         = AdminModel::data_user();

        return view('admin.users', compact('get_level', 'get_instansi', 'data'));
    }

    public function usersSave(Request $request)
    {
        dd($request->all());
    }
}
