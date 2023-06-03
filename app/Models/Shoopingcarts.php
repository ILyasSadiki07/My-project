<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoopingcarts extends Model
{
    use HasFactory;

    protected $table = 'shooping_carts';

    protected $fillable = ['id','id_produit','name_produit','unit_price','url_images'];


}
