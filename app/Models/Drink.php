<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $fillable = [
        'name',
        'quantity',
        'image'
    ];

    public function guests()
    {
        return $this->belongsToMany(Guest::class);
    }
}
