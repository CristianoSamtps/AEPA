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
    ];

    public function fotografias()
    {
        return $this->hasMany(FotografiaProjeto::class, 'projeto_id');
    }

    public function partnerships()
    {
        return $this->belongsToMany(Partnership::class, 'projects_partnerships', 'projeto_id', 'partnership_id');
    }

    public function volunteers()
    {
        return $this->hasMany(Volunteer::class);
    }
    public function donations()
    {
        return $this->hasMany(Donation::class,'projeto_id');
    }

    public function voluntariados()
    {
        return $this->hasMany(Voluntariado::class);
    }

}
