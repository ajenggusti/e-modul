<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = 'nilai';

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function materi(){
        return $this->belongsTo(Materi::class, 'id_materi');
    }
}
