<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanType extends Model
{
    protected $table = 'plantypes';

    protected $fillable = [
        'name',
        'duracao',
        'valor',
        'proximo_pag'
    ];

    public function plans()
    {
        return $this->hasMany(Plan::class, 'planType_id');
    }
}
