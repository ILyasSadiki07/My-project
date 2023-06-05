<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shooping_carts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->default(0); // Set default value to NULL
            $table->bigInteger('id_produit');
            $table->char('name_produit')->nullable();
            $table->double('unit_price')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->index('id_produit');
            $table->longText('url_images')->nullable();
        });
    }
    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shooping_carts');
    }
};
