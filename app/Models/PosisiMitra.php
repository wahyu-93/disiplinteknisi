<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosisiMitra extends Model
{
    use HasFactory;

    protected $table = 'posisi_mitras';
    protected $fillable = ['posisi'];
}
