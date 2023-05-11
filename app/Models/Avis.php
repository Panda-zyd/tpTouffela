<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    public function etudiant(){
        return $this->belongsTo(Etudiant::class);
    }
    public function formation(){
        return $this->belongsTo(Formation::class);
    }
    protected $table = 'avis';
    protected $primaryKey = 'id';
    protected $fillable = ['idE', 'idf', 'points'];
    use HasFactory;
}
