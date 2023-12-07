<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanType extends Model
{
    use HasFactory;

    protected $table = 'planTypes';
    public function plan(){
        return $this-> hasMany(Plan::class,'planType_id','id');
    }
}
