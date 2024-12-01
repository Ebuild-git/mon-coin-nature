<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commandes extends Model
{
    use HasFactory;
    protected $table = 'commandes';

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'adresse',
        'note',
        'avatar',
        'coupon',

            "phone",
           
            "pays",
            "gouvernorat",
            "frais", 
        'password',
        'user_id',
        'mode',
        'transport_id'

        
    ];



    public function contenus()
    {
        return $this->hasMany(contenu_commande::class, 'id_commande');
    }

    public function montant(){
        $total = $this->transport->frais;
        foreach ($this->contenus as $contenu){
            $total += $contenu->prix_unitaire * $contenu->quantite;
        }
        return $total ?? 0;
    }
    public function transport(){
        return $this->belongsTo(Transport::class,'tranport_id', 'id');
    }




    public function client(){
        return $this->belongsTo(clients::class, 'phone','phone');
    }

    public function modifiable(){
        if ($this->statut === 'retournée' || $this->statut === 'payée' || $this->statut === 'livrée') {
            return false;
        } else {
            return true;
        }
        
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function shipping(){
        return $this->belongsTo(Transport::class,'tranport_id', 'id')->withDefault();
    }
}
