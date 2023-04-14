<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

   /**
    * Get all of the comments for the Categories
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function products()
   {
       return $this->hasMany(products::class);
   }

}
