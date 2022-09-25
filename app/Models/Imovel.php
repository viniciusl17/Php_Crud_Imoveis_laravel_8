<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'terreno',
        'salas',
        'banheiros',
        'dormitorios',
        'garagens',
        'descricao',
        'preco',
        'cidade_id',
        'tipo_id',
        'finalidade_id',
    ];

    protected $table = "imoveis";

    public function endereco()
    {
        return $this->hasOne(Endereco::class);
    }

    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }

    public function finalidade()
    {
        return $this->belongsTo(Finalidade::class);
    }

    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }

    public function proximidades()
    {
        return $this->belongsToMany(Proximidade::class)->withTimestamps(); //com o timestamps na tabela;
    }
}
