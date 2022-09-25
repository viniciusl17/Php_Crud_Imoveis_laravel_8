<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'rua',
        'numero',
        'bairro',
        'complemento'
    ];

    public function imovel()
    {
        return $this->belongsTo(Imovel::class);
    }
}
