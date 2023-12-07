<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoEvent extends Model
{
    use HasFactory;

    protected $table = 'photos_events';
    public function event(){
        return $this->belongsTo(Event::class);
    }
}
