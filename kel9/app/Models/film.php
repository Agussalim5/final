<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    use HasFactory;

    protected $table = 'film';

    protected $fillable = ['judul', 'slug', 'ringkasan', 'tahun', 'poster', 'is_active', 'genre_id'];

    public function genre()
    {
        return $this->belongsTo(genre::class);
    }
}
