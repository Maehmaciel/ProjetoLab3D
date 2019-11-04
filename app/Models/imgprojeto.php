<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Imgprojeto extends Model
{
    protected $fillable = [
        'name'
    ];
    public function projetoFuncImg(){
        return $this->belongsTo(Projeto::class);
    }
}
