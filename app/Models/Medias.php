<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medias extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom','prenom','date_de_naissance','adresse','type','nom_de_poste','salaire','ville','code_postal'
        'path','numero_portable'
    ];
}
