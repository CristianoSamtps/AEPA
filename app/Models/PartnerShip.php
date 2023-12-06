<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerShip extends Model
{
    use HasFactory;
    protected $table = 'partnerships';
    public $timestamps=false;
    protected $fillable = [ 'name' ];

}
