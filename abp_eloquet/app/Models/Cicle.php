<?php

namespace App\Models;

use App\Models\Curs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cicle extends Model
{
    use HasFactory;

    protected $table = 'cicles';
    // protected $primaryKey = 'id';
    // public $incrementing = true;
    public $timestamps = false;

    public function cursos()
    {
        return $this->hasMany(Curs::class, 'cicles_id');
    }
}
