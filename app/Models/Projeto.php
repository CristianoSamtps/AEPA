<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'titulo',
        'subtitulo',
        'descricao',
        'estado',
        'localidade',
        'objetivos',
        'data_final',
        'voluntariado' => 0, // Valor padrão para voluntariado
    ];

    // Define a relação de um para um com a classe Voluntariado.
    public function voluntariado()
    {
        return $this->hasOne(Voluntariado::class, 'projeto_id');
    }

    // Retorna as opções de estados dos projetos.
    public static function estado_opcoes()
    {
        return [
            'concluido' => 'Concluído',
            'em andamento' => 'Em Andamento',
            'cancelado' => 'Cancelado',
            'indisponivel' => 'Indisponível',
        ];
    }

    // Define a relação de um para muitos com as Fotografias do Projeto.
    public function fotografias()
    {
        return $this->hasMany(FotografiaProjeto::class, 'projeto_id');
    }

    // Define a relação muitos para muitos com as Parcerias.
    public function partnerships()
    {
        return $this->belongsToMany(Partnership::class, 'projects_partnerships', 'projeto_id', 'partnership_id');
    }

    // Define a relação de um para muitos com as Doações.
    public function donations()
    {
        return $this->hasMany(Donation::class, 'projeto_id');
    }
}
