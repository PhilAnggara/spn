<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'siswa';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function ta()
    {
        return $this->belongsTo(TahunAngkatan::class, 'id_ta', 'id');
    }
    
    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id_siswa', 'id');
    }
}
