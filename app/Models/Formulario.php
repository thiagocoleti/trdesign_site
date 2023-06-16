<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;
    protected $table = 'formularios';
    protected $connection = 'pgsql';
    protected $fillable = [
        'nomeProjeto',
        'descricao',
        'plataforma',
    ];

    // FORMULARIO --> CADASTRO
    public function cadastro(){
    return $this->belongsTo(Cadastro::class);
    }

    public function propositos() {
        return $this->hasMany(Proposito::class);
       
    }

    public function compartilhamentos() {
        return $this->hasMany(Compartilhamento::class);
       
    }

    public function dados() {
        return $this->hasMany(Dado::class);
       
    }

    public function atores() {
        return $this->hasMany(Ator::class);
       
    }

    public function agenciamentos() {
        return $this->hasMany(Agenciamento::class);
       
    }
}

