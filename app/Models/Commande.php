<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $table = 'commande';
    
    protected $fillable = ['id_user','id_produit', 'name_produit', 'unit_price', 'url_images'];

    // Define the relationships with other models
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    
    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
    }    
