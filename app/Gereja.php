<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gereja extends Model
{
    protected $table = "tb_jemaat";
    protected $primaryKey = 'jemaat_id';
    protected $fillable = ['jemaat_kode', 'jemaat_nama',
    'jemaat_status', 'jemaat_alamat'];
}
