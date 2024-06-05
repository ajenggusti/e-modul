<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    protected $table = 'materi';
    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'id_mapel');
    }
    public function materi()
    {
        return $this->hasMany(Materi::class, 'id_materi');
    }

    public function pretest(){
        return $this->hasMany(Pretest::class, 'id_materi');
    }

}
