<?php

namespace App\Models;

use App\Models\PhotoEvent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    public function PhotoEvent(){
        return $this->hasMany(PhotoEvent::class);
    }

}
