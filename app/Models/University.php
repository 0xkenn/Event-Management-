<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class University extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function venues(): HasMany
    {
        return $this->hasMany(Venue::class);
    }
    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
