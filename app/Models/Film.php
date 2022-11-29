<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genres;

class Film extends Model
{
    public function genres()
  {
    return $this->belongsToMany(Genres::class);
  }
  public $timestamps = false;
}
