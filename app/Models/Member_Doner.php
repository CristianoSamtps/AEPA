<?php

namespace App\Models;

use App\Models\Plano;
use App\Models\Volunteer;
use App\Models\Participant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member_Doner extends Model
{
    use HasFactory;
    protected $table='members_doners';
    public $incrementing=false;

    protected $fillable = [
        'subscrito',
        'metodo_pag',
        'id'
    ];

    public function user(){
        return $this->belongsTo(User::class,'id','id');

    }
    public function sugestoes(){
        return $this->hasMany(Sugestao::class,'member_doner_id','id');

    }
    public function volunteers(){
        return $this->hasMany(Volunteer::class,'member_doner_id','id');

    }
    public function donations(){
        return $this->hasMany(Donation::class,'member_doner_id','id');

    }
    public function participantes(){
        return $this->hasMany(Participant::class,'member_doner_id','id');

    }
    public function plan(){
        return $this->hasOne(Plan::class,'member_doner_id','id');
    }

}
