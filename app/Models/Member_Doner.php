<?php

namespace App\Models;

use App\Models\PlanTable;
use App\Models\Voluntariado;
use App\Models\Participant;
use App\Models\User;
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
        return $this->hasMany(Voluntariado::class,'member_doner_id','id');

    }
    public function donations(){
        return $this->hasMany(Donation::class,'member_doner_id','id');

    }
    public function participantes(){
        return $this->hasMany(Participant::class,'member_doner_id','id');

    }
    public function plan(){
        return $this->hasOne(PlanTable::class,'member_doner_id','id');
    }

    public function scopeOrderByTotalDoado($query, $order = 'desc') {
        return $query->leftJoin('doacoes', 'doacoes.member_doner_id', '=', 'members_doners.id')
            ->groupBy('doacoes.member_doner_id')
            ->addSelect(['members_doners.*', \DB::raw('sum(valor) as total')])
            ->orderBy('total', $order);
    }

}
