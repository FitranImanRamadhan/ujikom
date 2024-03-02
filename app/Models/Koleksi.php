<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Koleksi extends Model {
    use HasFactory;

    protected $table = 'koleksis';
    protected $fillable = ["kd_koleksi", "judul", "jns_bhn_pustaka", "jns_koleksi", "jns_media", "pengarang", "penerbit", "tahun", "cetakan", "edisi", "status"];

}
