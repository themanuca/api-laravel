<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CRUD extends Model
{
    protected $table = 'paciente';
    protected $fillables = [
        'nome_user',
        'cpf_user',
        'sexo_user',
        'endereco_user'
    ];
}
