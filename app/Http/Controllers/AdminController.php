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

    }

    public function level()
    {
        $data = AdminModel::data_level();

        return view('admin.level', compact('data'));
    }

    public function levelSave(Request $request)
    {

    }

    public function users()
    {
        $data = AdminModel::data_user();

        return view('admin.users', compact('data'));
    }

    public function userSave(Request $request)
    {

    }
}
