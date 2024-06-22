<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;
    protected $table = 'jawaban';
    protected $guarded= [];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function posttest()
    {
        return $this->belongsTo(Posttest::class, 'id_post_test');
    }
}
