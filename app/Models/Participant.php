<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $fillable = [ 'event_id','member_doner_id','obs' ];

    public function member_doner(){
        return $this->belongsTo(Member_Doner::class,'member_doner_id','id');
    }
    public function event(){
        return $this->belongsTo(Event::class);
    }
}
