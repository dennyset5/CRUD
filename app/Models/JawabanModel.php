<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class JawabanModel
{
    public static function get_all()
    {
        $jawaban = DB::table('jawaban')->get();
        return $jawaban;
    }

    public static function save($data)
    {
        unset($data["_token"]);
        dd($data);
        $jawaban_baru = DB::table('jawaban')->insert($data);
        return $jawaban_baru;
    }

    public static function cari($id)
    {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();

        return $pertanyaan;
    }
}
