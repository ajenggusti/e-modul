<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pretest extends Model
{
    use HasFactory;
    protected $table = 'pretest';
    public function materi(){
        return $this->belongsTo(Materi::class, 'id_materi');
    }
    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
