<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TahunAngkatan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tahun_angkatan';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_ta', 'id');
    }
    
    public function mapel()
    {
        return $this->hasMany(MataPelajaran::class, 'id_mapel', 'id');
    }
}
