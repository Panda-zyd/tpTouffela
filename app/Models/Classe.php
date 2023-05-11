<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    public function formation(){
        return $this->belongsTo(Formation::class);
    }

    public function etudiant_classe(){
        return $this->hasMany(Etudiant::class);
    }
    protected $table = 'classes';
    protected $primaryKey = 'idc';
    protected $fillable = ['idc', 'libell', 'idformation', 'NombreMax'];
    use HasFactory;
}
