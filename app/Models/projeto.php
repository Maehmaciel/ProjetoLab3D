<?php

namespace App\Models;

use App\Models\Arquivoprojeto;
use App\Models\Imgprojeto;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'infoAdicional'
    ];
    public function imagens(){
        return $this->hasMany(Imgprojeto::class,'id');
    }
    public function arquivos(){
        return $this->hasMany(Arquivoprojeto::class,'id');
    }
}
