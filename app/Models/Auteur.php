<?php

namespace App\Models;

use App\Models\Livre;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'date_naissance'];
    public function livres(){
        return $this->hasMany(Livre::class,'id_auteur');
    }
}
