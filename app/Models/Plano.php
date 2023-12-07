<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    use HasFactory;

    public function member_doner(){
        return $this->belongsTo(Member_Doner::class,'member_doner_id','id');
    }
}
