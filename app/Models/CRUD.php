<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CRUD extends Model
{
    protected $table = 'paciente';
    protected $fillable = [
        'name',
        'cpf',
        'sexo',
        'endereco'
    ];
}
