<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

date_default_timezone_set("Asia/Makassar");

class MagangModel extends Model
{
    public static function data_absensi()
    {
        return DB::table('tb_absensi')->get();
    }

}
