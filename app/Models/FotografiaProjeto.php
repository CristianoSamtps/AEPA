<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotografiaProjeto extends Model
{
    use HasFactory;

    // Nome da tabela na base de dados
    protected $table = 'fotografia_projetos';

    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'foto',
        'destaque',
        'projeto_id',
    ];

    // Define a relação de pertencimento à classe Projeto.
    public function projeto()
    {
        return $this->belongsTo(Projeto::class);
    }
}
