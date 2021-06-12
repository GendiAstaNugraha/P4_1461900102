<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class buku extends Model
{
    public function allData(){
        return DB::table('rak_buku')
            ->join('buku', 'buku.id', '=', 'rak_buku.id_buku')
            ->join('jenis_buku', 'jenis_buku.id', '=', 'rak_buku.id_jenis_buku')
            ->get();
    }
}
