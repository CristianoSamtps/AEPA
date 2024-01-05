<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanTable extends Model
{
    protected $table = 'plans';



    protected $fillable = [
        'date',
        'metodo_pag',
        'proximo_pag',
        'planType_id'
    ];

    public function planType()
    {
        return $this->belongsTo(PlanType::class, 'planType_id');
    }

    public function member_doner(){
        return $this->belongsTo(Member_Doner::class,'member_doner_id','id');
    }

    public function plan_type(){
        return $this->belongsTo(PlanType::class,'planType_id','id');
    }
}
