<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function statutVente(){
        return $this->belongsTo(statutVente::class, "statut_vente_id", "id");
    }

    public function paiement(){
        return $this->hasMany(Paiement::class);
    }

    public function articles(){
        return $this->belongsToMany(Article::class, "article_vente", "vente_id", "article_id"); /* Cette ligne concerne la table intermédiare article_vente (etreDemandePour) */
    }

}
