<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'number',
        'season',
        'sinopsis',
        'file',
        'serie_id',
    ];
    /*
    public function media(){
        return $this->belongsTo (Media::class)
    }
    */
}