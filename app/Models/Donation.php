<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $table = 'doacoes';

    public function member_doner(){
        return $this->hasOne(Member_Doner::class,'member_doner_id');
    }
    public function projeto(){
        return $this->hasOne(Projeto::class,'projeto_id');
    }
}
