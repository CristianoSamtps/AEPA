<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'subtitulo',
        'descricao',
        'estado',
        'localidade',
        'objetivos',
        'data_final',
        'voluntariado',
        'partnership_id',
    ];

    public function fotografias()
    {
        return $this->hasMany(FotografiaProjeto::class, 'projeto_id');
    }

    public function partnership()
    {
        return $this->belongsTo(Partnership::class);
    }
}
