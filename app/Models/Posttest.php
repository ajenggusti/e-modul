<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posttest extends Model
{
    use HasFactory;
    protected $table = 'posttest';
    protected $guarded = [];

    public function materi()
    {
        return $this->belongsTo(Materi::class, 'id_materi');
    }
    public function jawaban()
    {
        return $this->hasMany(Jawaban::class, 'id_post_test');
    }
}
