<?php

namespace App\Models;

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
        ->leftJoin('tb_agama AS ta', 'tu.agama', '=', 'ta.agama_id')
        ->leftJoin('tb_gender AS tg', 'tu.jenis_kelamin', '=', 'tg.gender_id')
        ->select(
            'ti.instansi_jenis',
            'ti.instansi_nama',
            'ti.instansi_alamat',
            'ti.instansi_notelp',
            'tl.level_nama',
            'ta.agama_nama',
            'tg.gender_nama',
            'tu2.nama AS created_nama',
            'tu3.nama AS updated_nama',
            'tu.*'
        )
        ->get();
    }

    public static function instansiSave($request)
    {
        switch ($request->id) {
            case 'new':
                    DB::table('tb_instansi')->insert([
                        'instansi_jenis'  => $request->instansi_jenis,
                        'instansi_nama'   => $request->instansi_nama,
                        'instansi_alamat' => $request->instansi_alamat,
                        'instansi_notelp' => $request->instansi_notelp
                    ]);
                break;

            default:
                    DB::table('tb_instansi')->where('instansi_id', $request->id)->update([
                        'instansi_jenis'  => $request->instansi_jenis,
                        'instansi_nama'   => $request->instansi_nama,
                        'instansi_alamat' => $request->instansi_alamat,
                        'instansi_notelp' => $request->instansi_notelp
                    ]);
                break;
        }
    }

    public static function usersSave($request)
    {
        switch ($request->id) {
            case 'new':
                    DB::table('tb_user')->insert([
                        'id_instansi'   => $request->id_instansi,
                        'id_level'      => $request->id_level,
                        'no_induk'      => $request->no_induk,
                        'nama'          => $request->nama,
                        'no_hp'         => $request->no_hp,
                        'email'         => $request->email,
                        'tempat_lahir'  => $request->tempat_lahir,
                        'tanggal_lahir' => date('Y-m-d', strtotime($request->tanggal_lahir)),
                        'agama'         => $request->agama,
                        'jenis_kelamin' => $request->jenis_kelamin,
                        'alamat'        => $request->alamat,
                        'password'      => $request->password,
                        // 'created_by'    => session('auth')->user_id,
                        'created_at'    => date('Y-m-d H:i:s')
                    ]);
                break;

            default:
                    DB::table('tb_user')->where('user_id', $request->id)->update([
                        'id_instansi'   => $request->id_instansi,
                        'id_level'      => $request->id_level,
                        'no_induk'      => $request->no_induk,
                        'nama'          => $request->nama,
                        'no_hp'         => $request->no_hp,
                        'email'         => $request->email,
                        'tempat_lahir'  => $request->tempat_lahir,
                        'tanggal_lahir' => date('Y-m-d', strtotime($request->tanggal_lahir)),
                        'agama'         => $request->agama,
                        'jenis_kelamin' => $request->jenis_kelamin,
                        'alamat'        => $request->alamat,
                        'password'      => $request->password,
                        // 'updated_by'    => session('auth')->user_id,
                        'updated_at'    => date('Y-m-d H:i:s')
                    ]);
                break;
        }
    }
}
