<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';
    protected $fillable = ['nik', 'nama', 'departemen_id', 'alamat'];

    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'departemen_id');
    }
}
