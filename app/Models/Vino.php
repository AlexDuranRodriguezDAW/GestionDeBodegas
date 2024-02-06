<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vino extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'tipo', 'anio', 'precio'];

    public function bodega()
    {
        return $this->belongsTo(Bodega::class);
    }
}
