<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    public function classe(){
        return $this->hasMany(Classe::class);
    }
    protected $table = 'formations';
    protected $primaryKey = 'idf';
    protected $fillable = ['idf', 'Titre', 'NbreHeure'];
    use HasFactory;
}
