<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'tb_buku';
    protected $primaryKey = 'id_buku';
    protected $fillable = [
        'judul','penulis','kategori','deskripsi'
    ];
    public $timestamps = false;
}
