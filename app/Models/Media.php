<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sinopsis',
        'year',
        'director',
        'cast',
        'type', // movie/serie
        'genre',
        'poster',
        'file',
        'duration',
    ];

    /*
    public function episode(){
        return $this->hasOne(Episode::class, 'serie_id');
    }
    */
}
