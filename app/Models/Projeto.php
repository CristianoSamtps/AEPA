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
        // 'data_final',
    ];

    public function fotografias()
    {
        return $this->hasMany(FotografiaProjeto::class, 'projeto_id');
    }

    // public function partnerships()
    // {
    //     return $this->belongsToMany(Partnership::class, 'projects_partnerships', 'projeto_id', 'partnership_id');
    // }

    // public function volunteer()
    // {
    //     return $this->hasMany(Volunteer::class);
    // }
     public function donations()
     {
         return $this->hasMany(Donation::class, 'projeto_id');
     }

    public static function estado_opcoes()
    {
        return [
            'concluido' => 'Concluído',
            'em andamento' => 'Em Andamento',
            'cancelado' => 'Cancelado',
            'indisponivel' => 'Indisponível',
        ];
    }
}
