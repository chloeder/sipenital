<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personil extends Model
{
    use HasFactory;

    protected $table = 'personils';

    protected $fillable = [
        'nama', 'pangkat', 'tmt_pangkat', 'tmt_berkala', 'nrp_nip', 'satker_id', 'jabatan', 'tmt_jabatan', 'status_marital', 'nama_isteri_suami', 'agama', 'tanggal_lahir', 'alamat', 'no_hp', 'fasilitas_kesehatan', 'no_bpjs', 'nik', 'kasus', 'keterangan',
    ];

    protected $timestamp = false;

    public function satker()
    {
        return $this->belongsTo(Satker::class);
    }
}
