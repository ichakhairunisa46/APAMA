<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

date_default_timezone_set("Asia/Makassar");

class AdminModel extends Model
{
    public static function data_instansi()
    {
        return DB::table('tb_instansi')->get();
    }

    public static function data_level()
    {
        return DB::table('tb_level')->get();
    }

    public static function data_user()
    {
        return DB::table('tb_user AS tu')
        ->leftJoin('tb_user AS tu2', 'tu.user_id', '=', 'tu2.created_by')
        ->leftJoin('tb_user AS tu3', 'tu.user_id', '=', 'tu3.updated_by')
        ->leftJoin('tb_instansi AS ti', 'tu.id_instansi', '=', 'ti.instansi_id')
        ->leftJoin('tb_level AS tl', 'tu.id_level', '=', 'tl.level_id')
        ->select(
            'ti.instansi_jenis',
            'ti.instansi_nama',
            'ti.instansi_alamat',
            'ti.instansi_notelp',
            'tl.level_nama',
            'tu2.nama AS created_nama',
            'tu3.nama AS updated_nama',
            'tu.*'
        )
        ->get();
    }
}
