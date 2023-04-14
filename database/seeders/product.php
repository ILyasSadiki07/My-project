<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class product extends Seeder
{
    /**
     * Run the database seeds.
     */
    static $name_product=[
        'wheat',
        'corne',
        'barley',
        'lentil'
    ];
    static $unit_prices=[
        '5',
        '10',
        '7',
        '12'
    ];

    public function run(): void
    {
       DB::table('products')->insert([
        'name_product'=>'wheat',
        'categorie_id'=>1,
        'unit_price'=>5,
        'url_images'=>'/pack/img/grain/ble_vxwuj5.jpg'
       ]);
       DB::table('products')->insert([
        'name_product'=>'corne',
        'categorie_id'=>1,
        'unit_price'=>4.7,
        'url_images'=>'/pack/img/grain/cornjpg.jpg'
       ]);
       DB::table('products')->insert([
        'name_product'=>'barley',
        'categorie_id'=>1,
        'unit_price'=>6,
        'url_images'=>'/pack/img/grain/barley.jpg'
       ]);
       DB::table('products')->insert([
        'name_product'=>'lentil',
        'categorie_id'=>1,
        'unit_price'=>5,
        'url_images'=>'/pack/img/grain/lentil.jpg'
       ]);
       DB::table('products')->insert([
        'name_product'=>'rundup',
        'categorie_id'=>2,
        'unit_price'=>220,
        'url_images'=>'/pack/img/hebibicid/heb1.jpg'
       ]);
       DB::table('products')->insert([
        'name_product'=>'rundupmax',
        'categorie_id'=>2,
        'unit_price'=>350,
        'url_images'=>'/pack/img/hebibicid/heb2.jpg'
       ]);
       DB::table('products')->insert([
        'name_product'=>'rund',
        'categorie_id'=>2,
        'unit_price'=>359,
        'url_images'=>'/pack/img/hebibicid/heb3.jpg'
       ]);
       DB::table('products')->insert([
        'name_product'=>'antiherb',
        'categorie_id'=>2,
        'unit_price'=>554,
        'url_images'=>'/pack/img/hebibicid/heb4.jpg'
       ]);
       DB::table('products')->insert([
        'name_product'=>'sumar',
        'categorie_id'=>3,
        'unit_price'=>1350,
        'url_images'=>'/pack/img/phosphat/phos1jpg.jpg'
       ]);
       DB::table('products')->insert([
        'name_product'=>'selagro',
        'categorie_id'=>3,
        'unit_price'=>850,
        'url_images'=>'/pack/img/phosphat/sel1jpg.jpg'
       ]);
       DB::table('products')->insert([
        'name_product'=>'radill',
        'categorie_id'=>3,
        'unit_price'=>2300,
        'url_images'=>'/pack/img/phosphat/phos2jpg.jpg'
       ]);
       DB::table('products')->insert([
        'name_product'=>'helio',
        'categorie_id'=>3,
        'unit_price'=>650,
        'url_images'=>'/pack/img/phosphat/sel2jpg.jpg'
       ]);
       DB::table('products')->insert([
        'name_product'=>'tamar',
        'categorie_id'=>3,
        'unit_price'=>320,
        'url_images'=>'/pack/img/phosphat/phos1jpg.jpg'
       ]);
    }
}