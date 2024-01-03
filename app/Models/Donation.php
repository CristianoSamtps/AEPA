<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $table = 'doacoes';

    public function member_doner()
    {
        return $this->belongsTo(User::class, 'member_doner_id');
    }

    public function projeto()
    {
        return $this->belongsTo(Projeto::class, 'projeto_id');
    }
    protected $fillable = [
        'title'
    ];
}
