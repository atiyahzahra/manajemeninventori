<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use HasFactory;
    protected $table = 'manajemen';
    // protected $fillable = ['id, nama_barang, jenis_barang, jumlah, tanggal_masuk_barang'];
    protected $guarded = [];
    public $timestamps = false;
}
