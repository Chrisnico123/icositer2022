<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lomba3 extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email','nama_ketua', 'anggota', 'no_wa', 'asal_daerah', 'asal_instansi', 'ktm', 'sub_tema',
        'judul_karya', 'sketsa', 'follow_ig', 'upload_twibbon', 'surat_pernyataan', 'lampiran'
    ];
}
