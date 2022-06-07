<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function types(){
        return $this->belongsTo(TypeArticle::class, "type_article_id", "id");
    }

    public function tarifications(){
        return $this->hasMany(Tarification::class, "tarification_id", "id");
    }

    public function ventes(){
        return $this->belongsToMany(Vente::class, "article_vente", "article_id", "vente_id"); /*Cette ligne concerne la table intermédiare article_vente (etreDemandePour) */
    }

    public function proprietes(){
        return $this->belongsToMany(ProprieteArticle::class, "propriete_articles", "type_article_id");
    }

}
