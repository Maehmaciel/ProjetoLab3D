<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Arquivoprojeto extends Model
{
    protected $fillable = [
        'name'
    ];
    public function projetoFuncArq(){
        return $this->belongsTo(Projeto::class);
    }
}
