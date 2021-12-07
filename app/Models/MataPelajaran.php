<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MataPelajaran extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'mata_pelajaran';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function ta()
    {
        return $this->belongsTo(TahunAngkatan::class, 'id_ta', 'id');
    }
    public function instruktur()
    {
        return $this->belongsTo(User::class, 'id_instruktur', 'id');
    }
    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id_mapel', 'id');
    }
}
