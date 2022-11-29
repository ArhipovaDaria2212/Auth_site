<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Film;

class Genres extends Model
{
    public function Film()
    {
        return $this->belongsToMany(Film::class);
    }
}
