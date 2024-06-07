<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peran extends Model
{
    use HasFactory;

    protected $table='peran';

    protected $fillable = ['film_id', 'cast_id', 'nama'];

    public function film()
    {
        return $this->belongsTo(film::class);
    }

    public function cast()
    {
        return $this->belongsTo(cast::class);
    }
}
