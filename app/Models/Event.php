<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [ 'name','descricao','data','vagas','localizacao' ];

    public function photos(){
        return $this->hasMany(PhotoEvent::class);
    }
    public function partnerships(){
        return $this->belongsToMany(PartnerShip::class,'events_partnerships','event_id','partnership_id');
    }
    public function participants(){
        return $this->hasMany(Participant::class);
    }
}
