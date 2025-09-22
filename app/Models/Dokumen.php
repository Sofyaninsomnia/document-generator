<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;
    protected $table = 'dokumen';

    protected $fillable = [
        'kode',
        'file_00',
        'file_50',
        'file_100',
        'lokasi',
        'kegiatan',
        'keterangan'
    ];
}
