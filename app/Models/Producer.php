<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Film;
class Producer extends Model
{
  public function film()
  {
    return $this->hasMany(film::class);
  }
}
