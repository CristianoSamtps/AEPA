<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member_Doner extends Model
{
    use HasFactory;
    protected $table='members_doners';
    public $incrementing=false;

    protected $fillable = [
        'subscrito',
        'metodo_pag'

    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');

    }
    public function sugestoes(){
        return $this->hasMany(Sugestao::class,'member_doner_id','id');

    }
    public function voluntarios(){
        return $this->hasMany(Voluntario::class,'member_doner_id','id');

    }
    public function doacoes(){
        return $this->hasMany(Doacao::class,'member_doner_id','id');

    }
    public function participantes(){
        return $this->hasMany(Participante::class,'member_doner_id','id');

    }
    public function plano(){
        return $this->hasOne(Plano::class,'member_doner_id','id');
    }

}
