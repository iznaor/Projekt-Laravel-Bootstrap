<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table='movies';
    protected $fillable = ['movie_title','movie_release_year', 'movie_runtime_minutes','imdb_rating','metascore_rating'];
    public $timestamps = false;
    protected $primaryKey = 'movie_id';




    use HasFactory;
}
