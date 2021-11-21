<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nilai extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'nilai';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id');
    }
    
    public function mapel()
    {
        return $this->belongsTo(MataPelajaran::class, 'id_mapel', 'id');
    }
}
