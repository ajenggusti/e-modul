<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $table = 'mapel';
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function materi()
    {
        return $this->hasMany(Materi::class, 'id_mapel');
    }
    
}
