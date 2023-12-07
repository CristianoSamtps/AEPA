<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotografiaProjeto extends Model
{
    use HasFactory;
    protected $table = 'fotografia_projetos';
    protected $fillable = [
        'foto',
        'destaque',
        'projeto_id',
    ];

    public function projeto()
    {
        return $this->belongsTo(Projeto::class);
    }
}
