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
        Schema::create('produit', function (Blueprint $table) {
            $table->id('Id_Produit');
            $table->string('nom_produit',50);
            $table->string('description',60);
            $table->integer('prix_par_piéce');
            $table->decimal('quantité_minimale');
            $table->string('type_produit',20);
            $table->string('sous_type',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produit');
    }
};
