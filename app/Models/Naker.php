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
        return $this->belongsTo(Pendidikan::class);
    }
}
