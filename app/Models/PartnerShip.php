<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartnerShip extends Model
{
    use HasFactory;
    protected $table = 'partnerships';
    public $timestamps=false;
    protected $fillable = [ 'name' ];
    public function events(){
        return $this->belongsToMany(Event::class,'events_partnerships','partnership_id','event_id');
    }
    public function projects(){
        return $this->belongsToMany(Projeto::class,'events_partnerships','partnership_id','projeto_id');
    }

}
