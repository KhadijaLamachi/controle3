<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Formateur;

class Groupe extends Model
{
    use HasFactory;
    protected $fillable = ['intitule','nbr_stagiaires'];
    public function formateurs(){
        return $this->belongsToMany(Formateur::class);
    }
}
