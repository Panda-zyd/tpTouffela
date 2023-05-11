<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    public function etudiant_classe(){
        return $this->belongsTo(Classe::class);
    }
    protected $table = 'etudiants';
    protected $primaryKey = 'codeE';
    protected $fillable = ['codeE', 'nom', 'prenom', 'adresse',' dateNaissance','idclasse'];
    use HasFactory;
}
