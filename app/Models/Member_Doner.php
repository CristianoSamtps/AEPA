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
        'id'
    ];
}
