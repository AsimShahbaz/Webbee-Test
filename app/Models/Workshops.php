<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshops extends Model
{
    use HasFactory;
    protected $fillable = [
        'start',
        'end',
        'event_id',
        'name',
    ];

    public function event()
    {
        return $this->belongsTo(Events::class, 'event_id');
    }

}
