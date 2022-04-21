<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Naker extends Model
{
    use HasFactory;

    protected $guarded = ['nik', 'status_naker'];

    public function pendidikan()
    {
        return $this->hasOne(Pendidikan::class, 'id', 'pendidikan_id');
    }

    public function direktorat()
    {
        return $this->hasOne(Direktorat::class, 'id', 'direktorat_id');
    }

    public function mitra()
    {
        return $this->hasOne(Mitra::class, 'id', 'mitra_id');
    }

    public function posisiMitra()
    {
        return $this->hasOne(PosisiMitra::class, 'id', 'posisi_id');
    }
}
