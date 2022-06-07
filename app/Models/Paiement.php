<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function ventes(){
        return $this->belongsTo(Vente::class, "vente_id", "id");
    }
}
