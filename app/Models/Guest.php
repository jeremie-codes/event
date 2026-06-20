<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
     protected $fillable = [
        'name',
        'phone',
        'table_id',
        'invitation_pdf',
        'status',
        'comment',
        'responded_at'
    ];

    public function drinks()
    {
        return $this->belongsToMany(Drink::class);
    }

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}
