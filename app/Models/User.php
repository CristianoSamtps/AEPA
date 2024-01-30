<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;
    //Tem a coluna deleted_at
    //use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'tipo',
        'genero',
        'telemovel',
        'data_nascimento'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function tipoToStr()
    {
        switch ($this->tipo) {
            case 'M':
                return 'Membro ou doador';
            case 'A':
                return 'Admin';
        }
    }

    public function generoToStr()
    {
        switch ($this->genero) {
            case 'F':
                return 'Feminino';
            case 'M':
                return 'Masculino';
            case 'O':
                return 'Outro';
            case 'N':
                return 'Prefiro não dizer';
        }
    }

    public function member_doner()
    {
        return $this->hasOne(Member_Doner::class, 'id', 'id');
    }

    public function isAdmin()
    {
        return $this->tipo == 'A';
    }

    /*CRIAR MÉTODO SIMILAR PARA TODOS OS RELACIONAMENTOS COM A TABELA DOS USERS
       public function projects()
       {
           return $this->hasMany(Project::class);
           //Quando as chaves não seguem as convenções
           //return $this->hasMany(Project::class,'user_id','id');
       }
       */
    public function donations()
    {
        return $this->member_doner_id->donations();
    }
    // DOAÇÕES NO PERFIL NAO MEXER
    public function doacoes()
    {
        return $this->hasMany(Donation::class, 'member_doner_id');
    }

    public function projetos()
    {
        return $this->belongsToMany(Projeto::class, 'voluntariado', 'user_id', 'projeto_id');
    }

    public function voluntariados()
    {
        return $this->hasMany(Voluntariado::class, 'user_id');
    }

    public function events()
    {
        return $this->belongsToMany(Event::class, 'participants', 'member_doner_id', 'event_id');
    }

    public function participant()
    {
        return $this->hasOne(Participant::class, 'member_doner_id');
    }
    
}
