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
        'voluntariado' => 0,
    ];

    public static function estado_opcoes()
    {
        return [
            'concluido' => 'Concluído',
            'em andamento' => 'Em Andamento',
            'cancelado' => 'Cancelado',
            'indisponivel' => 'Indisponível',
        ];
    }

    public function fotografias()
    {
        return $this->hasMany(FotografiaProjeto::class, 'projeto_id');
    }

    public function partnerships()
    {
        return $this->belongsToMany(Partnership::class, 'projects_partnerships', 'projeto_id', 'partnership_id');
    }
}
