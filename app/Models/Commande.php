<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $table = 'commande';
    
    protected $fillable = [
        'date_commande',
        'user_id',
        'product_id',
        'categorie_id',
        'quantite',
    ];

    // Define the relationships with other models
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
